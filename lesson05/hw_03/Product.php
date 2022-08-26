<?php

class Product
{
  private string $title;
  private float $price;
  private array $components = [];

  public function __construct(string $title, ?float $price, ?array $components = [])
  {
    $this->title = $title;

    $this->components = $components;

    if (empty($components)) {
      $this->price = $price;
    } else {
      $this->updatePrice();
      $this->price += $price;
    }
  }

  private function updatePrice()
  {
    $price = 0;

    foreach ($this->components as $component) {
      $price += $component->getPrice();
    }
    $this->price = $price;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function setTitle(string $title)
  {
    $this->title = $title;
  }

  public function getComponents(): array
  {
    return $this->components;
  }

  public function setComponents(array $components)
  {
    $this->components = $components;
    $this->updatePrice();
  }
}
