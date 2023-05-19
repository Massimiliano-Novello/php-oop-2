<?php
require_once __DIR__ . "/prodotti.php";

class giochi extends prodotti {
    public $caratteristiche;
    public $dimensioni;


    function __construct ($_nome, $_prezzo, $_categorie, $_caratteristiche, $_dimensioni, $_immagine = "index.jpg") {
        parent::__construct($_nome, $_prezzo, $_categorie, $_immagine);
        $this->caratteristiche = $_caratteristiche;
        $this->dimensioni = $_dimensioni;
    }
}