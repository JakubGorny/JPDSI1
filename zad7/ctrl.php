<?php
require_once 'init.php';
//Skrypt uruchamiający akcję wykonania obliczeń kalkulatora
// - należy zwrócić uwagę jak znacząco jego rola uległa zmianie
//   po wstawieniu funkcjonalności do klasy kontrolera

//utwórz obiekt i użyj
//załaduj kontroler
switch ($action) {

    case 'login': // akcja PUBLICZNA - brak check.php
        $ctrl = new app\controllers\LoginCtrl();
        $ctrl->doLogin();
    break;
    case 'calculate' : // akcja NIEPUBLICZNA
		include 'check.php';  // KONTROLA
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;
    case 'logout' : // akcja NIEPUBLICZNA
		include 'check.php';  // KONTROLA
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogout();
	break;
    default:
       include 'check.php'; // KONTROLA
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
        break;
}