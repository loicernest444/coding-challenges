<?php

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    if (auth()->user()){
//        return redirect('dashboard');
//    }
//    return redirect('login');
    $users = User::with('roles')->get();
    return view('home', compact('users'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $users = User::with('roles')->get();

    return view('dashboard', compact('users'));
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});
