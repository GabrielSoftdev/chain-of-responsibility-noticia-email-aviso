<?php

namespace App\Classes\Handlers;

use App\Classes\Handler;

class UnexpectedHandler extends Handler
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function save(string $request): array
    {
        return array(
            'status' => 'failure',
            'message' => 'Não foi possivel salvar!'
        );
    }

    public function update(string $request): array
    {
        return array(
            'status' => 'failure',
            'message' => 'Não foi possivel atualizar!'
        );
    }
}
