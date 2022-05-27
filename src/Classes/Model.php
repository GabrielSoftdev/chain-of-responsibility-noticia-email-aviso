<?php

namespace App\Classes;

abstract class Model
{
    public function save($params)
    {
        $pdo = Conexao::getInstance();
        $sql = 'INSERT INTO ' . $this->{'table'}() . ' (titulo) VALUES (:titulo)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titulo', $params['titulo']);
        $success = $stmt->execute();
        var_dump($success);
        return $success;
    }

    public function update($params)
    {
        $pdo = Conexao::getInstance();
        $sql = 'UPDATE ' . $this->{'table'}() . ' set titulo = :titulo WHERE codigo = :codigo';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':codigo', $params['codigo']);
        $stmt->bindParam(':titulo', $params['titulo']);
        $success = $stmt->execute();
var_dump($success);
        return $success;
    }
}
