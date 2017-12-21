<?php
  class User
  {
    private $nom = "Doe";
    private $prenom = "John";
    private $email = "Mathias.Genesis@Gmail.com";
    private $password = "lol";

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;return $this;}

    public function getPrenom(){return $this->prenom;}
    public function setPrenom($prenom){$this->prenom = $prenom;return $this;}

    public function getEmail(){return $this->email;}
    public function setEmail($email){$this->email = $email;return $this;}

    public function getPassword(){return $this->password;}
    public function setPassword($password){$this->password = $password;return $this;}
  }

?>
