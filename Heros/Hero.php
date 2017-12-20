<?php
  class Hero
  {
    private $nom;
    private $pv;
    private $arme;

    function __construct(string $nom)
    {
      $this->$nom = $nom;
      $this->$pv = 100;
    }

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;return $this;}

    public function getPv(){return $this->pv;}
    public function setPv($pv){$this->pv = $pv;return $this;}

  }

  class Guerrier extends Hero
  {
    function __construct()
    {
      $this->arme = "Epee";
    }

    public function getArme(){return $this->arme;}
    public function setArme($arme){$this->arme = $arme;return $this;}
  }

  class Viking extends Hero
  {
    function __construct()
    {
      $this->arme = "Hache";
    }

    public function getArme(){return $this->arme;}
    public function setArme($arme){$this->arme = $arme;return $this;}
  }

  $Noctis = new Guerrier("Noctis");
  $Gladio = new Viking("Gladio");

  echo $Noctis->getArme();
  echo "\n";
  echo $Gladio->getArme();
?>
