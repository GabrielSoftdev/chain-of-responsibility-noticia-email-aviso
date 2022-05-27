<?php

namespace App\Classes\Handlers;

use App\Classes\Handler;

class InvalidoHandler extends Handler
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function save(array $request): array
    {
        return array(
            'status' => 'failure',
            'message' => 'Não foi possivel salvar!'
        );
    }

    public function update(array $request): array
    {
        return array(
            'status' => 'failure',
            'message' => 'Não foi possivel atualizar!'
        );
    }
}
