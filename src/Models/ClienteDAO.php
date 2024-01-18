<?php

namespace Devjunior\Desafioobj\Models;

use Devjunior\Desafioobj\Models\Cliente;
use Devjunior\Desafioobj\Connection;
use PDO;

class ClienteDAO
{
    public static function create(Cliente $cliente)
    {
        $sql = "INSERT INTO cliente (nome,obeservacao,telefone) VALUES (?,?,?)";

        $stmt = Connection::getConn()->prepare($sql);

        $stmt->bindValue(1, $cliente->nome);
        $stmt->bindValue(2, $cliente->observacao);
        $stmt->bindValue(3, $cliente->telefone);
        $stmt->execute();
    }
    public static function read()
    {
        $sql = "SELECT * FROM cliente";

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else{
            return null;
        }
    }
    public function update(cliente $cliente)
    {
        $sql = "UPDATE cliente SET nome=?,obeservacao=?, telefone=?  WHERE id_cliente=?";
        $stmt = Connection::getConn()->prepare($sql);

        $stmt->bindValue(1, $cliente->nome);
        $stmt->bindValue(2, $cliente->observacao);
        $stmt->bindValue(3, $cliente->telefone);
        $stmt->bindValue(4, $cliente->id);

        $stmt->execute();
        

    }
    public static function delete($id){
        $sql = "DELETE FROM cliente WHERE id_cliente=?";
        
        $stmt = Connection::getConn()->prepare($sql);

        $stmt->bindValue(1,$id);

        $stmt->execute();
    
    }
}
