<?php
  require_once 'header.php';

  if (!empty($_POST['Email']) && !empty($_POST['Password']))
  {
    $Email = htmlspecialchars($_POST['Email']);
    $Password = htmlspecialchars($_POST['Password']);

    if ($Email == "Mathias.Genesis@Gmail.com" && $Password == "lol")
    {
      $User = new User;
      $_SESSION['user'] = $User;
      header('location:home.php');
    }
    else
    {
      echo "T'ES MAUVAIS JACK";
    }
  }
  else
  {
    echo "REMPLIR REMPLIR REMPLIR";
  }
?>
