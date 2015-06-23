<?php

/**
 * Class Airport
 */
class Airport
{
    const GATE_A = 'gateA';

    const GATE_B = 'gateB';

    const GATE_C = 'gateC';

    /**
     * collection
     *
     * @var array
     */
    private $gateSet = array(
        self::GATE_A => array(),
        self::GATE_B => array(),
        self::GATE_C => array(),
    );

    /**
     * @var array
     */
    private $departArea = array();

    /**
     * @var array
     */
    private $sky = array();

    /**
     * @param $gateNum
     * @param $planeOb
     * @return bool
     */
    public function setGatePlane($gateNum, $planeOb)
    {
        if (empty($this->gateSet[$gateNum])) {
            $this->gateSet[$gateNum] = $planeOb;

            return true;
        }

        return false;
    }

    /**
     * @param $planeOb
     * @return array
     */
    public function setDepartAreaPlane($planeOb)
    {
        $this->departArea[] = $planeOb;

        return $this->departArea;
    }

    /**
     * @param $planeOb
     * @return array
     */
    public function setSky($planeOb)
    {
        $this->sky[] = $planeOb;

        return $this->sky;
    }

    /**
     * @return int
     */
    public function countDepartAreaPlane()
    {
        $countDepartAreaPlane = count($this->departArea);

        return $countDepartAreaPlane;
    }

    /**
     * @return int
     */
    public function countGatePlane()
    {
        $countGatePlane = 0;
        foreach ($this->gateSet as $key => $value) {
            $countSingleGate = count($value);
            $countGatePlane += $countSingleGate;
        }

        return $countGatePlane;
    }

    /**
     * @return int
     */
    public function countAirportPlane()
    {
        $countDepartAreaPlane = $this->countDepartAreaPlane();
        $countGatePlane = $this->countGatePlane();
        $countAirportPlane = $countDepartAreaPlane + $countGatePlane;

        return $countAirportPlane;
    }

    /**
     * @return int
     */
    public function countSkyPlane()
    {
        $countSkyPlane = count($this->sky);

        return $countSkyPlane;
    }
}
