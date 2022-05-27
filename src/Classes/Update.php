<?php

namespace App\Classes;

use App\Classes\Handlers\AvisoHandler;
use App\Classes\Handlers\EmailHandler;
use App\Classes\Handlers\NoticiasHandler;
use App\Classes\Handlers\UnexpectedHandler;

class Atualizar
{
    public function __construct()
    {
        $this->params = $_GET;
    }

    public function execute(): array
    {
        if (
            !empty($this->params['tbl']) &&
            !empty($this->params['codigo']) &&
            !empty($this->params['dado_qualquer'])
        ) {

            $tabela = $_GET['tbl'];

            $cadeiaDeSaveHandlers = new NoticiasHandler(
                new EmailHandler(
                    new AvisoHandler(
                        new UnexpectedHandler()
                    )
                )
            );

            return $cadeiaDeSaveHandlers->save($tabela);
        }
    }
}
