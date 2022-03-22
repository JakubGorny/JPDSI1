<?php

$result = '';
include _ROOT_PATH.'/app/security/check.php';
//pobranie parametrów
function getParams(&$x,&$y,&$operation){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$operation = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;	
}

function validate(&$x,&$y,&$operation,&$messages){
	if ( ! (isset($x) && isset($y) && isset($operation))) {

		return false;
	}
//sprawdzanie, czy wszyskie pola formularza istnieją
if(isset($_POST['post_kwota']) && isset($_POST['post_odsetki']) && isset($_POST['post_mies'])) {
	//sprawdzanie, czy wymagane pola nie są puste
	if(!empty($_POST['post_kwota']) && !empty($_POST['post_odsetki']) && !empty($_POST['post_mies'])) {
		//sprawdzamy czy pola numeryczne mają poprawne wartości
		if(is_numeric($_POST['post_kwota']) && is_numeric($_POST['post_odsetki']) && is_numeric($_POST['post_mies'])) {
			//obliczanie raty
			$rata = ($_POST['post_kwota']/$_POST['post_mies']);
			$rata += (($rata/100) * $_POST['post_odsetki']);
			$rata *= 100;
			$rata = round($rata);
			$rata /= 100;
			//wczytywanie rezultatu do zmiennej $result
			$result .= '<h2>Rata miesięczna: '.$rata.'zł</h2>';
		} else $result .= '<h2>Podane wartości są niepoprawne!</h2>';
	} else $result .= '<h2>Nie podano wszystkich wymaganych wartości!</h2>';
}

//wywołanie widoku
include 'calc_view.php';}