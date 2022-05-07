<?php

namespace app\controller;

use app\model\Usuario;

class UsuarioController extends Usuario{

    public function LoginView(){

        require_once '../view/usuario/login.html';
    }
    
}

if(isset($_GET['action']) && $_GET['action']){
    $instControll = new UsuarioController();
    $instControll->LoginView();
}