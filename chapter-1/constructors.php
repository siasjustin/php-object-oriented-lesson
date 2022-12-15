<?php

class Product
{
  public $name;
  public $price;

  public function __construct($name = 'Soap', $price = 100)
    {
      $this->name = $name;
      $this->price = $price;
    }

  public function priceAsCurrency($divisor = 100, $currencySymbol = '$')
  {
    $priceAsCurrency = $this->price / $divisor;
    return $currencySymbol . $priceAsCurrency;
  }

}

$product = new Product('Shampoo');

print $product->name . PHP_EOL;
print $product->price . PHP_EOL;






?>