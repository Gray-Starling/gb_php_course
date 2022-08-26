<?php

class Task
{
  private string $description;
  private DateTime $dateCreated;
  private DateTime $dateUpdated;
  private DateTime $dateDone;
  private int $priority;
  private bool $isDone;
  private User $user;
  private array $comments = [];

  public function __construct(User $user, string $description)
  {
    $this->user = $user;
    $this->description = $description;
    $this->setDateCreated(new DateTime());
  }

  public function markAsDone()
  {
    $this->setIsDone();
    $this->setDateUpdated(new DateTime());
    $this->setDateDone(new DateTime());
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function setDescription(string $description)
  {
    $this->description = $description;
    $this->setDateUpdated(new DateTime());
  }

  public function getDateCreated(): DateTime
  {
    return $this->dateCreated;
  }

  public function setDateCreated(DateTime $dateCreated)
  {
    $this->dateCreated = $dateCreated;
  }

  public function getDateUpdated(): DateTime
  {
    return $this->dateUpdated;
  }

  public function setDateUpdated(DateTime $dateUpdated)
  {
    $this->dateUpdated = $dateUpdated;
  }

  public function getDateDone(): DateTime
  {
    return $this->dateDone;
  }

  public function setDateDone(DateTime $dateDone)
  {
    $this->dateDone = $dateDone;
  }

  public function getPriority(): int
  {
    return $this->priority;
  }

  public function setPriority(int $priority)
  {
    $this->priority = $priority;

    return $this;
  }

  public function getIsDone(): bool
  {
    return $this->isDone;
  }

  public function setIsDone()
  {
    $this->isDone = true;
  }

  public function getUser(): User
  {
    return $this->user;
  }

  public function getComments(): array
  {
    return $this->comments;
  }

  public function setComments(Comment $comment): void
  {
    $this->comments[] = $comment;
  }
}
