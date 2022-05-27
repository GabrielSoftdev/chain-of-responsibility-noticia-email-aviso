<?php

namespace App\Classes;

use App\Classes\Handlers\AvisoHandler;
use App\Classes\Handlers\EmailHandler;
use App\Classes\Handlers\NoticiasHandler;
use App\Classes\Handlers\UnexpectedHandler;

class Save
{
    public function execute(): array
    {
        $request = $_GET;
        $erro = new UnexpectedHandler();

        if (
            count($request) > 0 &&
            (isset($request['tbl']) ||
                !empty($request['tbl'])) &&
            (isset($request['codigo']) ||
                !empty($request['codigo']))
        ) {
            $cadeiaDeSaveHandlers = new NoticiasHandler(
                new EmailHandler(
                    new AvisoHandler($erro)
                )
            );

            return $cadeiaDeSaveHandlers->save($_GET);
        }

        return $erro->save($request);
    }
}
