<?php

class UserProvider
{

  private PDO $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function registerUser(User $user, string $plainPassword): bool
  {

    $statement = $this->pdo->prepare(
      'INSERT INTO users (name, login, password) VALUES (:name, :login, :password)'
    );
    return $statement->execute([
      'name' => $user->getName(),
      'login' => $user->getLogin(),
      'password' => password_hash($plainPassword, PASSWORD_DEFAULT)
    ]);
  }

  public function getByUsernameAndPassword(string $login, string $password): ?User
  {
    $statement = $this->pdo->prepare(
      'SELECT * FROM users WHERE login = :login LIMIT 1'
    );
    $statement->execute([
      'login' => $login
    ]);

    $result  =  $statement->fetch(PDO::FETCH_ASSOC);

    if (password_verify($password, $result["password"])) {
      $user = new User($login);
      $user->setLogin($result["login"]);
      return $user;
    }
    return null;
  }
}
