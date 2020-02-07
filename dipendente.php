<?php
class Dipendente {
    use Stipendio;
    public $nome;
    public $cognome;
    public $matricola;

    function __construct($_nome, $_cognome, $_matricola) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->matricola = $_matricola;
    }

    public function stampa_dipendente(){
        echo '<p>' . $this->matricola . '-' . $this->cognome . ' ' . $this->nome . '</p>';
    }
}
?>
