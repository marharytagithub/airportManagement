<?php

/**
 * Class Plane
 * This class has been created for the implementation of scaling.
 * We can add classes of other types of planes without changes to the used methods
 */
abstract class Plane
{
    /**
     * @var
     */
    protected $boardNumber;

    /**
     * @param $boardNumber
     */
    public function __construct($boardNumber)
    {
        $this->boardNumber = $boardNumber;
    }

    /**
     * @return mixed
     */
    public function getBoardNumber()
    {
        return $this->boardNumber;
    }
}
