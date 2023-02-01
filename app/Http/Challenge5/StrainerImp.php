<?php
namespace App\Http\Challenge5;

class StrainerImp implements Strainer {


    public $juice;
    public $juiceCount;

    public function __construct($juice, $juiceCount)
    {
        $this->juice = $juice;
        $this->juiceCount = $juiceCount;
    }


    public function extractJuice()
    {
        // TODO: Implement extractJuice() method.
    }

    /**
     * @return mixed
     */
    public function getJuice()
    {
        return $this->juice;
    }

    /**
     * @param mixed $juice
     */
    public function setJuice($juice): void
    {
        $this->juice = $juice;
    }

    /**
     * @return mixed
     */
    public function getJuiceCount()
    {
        return $this->juiceCount;
    }

    /**
     * @param mixed $juiceCount
     */
    public function setJuiceCount($juiceCount): void
    {
        $this->juiceCount = $juiceCount;
    }



}
