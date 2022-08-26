<?php

class User
{
  private string $username;
  private string $email;
  private string $sex;
  private int $age;
  private bool $isActive = true;
  private DateTime $dateCreated;

  public function __construct(string $username, string $email)
  {
    $this->username = $username;
    $this->email = $email;
    $this->setDateCreated(new DateTime());
  }

  public function getUsername(): string
  {
    return $this->username ?? 'unknown';
  }

  public function setUsername(string $username)
  {
    $this->username = $username;
  }

  public function getEmail(): string
  {
    return $this->email ?? 'unknown';
  }

  public function setEmail(string $email)
  {
    $this->email = $email;
  }


  public function getSex(): string
  {
    return $this->sex ?? 'unknown';
  }

  public function setSex(string $sex)
  {
    $this->sex = $sex;
  }

  public function getAge(): int
  {
    return $this->age ?? 'unknown';
  }

  public function setAge(int $age)
  {
    $this->age =  $this->getValidAge($age);
  }

  private function getValidAge($age)
  {
    if ($age > 0 && $age <= 125) {
      return $age;
    }
    return null;
  }

  public function getIsActive(): bool
  {
    return $this->isActive;
  }

  public function setIsActive()
  {
    $this->isActive = !$this->isActive;
  }

  public function setDateCreated(DateTime $dateCreated)
  {
    $this->dateCreated = $dateCreated;
  }

  public function getDateCreated(): DateTime
  {
    return $this->dateCreated;
  }
}
