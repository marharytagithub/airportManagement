<?php

// testing
require('lib/Airport.php');
require('lib/Plane.php');
require('lib/Airline.php');
require('lib/Freighter.php');

$planeOb1 = new Airline('078789');
$planeOb1->setPassengerOnBoard(26);
$countPassengersOnBoard = $planeOb1->getPassengerOnBoard();

$planeOb2 = new Freighter('99335');
$planeOb3 = new Freighter('057334');
$planeOb4 = new Freighter('000321');
$planeOb5 = new Freighter('550321');
$planeOb6 = new Freighter('77777');

$airportOb = new Airport();
$airportOb->setDepartAreaPlane($planeOb1);
$airportOb->setSky($planeOb3);
$airportOb->setSky($planeOb4);

$airportOb->setGatePlane($airportOb::GATE_A, $planeOb5);
$airportOb->setGatePlane($airportOb::GATE_C, $planeOb6);

$countDepartAreaPlane = $airportOb->countDepartAreaPlane();
$countSkyPlane = $airportOb->countSkyPlane();
$countPlaneAirport = $airportOb->countAirportPlane();

echo '<pre>';
var_dump($planeOb1);
var_dump($countPassengersOnBoard);
var_dump($countDepartAreaPlane);
var_dump($countSkyPlane);
var_dump($countPlaneAirport);
