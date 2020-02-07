<?php

trait Stipendio {
    public $paga_oraria;

    function calcola_stipendio($ore_lavorate){
        if ( ( !is_int($ore_lavorate) ) || ( !is_int($this->paga_oraria) ) ) {
            throw new \Exception('Hai inserito dei dati sbagliati (trait)! (NaN)');
        }
        return $ore_lavorate*($this->paga_oraria);
    }
}

?>
