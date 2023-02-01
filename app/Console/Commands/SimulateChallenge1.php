<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SimulateChallenge1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'simulate:challenge1';

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
        $emplyees = [
            [
                "name" => "Viryl scott",
                "employer" => "Youpi",
                "location" => "Belgrade",
                "salary" => 50
            ],
            [
                "name" => "John Doe",
                "employer" => "src",
                "location" => "Yaounde",
                "salary" => 3000
            ],
            [
                "name" => "Einstein",
                "employer" => "Calendly",
                "location" => "Douala",
                "salary" => 1670
            ],
            [
                "name" => "Enamahus titus",
                "employer" => "Laravel",
                "location" => "Bafoussam",
                "salary" => 750
            ],
            [
                "name" => "Joy",
                "employer" => "Nasa",
                "location" => "Dschang",
                "salary" => 2500
            ],
        ];

        // task 2
        $location = "Dschang";
        dump("The lists of employees living in " . $location);
        dump($this->employeeLivingAt($emplyees, "Dschang"));
        // task 3
        $salary = 2000;
        dump("The lists of employees who have a salary higher than " . $salary);
        dump($this->employeeSalaryIsHigherThan($emplyees, $salary));
        // task 4
        dump("The employee with the highest salary");
        dump($this->workerWithHighestSalary($emplyees));

        dump("The average of salaries is ==>> " . $this->averageSalary($emplyees));

        return 0;
    }

    public function employeeLivingAt($employees, $location) {
        return array_filter($employees, function($employee) use ($location){
            return $employee['location'] == $location;
        });
    }

    public function employeeSalaryIsHigherThan($employees, $salary) {
        return array_filter($employees, function($employee) use ($salary){
            return $employee['salary'] > $salary;
        });
    }

    public function workerWithHighestSalary($employees) {
        usort($employees, function ($a, $b) {
           return  $a['salary'] < $b['salary'];
        });
        return $employees[0];
    }

    public function averageSalary($employees) {
        return array_sum(array_map( function ($employee) {
            return $employee['salary'];
        }, $employees))/count($employees);
    }
}
