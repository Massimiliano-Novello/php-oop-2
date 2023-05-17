<?php
require_once __DIR__ . "/prodotti.php";

class cibo extends prodotti {
    public $ingredienti;
    public $peso;


    function __constructor ($_nome, $_prezzo, $_categorie, $_immagine = "index.jpg", $_ingredienti, $_peso) {
        parent:: __constructor ($_nome, $_prezzo, $_categorie, $_immagine);
        $this->ingredienti = $_ingredienti;
        $this->peso = $_peso;
    }
}