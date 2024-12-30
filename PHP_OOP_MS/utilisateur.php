<?php 
class utilisateur{
    private $nom;
    private $email;
    public function __construct($nom,$email)
    {
        $this->nom=$nom;
        $this->email=$email;

    }
    public function getName()
    {
        return $this->nom;
    }

    public function setName($newName)
    {
        $this->nom = $newName;
    }
    public function getEmail()
    {
        return $this->email;
    }
  
    public function setEmail($newEmail){
        $this->email = $newEmail;

        
    }
}


?>