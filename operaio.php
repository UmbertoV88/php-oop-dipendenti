<?php
class Operaio extends Dipendente{

    public $turno;

    function __construct($_nome, $_cognome, $_matricola, $_turno) {
        parent::__construct($_nome, $_cognome, $_matricola);
        $this->turno = $_turno;
    }
}
?>
