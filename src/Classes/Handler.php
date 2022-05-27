<?php


namespace App\Classes;

abstract class Handler
{

    protected ?Handler $proximoHandler;

    public function __construct(?Handler $proximoHandler = null)
    {
        $this->proximoHandler = $proximoHandler;
    }

    abstract public function save(array $request): array;
    abstract public function update(array $request): array;
}
