<?php

namespace App\Classes\Handlers;

use App\Classes\Handler;
use App\Classes\Modelos\Email;

class EmailHandler extends Handler
{
    public function save(array $request): array
    {
        $email = new Email();

        if ($request['tbl'] == $email->table()) {

            $email->save($request);

            return array(
                'status' => 'success',
                'message' => 'Email salvo com sucesso!'
            );
        }

        return $this->proximoHandler->save($request);
    }

    public function update(array $request): array
    {
        $email = new Email();

        // poderia conter validação de codigo masjá tem no index.

        if ($request['tbl'] == $email->table()) {

            $email->save($request);

            return array(
                'status' => 'success',
                'message' => 'Email atualizado com sucesso!'
            );
        }

        return $this->proximoHandler->update($request);
    }
}
