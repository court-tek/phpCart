<?php

namespace Cart\Support\Storage\Contracts;

interface StorageInterface
{
    public function get($index);
    public function set($index);
    public function all($index);
    public function exists($index);
    public function unset($index);
    public function clear();
}
