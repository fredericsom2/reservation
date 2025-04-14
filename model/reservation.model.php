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


        //"_construct" Sa fonction est d'initialiser un objet quand tu le crées avec new
        public function __construct($name, $place, $startDate, $endDate, $cleaningOption) {
        

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

// création d'un objet avec le mot clé "new" et stocké dans la class $reservation$
// il contient toutes les propiétés de la class



// Création de variables pour passer au constructeur
$name = "Fred Som";
$place = "tahiti";
$start = new DateTime('2025-04-08');
$end = new DateTime('2025-04-10');
$cleaningOption = false;



// Création d'un objet Reservation avec les données ci-dessus
$reservation = new Reservation($name, $place, $end, $cleaningOption);

// utilisation de vardump pour vérifier 
var_dump($reservation); 
