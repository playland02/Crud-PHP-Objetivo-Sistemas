<?php 
namespace Devjunior\Desafioobj;

use PDO;

class Connection {

    private static $instance;

    public static function getConn(){
        if(!self::$instance){
            return self::$instance = new PDO('mysql:host=localhost;dbname=desafio;','root','12345678');
        }else{
            return self::$instance;
        }
    }
}