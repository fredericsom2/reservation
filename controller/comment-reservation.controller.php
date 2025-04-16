<?php


require_once('../config.php');
require_once('../model/reservation.repository.php');
require_once('../model/reservation.model.php');



// j'utilise la fonction findReservationForUser
// pour récupérer la reservation créé par l'utilisateur (ou pas)
// et je la stocke dans la variable $reservationForUser
$ReservationForUser = findReservationForUser();

$message = "";





//je vérifie si le formulaire a bien été envoyé
if($_SERVER["REQUEST_METHOD"]=== "POST"){

    if($ReservationForUser){

        //laisser un commentaire
        $ReservationForUser->leaveComment($_POST['commentaire']);

        //réenregistrer dans la session
        persistReservation($ReservationForUser);

        //afficher un message 
        $message =  "merci pour votre commentaire.";
    }
}




require_once('../view/comment-reservation.view.php');