<?php
require_once __DIR__ . "/prodotti.php";

class cibo extends prodotti {
    public $ingredienti;
    public $peso;


    public function __construct ($_nome, $_prezzo, $_categorie, $_ingredienti, $_peso,  $_immagine = "index.jpg") {
        parent:: __construct ($_nome, $_prezzo, $_categorie, $_immagine);
        $this->ingredienti = $_ingredienti;
        $this->peso = $_peso;
    }
}