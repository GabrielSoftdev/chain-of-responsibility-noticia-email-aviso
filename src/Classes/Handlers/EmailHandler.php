<?php

namespace App\Classes\Handlers;

use App\Classes\Handler;

class EmailHandler extends Handler
{
    public function save(array $request): array
    {
        if ($request['tbl'] == 'email') {

            //Chama o método que salva o email

            return array(
                'status' => 'success',
                'message' => 'Email salvo com sucesso!'
            );
        }

        return $this->proximoHandler->save($request);
    }

    public function update(array $request): array
    {
        if ($request['tbl'] == 'email') {

            //Salva o aviso

            return array(
                'status' => 'success',
                'message' => 'Email atualizado com sucesso!'
            );
        }

        return $this->proximoHandler->update($request);
    }
}
