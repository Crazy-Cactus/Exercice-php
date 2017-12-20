<?php
  class Arme
  {
    private $Armes = array('Epee' => array('PA' => 5, 'Durabilite' => 100),
                           'Hache' => array('PA' => 10, 'Durabilite' => 50));

    function __construct($nomarme)
    {
      foreach ($this->Armes as $Arme => $key )
      {
        if ($Arme == $nomarme)
        {
          echo "type d'arme:\t" . $Arme . "\n";
          echo "Force:\t\t" . $key['PA'] . "\n";
          echo "Durabilite:\t" . $key['Durabilite'] . "\n";
        }
      }
    }

    public function getArmes()
    {
        return $this->Armes;
    }

    public function setArmes($Armes)
    {
        $this->Armes = $Armes;

        return $this;
    }

}

?>
