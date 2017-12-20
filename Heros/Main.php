<?php
  require 'Classes.php';
  require 'Combat.php';

  $Noctis = new Guerrier("Noctis");
  echo "\t- - -\n";
  $Gladio = new Viking("Gladio");

  echo "\t- - -\n";
  
  $Fight = new Combat($Noctis);
  $Fight->Adjime($Gladio);
?>
