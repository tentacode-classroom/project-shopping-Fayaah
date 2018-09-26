<?php

class User
{
  private $id;
  private $email;
  private $password;
  private $firstname;
  private $lastname;

  public function setId(int $id)
  {
    $this->id = $id;
  }
  public function getId($id)
  {
    return $this->id;
  }

  public function setEmail(string $email)
  {
    $this->email = $email;
  }
  public function getEmail($email)
  {
    return $this->email;
  }

  public function setPassword(string $password)
  {
    $this->password = $password;
  }
  public function getPassword($password)
  {
    return $this->password;
  }

  public function setFirstName(string $firstName)
  {
    $this->firstName = $firstName;
  }
  public function getFirstName($firstName)
  {
    return $this->firstName;
  }

  public function setLastName(string $lastName)
  {
    $this->lastName = $lastName;
  }

  public function getLastName($lastName)
  {
    return $this->lastName;
  }
}
 ?>
