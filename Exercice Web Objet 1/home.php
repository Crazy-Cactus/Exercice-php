<?php
  require_once 'header.php' ;
?>

  <p>
    Bonjour
    <?php
      echo $_SESSION['user']->getPrenom() . " " . $_SESSION['user']->getNom();
    ?>
  </p>
