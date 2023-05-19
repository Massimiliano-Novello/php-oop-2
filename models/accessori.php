<?php
require_once __DIR__ . "/prodotti.php";

class accessori extends prodotti {
    public $materiale;
    public $dimensioni;


    function __construct ($_nome, $_prezzo, $_categorie, $_materiali, $_dimensioni, $_immagine = "index.jpg") {
        parent:: __construct ($_nome, $_prezzo, $_categorie, $_immagine);
        $this->materiale = $_materiali;
        $this->dimensioni = $_dimensioni;
    }
}
