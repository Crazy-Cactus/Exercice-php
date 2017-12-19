<?php
  function categorie($age)
  {
    if ($age >= 6 && $age <= 7)
    {
      echo "Vous etes un Poussin";
    }
    elseif ($age >= 8 && $age <= 9)
    {
      echo "Vous etes une Pupille";
    }
    elseif ($age >= 10 && $age <= 11)
    {
      echo "Vous etes Minime";
    }
    elseif ($age >= 12)
    {
      echo "Vous etes une Pupille";
    }
    else
    {
      echo "Vous etes trop jeune";
    }
  }

  $age = 6;
  categorie($age);
?>
