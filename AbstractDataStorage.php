<?php

require_once __DIR__ . '/DataStorageInterface.php';
require_once __DIR__ . '/NotImplementedException.php';

abstract class AbstractDataStorage implements DataStorageInterface
{
    abstract public function create($key, $item);

    abstract public function delete($key);

    public function get($key)
    {
        throw new NotImplementedException();
    }
}
