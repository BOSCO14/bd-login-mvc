<?php

namespace app\controller;

use \app\controller\Login;
use \app\controller\Admin;

class Home extends Admin{

    public function index(){

        require_once __DIR__ . '/../view/welcome/welcome.html';
    }

    public function Login(){
       
        require_once __DIR__ . '/../view/login/login.html';
    }

    public function home(){
        
            Login::requireLogin();
            $usuarioLogado = Login::getUsuarioLogado();
            $usuario = $usuarioLogado['nome'];
            require_once __DIR__ . '/../view/home/home.html';
        
    }

    public function cadastrar(){
        
            Login::requireLogin();
            $usuarioLogado = Login::getUsuarioLogado();
            $usuario = $usuarioLogado['nome'];
            require_once __DIR__ . '/../view/admin/cadastro.html';
        
    }

    public function consultar(){
        
        Login::requireLogin();
        $usuarioLogado = Login::getUsuarioLogado();
        $usuario = $usuarioLogado['nome'];
        $consulta = $this->showList();
        require_once __DIR__ . '/../view/admin/consulta.html';
    
    }

    public function editar($id){
        
        Login::requireLogin();
        $usuarioLogado = Login::getUsuarioLogado();
        $usuario = $usuarioLogado['nome'];
        $editarDados = $this->showEdit($id);
        require_once __DIR__ . '/../view/admin/alterar.html';
    
    }

    public function deletar($id){
        
        Login::requireLogin();
        $usuarioLogado = Login::getUsuarioLogado();
        $usuario = $usuarioLogado['nome'];
        $deletarDados = $this->showEdit($id);
        require_once __DIR__ . '/../view/admin/excluir.html';
    
    }

    

    
}