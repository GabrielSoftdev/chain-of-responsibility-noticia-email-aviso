<?php

namespace App\Classes\Metodos;

use App\Classes\Handlers\{AvisoHandler, EmailHandler, NoticiaHandler, InvalidoHandler};

class AtualizarRegistro
{
    public static function executar(): array
    {
        $request = $_GET;

        $cadeiaDeSaveHandlers = new NoticiaHandler(
            new EmailHandler(
                new AvisoHandler(
                    new InvalidoHandler()
                )
            )
        );

        return $cadeiaDeSaveHandlers->update($request);
    }
}
