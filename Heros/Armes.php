<?php
  class Arme
  {
    private $Armes = array('Epee' => array('PA' => 5, 'Durabilite' => 100),
                           'Hache' => array('PA' => 10, 'Durabilite' => 50));
    private $ArmeEquipe;

    function __construct($nomarme)
    {
      $i = 0;
      foreach ($this->Armes as $Arme => $key )
      {
        if ($Arme == $nomarme)
        {
          echo "type d'arme:\t" . $Arme . "\n";
          echo "Force:\t\t" . $key['PA'] . "\n";
          echo "Durabilite:\t" . $key['Durabilite'] . "\n";
          $this->ArmeEquipe = array($Arme => array('PA' => $key['PA'], 'Durabilite' => $key['Durabilite']));
        }
      }
    }

    public function getArmes(){return $this->Armes;}
    public function setArmes($Armes){$this->Armes = $Armes;return $this;}

    public function getArmeEquipe(){return $this->ArmeEquipe;}
    public function setArmeEquipe($ArmeEquipe){$this->ArmeEquipe = $ArmeEquipe;return $this;}
}

?>
