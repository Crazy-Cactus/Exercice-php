<?php
  function plus($nb)
  {
    $resultat = 0;
    for ($i=1; $i < $nb; $i++)
    {
      $resultat += $resultat++;
    }
    echo $resultat;
  }

  $nb = 5;
  plus($nb);
?>
