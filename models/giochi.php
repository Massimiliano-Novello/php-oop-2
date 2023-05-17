<?php


class giochi extends prodotti {
    public $caratteristiche;
    public $dimensioni;


    function __construct ($_nome, $_prezzo, $_categorie, $_immagine = "index.jpg", $_caratteristiche, $_dimensioni) {
        parent::__construct($_nome, $_prezzo, $_categorie, $_immagine);
        $this->caratteristiche = $_caratteristiche;
        $this->dimensioni = $_dimensioni;
    }
}