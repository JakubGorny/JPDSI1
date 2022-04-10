
<?php
require_once dirname(__FILE__).'/../config.php';


include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$waga,&$wzrost){
	$waga = isset($_REQUEST['waga']) ? $_REQUEST['waga'] : null;
	$wzrost = isset($_REQUEST['wzrost']) ? $_REQUEST['wzrost'] : null;
	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$waga,&$wzrost,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($waga) && isset($wzrost))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $waga == "") {
		$messages [] = 'Nie podano liczby 1';
	}
	if ( $wzrost == "") {
		$messages [] = 'Nie podano liczby 2';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $waga i $wzrost są liczbami całkowitymi
	if (! is_numeric( $waga )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $wzrost )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$waga,&$wzrost,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$waga = floatval($waga);
	$wzrost = floatval($wzrost);
	
	//wykonanie operacji
	$result = $waga / pow(($wzrost/100),2);
}

//definicja zmiennych kontrolera
$waga = null;
$wzrost = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($waga,$wzrost);
if ( validate($waga,$wzrost,$messages) ) { // gdy brak błędów
	process($waga,$wzrost,$messages,$result);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$waga,$wzrost,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';