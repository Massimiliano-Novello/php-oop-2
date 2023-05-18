<?php
require_once __DIR__ . "/prodotti.php";

class accessori extends prodotti {
    public $materiale;
    public $dimensioni;


    function __construct ($_nome, $_prezzo, $_categorie, $_immagine = "index.jpg", $_materiali, $_dimensioni) {
        parent:: __construct ($_nome, $_prezzo, $_categorie, $_immagine);
        $this->materiale = $_materiali;
        $this->dimensioni = $_dimensioni;
    }
}