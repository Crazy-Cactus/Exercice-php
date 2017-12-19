<?php
  function nbphotop($photocop)
  {
    $prix = 0;
    if ($photocop <= 10)
    {
      $prix = $photocop * 0.10;
    }
    elseif ($photocop > 10 && $photocop <= 30)
    {
      $prix = 1 + ($photocop - 10) * 0.08;
    }
    else
    {
      $prix = 2.6 + ($photocop - 30) * 0.05;
    }
    echo "le prix est de " + $prix + "€";
  }

  $nb = 11;
  nbphotop($nb);
?>
