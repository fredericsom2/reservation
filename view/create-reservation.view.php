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
	
	<h1>Créer une réservation</h1>

	<form method="POST">

		<label>Nom
			<input type="text" name="name">
		</label>

		<label>Lieu
			<select name="place">
				<option value="hotel Bali">hotel Bali</option>
				<option value="hotel Trump">hotel Trump</option>
				<option value="hotel Hendaye">hotel Hendaye</option>
				<option value="hotel Martinique">hotel Martinique</option>
			</select>
		</label>

		<label>Date de début
			<input type="date" name="start-date">
		</label>

		<label>Date de fin
			<input type="date" name="end-date">
		</label>

		<label>Option de ménage ?
			<input type="checkbox" name="cleaning-option">
		</label>

		<button type="submit">Créer la réservation</button>

	</form>

	<?php if (!is_null($error)) { ?>
		<p>La réservation n'a pas été effectuée : <?php echo $error; ?></p>
	<?php } ?>
	
	

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
</main>

</body>
</html>