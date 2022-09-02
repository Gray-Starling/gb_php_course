<?php

class User
{
  private string $login;
  private string $name;

  public function __construct(string $login, string $name = "не указанно")
  {
    $this->login = $login;
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getLogin(): string
  {
    return $this->login;
  }

  public function setLogin(string $login): self
  {
    $this->login = $login;

    return $this;
  }
}
