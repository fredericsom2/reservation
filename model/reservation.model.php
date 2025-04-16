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
        public $paidAt;
        public $comment;
        public $commentedAt;
        

        //"_construct" Sa fonction est d'initialiser un objet quand tu le crées avec new
        public function __construct($name, $place, $startDate, $endDate, $cleaningOption) {
        
            if (strlen($name)<2){
                throw new Exception('le nom doit être superieur à 2 caractères');
            }
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
            if ($this->status === "CART") {
                $this->status = "CANCELED";
                $this->cancelAt = new DateTime();
            }}


        
        // fonction, qui permet de mettre le status de la réservation en "PAID" et de stocker dans une propriété la date à laquelle le paiement a été fait
        // si le statut de la réservation est "CART" alors on peut passer le statut en "PAID"
            public function pay() {
                if ($this->status === 'CART') {
                    $this->status = "PAID";
                    $this->paidAt = new DateTime();
        }}



        public function leaveComment($userComment){
            if ($this->status === "PAID") {
                $this->comment = $userComment;
                $this->commentedAt = new DateTime();
        }}}
    


// Création de variables pour passer au constructeur
$name = "Fred Som";
$place = "tahiti";
$startDate= new DateTime('2025-04-08');
$endDate= new DateTime('2025-04-10');
$cleaningOption = false;


// création d'un objet avec le mot clé "new" et stocké dans la class $reservation$
// il contient toutes les propiétés de la class

// la variable reservation contient une instance de la classe Reservation / un objet issu de la classe Reservation
// l'objet reservation contient toutes les propriétés (name etc) définies dans la classe
// et peut appeler toutes les fonctions définies dans la classe
$reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption);

// j'appelle la méthode pay de l'objet reservation. L'objet reservation a récupéré la méthode pay de la classe Reservation
$reservation->pay();



$reservation->leaveComment("Super séjour à Bali");

