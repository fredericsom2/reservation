<?php

// "persist" signifie enregistrer ou sauvegarder durablement des données
function persistReservation($reservation){


// La fonction session_start(); en PHP est utilisée pour démarrer une nouvelle session 
// ou reprendre une session existante. Les sessions sont un moyen de stocker des informations 
// sur l'utilisateur entre les requêtes HTTP, ce qui est particulièrement utile pour gérer 
// des informations comme les identifiants de connexion, les préférences utilisateur, 
// et d'autres données temporaires.
    session_start();


// "$_SESSION" permet de stocker une memoire temporaire
    $_SESSION["reservation"]=$reservation;

}


//  findReservationForUser, qui retourne la reservation enregistrée dans la session 
function findReservationForUser () {

    session_start();

    // ce code permet de récupérer la valeur de la session associée 
    // à la clé 'reservation' si elle existe, sinon il retourne null

    if (array_key_exists('reservation', $_SESSION)) {
        return $_SESSION["reservation"];
    } else {
        return null;
    }
}

