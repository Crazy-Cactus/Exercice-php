<?php
  class Combat
  {
    private $hero;

    function __construct($hero)
    {
      $this->hero = $hero;
      echo $this->hero->getNom() . " est le premier a attaquer\n";
    }

    public function Adjime($victime)
    {
      $boucle = true;
      while ($boucle)
      {
        if ($this->hero->getPv() <= 0 || $victime->getPv() <= 0)
        {
          if ($this->hero->getPv() <= 0)
          {
            echo $this->hero->getNom() . " est mort";
          }
          else
          {
            echo $victime->getNom() . " est mort";
          }
          break;
        }
        echo $this->hero->getNom() . " attaque " . $victime->getNom() . "\n";
        $this->hero->Attaque($victime);

        echo $victime->getNom() . " attaque " . $this->hero->getNom() . "\n";
        $victime->Attaque($this->hero);
      }
    }
  }
?>
