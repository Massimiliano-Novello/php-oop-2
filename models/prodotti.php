<?php

require_once __DIR__ . "/categorie.php";

class prodotti {
    public $nome;
    private $prezzo;
    public $categorie;
    public $immagine;

    function __construct($_nome, $_prezzo, Categorie $_categorie, $_immagine = "index.jpg") {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categorie = $_categorie;
        $this->immagine = $_immagine;
    }

    // public function getPrice($_prezzo) {
    //     if (!is_int($_prezzo)) {
    //         throw new Exception ("Il prezzo deve essere maggiore di 0");

    //     } elseif ($_prezzo > 1) {
    //         $this->prezzo = $_prezzo;
    //     }
    // }

    // public function getPrice() {
    //     return $this->prezzo;
    // }

}