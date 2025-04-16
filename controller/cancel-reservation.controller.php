<?php

require_once('../view/cancel-reservation.view.php');
require_once('../config.php');
require_once('../model/reservation.repository.php');
require_once('../model/reservation.model.php');


// j'utilise la fonction findReservationForUser
// pour récupérer la reservation créé par l'utilisateur (ou pas)
// et je la stocke dans la variable $reservationForUser
$ReservationForUser = findReservationForUser();