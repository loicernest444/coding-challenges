<?php
namespace App\Http\Challenge5;


class FruitContainerImp implements  FruitContainer {
    public $capacity;
    /**
     * @var Fruit []
     */
    public $fruits = [];

    public function __construct($capacity, $fruits)
    {
        $this->capacity = $capacity;
        $this->fruits = $fruits;
    }


    public function addFruit()
    {
        // TODO: Implement addFruit() method.
    }

    public function getFruitCount()
    {
        // TODO: Implement getFruitCount() method.
    }

    public function getRemainingSpace()
    {
        // TODO: Implement getRemainingSpace() method.
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return mixed
     */
    public function getFruits()
    {
        return $this->fruits;
    }

    /**
     * @param mixed $fruits
     */
    public function setFruits($fruits): void
    {
        $this->fruits = $fruits;
    }
}
