<?php

namespace App\Classes\Handlers;

use App\Classes\Handler;

class NoticiasHandler extends Handler
{
    public function save(array $request): array
    {
        if ($request['tbl'] == 'noticia') {

            //Salva a notícia

            return array(
                'status' => 'success',
                'message' => 'Notícia salva com sucesso!'
            );
        }

        return $this->proximoHandler->save($request);
    }

    public function update(array $request): array
    {
        if ($request['tbl'] == 'noticia') {

            //Salva o aviso

            return array(
                'status' => 'success',
                'message' => 'Notícia atualizada com sucesso!'
            );
        }

        return $this->proximoHandler->update($request);
    }
}
