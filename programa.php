<?php

require_once 'vendor/autoload.php';


use App\Classes\Metodos\{AtualizarRegistro, SalvarRegistro};

// DADOS DE ENTRADA NO TERMINAL 
$tabela = $argv[1];
$titulo = $argv[2];

$codigo = isset($argv[3]) ? $argv[3] : null;

// SIMULANDO O GET
$_GET = array('tbl' => $tabela, 'titulo' => $titulo);
// caso seja update, sentando o codigo no $_GET
if (!empty($codigo))
    $_GET['codigo'] = $codigo;





// UPDATE
if (isset($_GET['tbl']) && isset($_GET['codigo']) && isset($_GET['titulo'])) {
    echo 'Atualizando ...' . PHP_EOL;
    print_r(AtualizarRegistro::executar());
    exit();
}

// CREATE
if (isset($_GET['tbl']) && isset($_GET['titulo'])) {
    echo 'Salvando ...' . PHP_EOL;
    print_r(SalvarRegistro::executar());
    exit();
}
