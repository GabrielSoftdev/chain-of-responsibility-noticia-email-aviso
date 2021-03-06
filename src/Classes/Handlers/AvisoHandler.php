<?php

namespace App\Classes\Handlers;

use App\Classes\Handler;
use App\Classes\Modelos\Aviso;

class AvisoHandler extends Handler
{

    public function save(array $request): array
    {
        $aviso = new Aviso();
        if ($request['tbl'] == $aviso->table()) {

            $aviso->save($request);

            return array(
                'status' => 'success',
                'message' => 'Aviso salvo com sucesso!'
            );
        }

        return $this->proximoHandler->save($request);
    }

    public function update(array $request): array
    {
        $aviso = new Aviso();

        // poderia conter validação de codigo masjá tem no index.

        if ($request['tbl'] == $aviso->table()) {

            $aviso->update($request);

            return array(
                'status' => 'success',
                'message' => 'Aviso atualizado com sucesso!'
            );
        }

        return $this->proximoHandler->update($request);
    }
}
