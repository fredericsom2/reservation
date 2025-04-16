<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<header>

		<nav>
			<ul>

			</ul>
		</nav>

	</header>


<main>
	
	<h1>Laisser un commentaire</h1>

	
	

	<?php if  (!is_null($ReservationForUser)) { ?> 
		<!-- ?php if ($findreservationforUser n'est pas null) { ?>
		Ce code vérifie si la variable $reservation n'est pas nulle. 
		Si ce n'est pas le cas, le code à l'intérieur des accolades {} sera exécuté. -->
		<div>
				<p>Récapitulatif de la réservation : </p>
				<p> Nom : <?php echo $ReservationForUser ->name; ?></p>
				<p>Lieu : <?php echo $ReservationForUser->place; ?></p>
				<p>Dates : <?php echo $ReservationForUser->startDate->format('d-m-y'); ?> / <?php echo $ReservationForUser->endDate->format('d-m-y'); ?></p>
				<p>Prix total : <?php echo $ReservationForUser->totalPrice; ?></p>
				<p>Option de ménage ? : <?php echo $ReservationForUser->cleaningOption ? "oui" : "non"; ?></p>
		</div>

		<?php } ?>
<!-- creer un formulaire pour laisser un commentaire  -->
		<form method="POST">
        
                <label for="commentaire">Commentaire :</label>
                <textarea id="commentaire" name="commentaire"  required></textarea>
            </div>
            <div>
                <button type="submit">Soumettre</button>
            </div>
            

            
    <!-- faire afficher le commentaire (mais ca ne marche pas ........) -->
            <?php if (isset($reservationForUser->leaveComment)) { ?>
        <div>
            <h3>Votre commentaire :</h3>
            <p><?php echo $reservationForUser->leaveComment; ?></p>
        </div>
    <?php } ?>
            
      

      