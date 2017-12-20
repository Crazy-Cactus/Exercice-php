<?php
  class Person
  {
    private $firstName;
    private $lastName;

    function __construct($firstName,$lastName)
    {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
    }

    public function getfirstname()
    {
      return $this->firstName;
    }

    public function getlastname()
    {
      return $this->firstName;
    }

    public function setfirstname($firstName)
    {
      $this->firstName = $firstName;
    }

    public function setlastname($lastName)
    {
      $this->lastName = $lastName;
    }

    public function display()
    {
      echo "Bonjour " . $this->firstName . " " . $this->lastName;
    }
  }

  $jean = new Person("Jean","jigot");
  $jean->display();

?>
