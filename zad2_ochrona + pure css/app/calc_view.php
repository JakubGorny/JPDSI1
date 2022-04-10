<!doctype html>
<html lang="pl">
	<head>
		<title>Kalkulator</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
	</head>
	<body style="margin:5px">
	<div style="width:90%; margin: 2em auto;">
		<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
		<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
	</div>
		<form class="pure-form" action="<?php print(_APP_URL);?>" method="post">
			<label for="id_kwota">Masa ciała (w kg)</label>
			<input name="waga" value="<?php if(isset($_POST['waga'])) print($_POST['waga']); ?>" id="id_waga">
			<br>
			<label for="id_odsetki">Wzrost (w cm)</label>
			<input name="wzrost" value="<?php if(isset($_POST['wzrost'])) print($_POST['wzrost']); ?>" id="id_wzrost">
			<Br>
			<button class="button-success pure-button pure-button-primary" >Oblicz</button>
		</form>
		<?php print($result); ?>
</body>
</html>