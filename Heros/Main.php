<?php
  require 'Classes.php';
  require 'Combat.php';

  $Noctis = new Guerrier("Noctis");
  $Noctis->newarme('Epee');
  echo "\t- - -\n";
  $Gladio = new Viking("Gladio");
  $Gladio->newarme('Hache');
  echo "\t- - -\n";

  $Fight = new Combat($Noctis);
  $Fight->Adjime($Gladio);
?>
