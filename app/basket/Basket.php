<?php

namespace Cart\Basket;

class Basket
{
    protected $storage;
    protected $product;

    public function __construct(SessionStorage $storage, Product $product)
    {
        $this->storage = $storage;
        $this->product = $product;
    }
}
