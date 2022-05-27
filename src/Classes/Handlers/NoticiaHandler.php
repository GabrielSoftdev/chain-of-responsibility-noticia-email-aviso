<?php

namespace App\Classes\Handlers;

use App\Classes\Handler;
use App\Classes\Modelos\Noticia;

class NoticiaHandler extends Handler
{
    public function save(array $request): array
    {
        $noticia = new Noticia();

        if ($request['tbl'] == $noticia->table()) {

            $noticia->save($request);

            return array(
                'status' => 'success',
                'message' => 'Notícia salva com sucesso!'
            );
        }

        return $this->proximoHandler->save($request);
    }

    public function update(array $request): array
    {
        $noticia = new Noticia();
        
        // poderia conter validação de codigo masjá tem no index.

        if ($request['tbl'] == $noticia->table()) {

            $noticia->update($request);

            return array(
                'status' => 'success',
                'message' => 'Notícia atualizada com sucesso!'
            );
        }

        return $this->proximoHandler->update($request);
    }
}
