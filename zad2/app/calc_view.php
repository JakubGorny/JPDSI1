<!doctype html>
<html lang="pl">
	<head>
		<title>Kalkulator</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="<?php print(_APP_URL);?>" method="post">
			<label for="id_kwota">Wartość pożyczki</label>
			<input name="post_kwota" value="<?php if(isset($_POST['post_kwota'])) print($_POST['post_kwota']); ?>" id="id_kwota">
			<br>
			<label for="id_odsetki">Wartość oprocentowania</label>
			<input name="post_odsetki" value="<?php if(isset($_POST['post_odsetki'])) print($_POST['post_odsetki']); ?>" id="id_odsetki">
			<br>
			<label for="id_mies">Ilość miesięcy</label>
			<input name="post_mies" value="<?php if(isset($_POST['post_mies'])) print($_POST['post_mies']); ?>" id="id_mies">
			<Br>
			<button type="submit">Oblicz</button>
		</form>
		<?php print($result); ?>
</body>
</html>