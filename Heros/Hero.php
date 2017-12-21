<?php
  require 'Armes.php';

  class Hero
  {
    private $nom;
    protected $pv;
    protected $attaque;
    protected $arme;

    function __construct($nom)
    {
      $this->nom = $nom;
      echo "Nom du Hero:\t" . $this->nom . "\n";
    }

    public function newarme($nomarme)
    {
      $this->arme = new Arme($nomarme);
    }

    public function Attaque($victime)
    {
      foreach ($this->arme->getArmeEquipe() as $key => $value)
      {
        $armePA = $value['PA'];
      }
      $victime->pv -= $this->attaque + $armePA;
      echo $victime->getNom() . " a perdu " . $this->getAttaque() . " + " . $armePA . " pv\n" ;
    }

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;return $this;}

    public function getPv(){return $this->pv;}
    public function setPv($pv){$this->pv = $pv;return $this;}

    public function getAttaque(){return $this->attaque;}
    public function setAttaque($attaque){$this->attaque = $attaque;return $this;}

    public function getArme(){return $this->arme;}
    public function setArme($arme){$this->arme = $arme;return $this;}

  }
?>
