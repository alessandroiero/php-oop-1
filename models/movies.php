<?php 

class Movies {
    public $titolo;
    public $data;
    public $genere;

    public function __construct( string $titolo,int $data, string $genere)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->data = $data;
    }
    public function info() {
        return "Titolo: ($this->titolo) uscito il: ($this->data)";
    }
}