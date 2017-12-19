<?php
  function bonmot($mot)
  {
    if (strlen($mot) > 3 && strlen($mot) < 10)
    {
      echo "OK";
    }
    else
    {
      echo "Au revoir";
    }
  }

  $mot = "pizza";
  bonmot($mot);
?>
