<?php
  require 'Hero.php';

  class Guerrier extends Hero
  {
    function __construct($name)
    {
      parent::__construct($name);
      // $this->newarme("Epee");
      //$this->arme = "Epee";
      $this->pv = 150;
      $this->attaque = 50;
    }
  }

  class Viking extends Hero
  {
    function __construct($name)
    {
      parent::__construct($name);
      // $this->newarme("Hache");
      //$this->arme = "Hache";
      $this->pv = 100;
      $this->attaque = 100;
    }
  }
?>
