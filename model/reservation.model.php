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

        public $cancelAt;

        public $leaveComment;

        public $pay;

      


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

        // Méthode pour annuler une réservation
       // Si le statut est "CART", on peut annuler la réservation
        // On change alors le statut en "CANCELED"
    public function cancel() { 
        if($this->status === "CART")
            $this ->status = "CANCELED";}
        

        // fonction qui permet stocker dans la classe la date d'annulation quand la reservation est annulée
    public function cancelAt(){
            if ($this->status === "Cancel")
            $this->cancelAt = "DateTime";}



        // fonction qui stocke dans une propriété "comment" un commentaire (texte) et stocke aussi dans une propriété la date à laquelle ça a été commenté
    public function leaveComment(){
            if ($this->status === "Comment")
            $this->leaveComment = "DateTime";}



        // (fonction), qui permet de mettre le status de la réservation en "PAID" et de stocker dans une propriété la date à laquelle le paiement a été fait
    public function pay(){
                if ($this->status === "PAIS")
                $this->leaveComment = "DateTime";}
    

    
        }
    







// Création de variables pour passer au constructeur
$name = "Fred Som";
$place = "tahiti";
$startDate= new DateTime('2025-04-08');
$endDate= new DateTime('2025-04-10');
$cleaningOption = false;


// création d'un objet avec le mot clé "new" et stocké dans la class $reservation$
// il contient toutes les propiétés de la class
$reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption);

$reservation->cancel();

// utilisation de vardump pour vérifier 
var_dump($reservation); 
