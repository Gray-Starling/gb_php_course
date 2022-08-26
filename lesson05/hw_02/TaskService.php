<?php

class TaskService
{
  static public function addComment(User $author, Task $task, $text)
  {
    $task->setComments(new Comment($author, $task, $text));
  }
}
