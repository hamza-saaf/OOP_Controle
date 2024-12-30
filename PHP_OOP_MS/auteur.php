<?php 
class Auteur extends utilisateur {
    private $biographie;
    public function __construct($nom,$email,$biographie)
    {
        $this->nom=$nom;
        $this->email=$email;
        $this->biographie;

    }
    public function getBiographie()
    {
        return $this->biographie;
    }

    public function setBiographie($newBiographie)
    {
        $this->biographie = $newBiographie;
    }

}


?>