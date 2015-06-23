<?php

/**
 * Class Airline
 */
class Airline extends Plane
{
    /**
     * @var
     */
    private $passengerOnBoard;

    /**
     * @param $passengerOnBoard
     */
    public function setPassengerOnBoard($passengerOnBoard)
    {
        $this->passengerOnBoard = $passengerOnBoard;
    }

    /**
     * @return mixed
     */
    public function getPassengerOnBoard()
    {
        return $this->passengerOnBoard;
    }
}
