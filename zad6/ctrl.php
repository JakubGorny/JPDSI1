<?php
require_once 'init.php';
//Skrypt uruchamiający akcję wykonania obliczeń kalkulatora
// - należy zwrócić uwagę jak znacząco jego rola uległa zmianie
//   po wstawieniu funkcjonalności do klasy kontrolera

//utwórz obiekt i użyj
//załaduj kontroler
$ctrl = new app\controllers\CalcCtrl();
$ctrl->process();
