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

        public function __construct() {
        

// je rempli chaque propriété via la variable 

// "this" fait reference à la classe actuelle 

            $this->name = "Fred Som";
            $this->place = "hotel bali";
            $this->startDate = new DateTime("25-04-15");
            $this->endDate = new DateTime("25-05-17");
            $this->cleaningOption = true;
            $this->nightPrice = 100;

            // valeurs calculées automatiquement (calcul du prix total)
            $totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;

            $this->totalPrice = $totalPrice;
            $this->bookedAt = new DateTime();
            $this->status = "CART";
        }
    }

// création d'un objet avec le mot clé "new" et stocké dans la class $reservation
$reservation = new Reservation();

// utilisation de vardump pour vérifier 
var_dump($reservation); 
