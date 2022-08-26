<?php

class Cart
{
  private User $user;
  private array $products = [];
  private float $totalPrice;


  public function __construct(User $user)
  {
    $this->user = $user;
  }

  public function getUser(): User
  {
    return $this->user;
  }

  public function setUser(User $user)
  {
    $this->user = $user;
  }

  public function setProduct(Product $product)
  {
    $this->products[] = $product;
    $this->setTotalPrice();
  }

  public function delProduct(Product $product)
  {
    foreach ($this->products as $key => $item) {
      if ($item->getTitle() === $product->getTitle()) {
        unset($this->products[$key]);
      }
    }
    $this->setTotalPrice();
  }

  public function getProducts(): array
  {
    return $this->products;
  }

  public function setTotalPrice()
  {
    $totalPrice = 0;

    foreach ($this->products as $item) {
      $totalPrice += $item->getPrice();
    }
    $this->totalPrice = $totalPrice;
  }
  public function getTotalPrice(): float
  {
    return $this->totalPrice;
  }
}
