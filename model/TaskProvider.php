<?php

class TaskProvider
{
  private array $tasksList;

  function __construct()
  {
    $this->tasksList = $_SESSION["task"] ?? [];
  }

  public function getTasksList()
  {
    return $this->tasksList;
  }

  public function setTasksList(Task $task)
  {
    $this->tasksList[] = $task;
    $_SESSION["task"][] = $task;
  }
  public function delTasksList(int $key)
  {
    unset($this->tasksList[$key]);
    unset($_SESSION["task"][$key]);
  }
  public function getUndoneList()
  {
    $tasksList = [];

    foreach ($this->tasksList as $key => $item) {

      if (!$item->getIsDone()) {
        $tasksList[$key] = $item;
      }
    }
    return  $tasksList;
  }
}
