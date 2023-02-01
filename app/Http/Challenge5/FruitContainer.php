<?php
namespace App\Http\Challenge5;

interface FruitContainer {
    public function addFruit();
    public function getFruitCount();
    public function getRemainingSpace();
}
