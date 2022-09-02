<?php

class TaskProvider
{

  private PDO $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function addTask(Task $task): bool
  {
    $statement = $this->pdo->prepare(
      'INSERT INTO tasks (description, isDone) VALUES (:description, :isDone)'
    );

    return $statement->execute([
      'description' => $task->getDescription(),
      'isDone' => "0"
    ]);
  }

  public function getUndoneList()
  { {

      $statement = $this->pdo->query('SELECT * FROM `tasks` WHERE isDone != 1');
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }
  }

  public function delTasksList(int $key): void
  {
    $statement = $this->pdo->prepare(
      'UPDATE tasks SET isDone = 1 WHERE id = :id AND isDone != 1'
    );

    $statement->execute([
      'id' => $key,
    ]);
  }
}
