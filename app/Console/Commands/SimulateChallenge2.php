<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SimulateChallenge2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'simulate:challenge2';

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
        $firstArray = array("field1" => "first", "field2" => "second", "field3" => "third");
        $secondArray = array("field1value" => "dinosaur", "field2value" => "pig", "field3value" => "platypus");

        dump("The array merging result is => ");
        dump($this->arrayMerging($firstArray, $secondArray));

        return 0;
    }

    public function arrayMerging($arr1, $arr2){
        $finalArray = [];
        $firstArray = [];
        $secondArray = [];
        foreach ($arr1 as $key => $item){
            $firstArray[] = $item;
        }
        foreach ($arr2 as $item){
            $secondArray[] = $item;
        }
        if (count($secondArray) >= count($firstArray)) {
            foreach ($firstArray as $key => $value) {
                $finalArray[$value] = $secondArray[$key];
            }
        }else{
            for ($i = 0; $i < count($secondArray); $i++) {
                $finalArray[$firstArray[$i]] = $secondArray[$i];
            }
        }

        return $finalArray;
    }
}
