<?php
namespace App\Http\Challenge5;

abstract class Fruit {
    public $color;
    public $volume;
    public function __construct($color, $volume) {
        $this->color = $color;
        $this->volume = $volume;
    }
    abstract public function intro() : string;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume): void
    {
        $this->volume = $volume;
    }


}
