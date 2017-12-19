<?php
  function pairimpair($nb)
  {
    if ($nb % 2 == 0)
    {
      echo "Le nombre est Paire";
    }
    else
    {
      echo "Le nombre est Impaire";
    }
  }

  $nb = 6;
  pairimpair($nb);
?>
