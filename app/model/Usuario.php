<?php

namespace app\model;

use \app\lib\database\Connection;

class Usuario{

    public static function validate(){

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $con = Connection::getConn();

        $sql = "SELECT * FROM usuario WHERE email = :email";

        $login = $con->prepare($sql);
        $login->bindValue(':email', $email);
        $login->execute();

        $count = $login->rowCount();

        if($count == 1){
            $result = $login->fetch();
            //foreach ($result as $row) {
            $password = $result['senha'];
            $user_id = $result['id'];
            $user_name = $result['nome'];
            $user_email = $result['email'];
            //}
            if($password == password_verify($senha, $password)){
                session_start();
                $_SESSION['id_usuario'] = $user_id;
                $_SESSION['nome_usuario'] = $user_name;
                return true;
            } else {
                throw new \Exception("Senha Inválida");
                return false;
            }
        }else{
            throw new \Exception("E-mail Inválido");
            return false;  
        }
    }

}