<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once 'traits/stipendio.php';
include_once 'dipendente.php';
include_once 'operaio.php';
include_once 'manager.php';

$persona_1 = new Operaio('Mario', 'Rossi', 'MR001', 1);
$persona_2 = new Manager('Pippo', 'Bianchi', 'PB102', 'Contabilità');


//PRIMO DIPENDENTE
$persona_1->stampa_dipendente();
$persona_1->paga_oraria = 7;
try {
    $stipendio_mese_1 = $persona_1->calcola_stipendio(160);
    echo '<p> Stipendio guadagnato da:' . $persona_1->nome . ' '. $persona_1->cognome. ': '. $stipendio_mese_1. '</p>';
} catch (\Exception $e) {
    echo '<h1>'. $e->getMessage().'</h1>';
}


//SECONDO DIPENDENTE
$persona_2->stampa_dipendente();
$persona_2->paga_oraria = 10;
$persona_2->bonus = 500;

try {
    $stipendio_mese_2 = $persona_2->calcola_stipendio(160);
    echo '<p> Stipendio guadagnato da:' . $persona_2->nome . ' '. $persona_2->cognome. ': '. $stipendio_mese_2. '</p>';
} catch (\Exception $e) {
    echo '<h1>'. $e->getMessage().'</h1>';
}



?>
