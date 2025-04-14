<?php

class Reservation {


// création de plusieurs classe
	public $name;

	public $place;

	public $startDate;

	public $endDate;

	public $totalPrice;

	public $nightPrice;

	public $status;

	public $bookedAt;

	public $cleaningOption;
}

// création d'un objet avec le mot clé "new"
$reservation = new Reservation();

// utilisateur envoie ces valeurs
// temporairement "en dur"

$reservation->name = "Fred Som";
$reservation->place = "hotel bali";
$reservation->startDate = new DateTime("25-04-15");
$reservation->endDate = new DateTime("25-05-17");
$reservation->cleaningOption = true;
$reservation->nightPrice = 100;

// valeurs calculées automatiquement (calcul du prix total)
$totalPrice = (($reservation->endDate->getTimestamp() - $reservation->startDate->getTimestamp()) / (3600 * 24) * $reservation->nightPrice) + 5000;

$reservation->totalPrice = $totalPrice;
$reservation->bookedAt = new DateTime();
$reservation->status = "CART";

// utilisation de vardump pour vérifier 
var_dump($reservation); 