<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use App\Classes\Metodos\{AtualizarRegistro, SalvarRegistro};

if (isset($_GET['tbl']) && isset($_GET['codigo']) && isset($_GET['titulo'])) {
    echo 'atualizando ...';
    var_dump(AtualizarRegistro::executar());
} 


elseif (isset($_GET['tbl']) && isset($_GET['titulo'])) {
    echo 'Salvando ...';
    var_dump(SalvarRegistro::executar());
} 



else {
    echo '
    <h3>Para ATUALIZAR cola na url:</h3>
    <span>?tbl=teste_{NOME_TABELA}&codigo={numero}&titulo={string}</span>
    <br><br>
    <h3>Para SALVAR cola na url:</h3>
    <span>?tbl=teste_{NOME_TABELA}&titulo={string}</span>
    ';
}
