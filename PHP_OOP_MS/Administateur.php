<?php 
class Administarteur extends utilisateur{
    private $role ;
    public function __construct($nom, $email,$role)
    {
        $this->nom=$nom;
        $this->email=$email;
        $this->role=$role
    
    }
    public function getRole()
    {
        return $this->role;
    }

    public function setRole($newRole)
    {
        $this->nom = $newRole;
    }

    
}




?>