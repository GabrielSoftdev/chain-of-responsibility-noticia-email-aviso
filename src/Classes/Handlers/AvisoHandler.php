<?php

namespace App\Classes\Handlers;

use App\Classes\Handler;

class AvisoHandler extends Handler
{
    public function save(array $request): array
    {
        if ($request['tbl'] == 'aviso') {

            //Salva o aviso

            return array(
                'status' => 'success',
                'message' => 'Aviso salvo com sucesso!'
            );
        }

        return $this->proximoHandler->save($request);
    }

    public function update(array $request): array
    {
        if ($request['tbl'] == 'aviso') {

            //Salva o aviso

            return array(
                'status' => 'success',
                'message' => 'Aviso atualizado com sucesso!'
            );
        }

        return $this->proximoHandler->update($request);
    }
}
