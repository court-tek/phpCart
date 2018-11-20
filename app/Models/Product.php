<?php

namespace Cart\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function hasLowStock()
    {
      if ($this->outOfStock()) {
        return false;
      }

      return (bool) ($this->STOCK <= 5);
    }

    public function outOfStock()
    {
      return $this->STOCK === 0;
    }

    public function inStock()
    {
      return $this->STOCK >= 1;
    }

    public function hasStock($quantity)
    {
      return $this->STOCK >= $quantity;
    }
}
