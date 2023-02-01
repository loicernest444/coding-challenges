<?php
namespace App\Http\Challenge5;

Abstract class Apple extends Fruit {
    public $isWormy;
    public function __construct($color, $volume, $isWormy) {
//        $this->color = $color;
//        $this->volume = $volume;
        $this->isWormy = $isWormy;
        parent::__construct($color, $volume);
    }

    /**
     * @return mixed
     */
    public function getIsWormy()
    {
        return $this->isWormy;
    }

    /**
     * @param mixed $isWormy
     */
    public function setIsWormy($isWormy): void
    {
        $this->isWormy = $isWormy;
    }

    
}
