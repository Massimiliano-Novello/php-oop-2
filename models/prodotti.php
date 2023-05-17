<?php

require_once __DIR__ . "/categorie.php";

class prodotti {
    public $nome;
    public $prezzo;
    public $categorie;
    public $immagine;

    function __construct($_nome, $_prezzo, Categorie $_categorie, $_immagine = "index.jpg") {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categorie = $_categorie;
        $this->immagine = $_immagine;
    }
}