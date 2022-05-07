<?php

namespace app\controller;

use \app\model\Crud;

class Admin{

    public function insert(){

        try {
            Crud::create($_POST);
            echo '<script>alert("Registro gravado com sucesso!");</script>';
            echo '<script>location.href="http://localhost/bd-login/?url=home/cadastrar/"</script>';
        } catch (\Exception $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href="?url=home/cadastrar/"</script>';
        }    
    }

    public function showList(){

        try {
            $dados = Crud::read();
            return $dados;
        } catch (\Exception $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href="?url=home/home/"</script>';
        }    
    }

    public function showEdit($id){

        try {
            $dados = Crud::getRegistro($id);
            return $dados;
        } catch (\Exception $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href="?url=home/home/"</script>';
        }    
    }

    public function saveEdit(){

        try {
            Crud::update($_POST);
            echo '<script>alert("Registro alterado com sucesso!");</script>';
            echo '<script>location.href="http://localhost/bd-login/?url=home/consultar/"</script>';
        } catch (\Exception $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href="?url=home/editar/"</script>';
        }    

    }

    public function confirmaDelete(){

        try {
            Crud::delete($_POST);
            echo '<script>alert("Registro deletado com sucesso!");</script>';
            echo '<script>location.href="http://localhost/bd-login/?url=home/consultar/"</script>';
        } catch (\Exception $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href="?url=home/deletar/"</script>';
        }    

    }
    
}