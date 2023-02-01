<?php

namespace App\Console\Commands;

use App\Http\Challenge5\FruitContainerImp;
use App\Http\Challenge5\StrainerImp;
use Illuminate\Console\Command;

class SimulateChallenge5 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'simulate:challenge5';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $fruitContainer = new FruitContainerImp(5, []);
        $strainer = new StrainerImp(2, 5);

        for ($i = 1; $i <= 100; $i++){

        }

        echo "Challenge 5 completed!!!!!!!!!!";
        return 0;
    }
}
