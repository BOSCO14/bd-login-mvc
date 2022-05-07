<?php

namespace app\controller;

class Home{

    public function index(){

        require_once __DIR__ . '/../view/welcome/welcome.html';
    }

    public function Login(){
       
        require_once __DIR__ . '/../view/login/login.html';
    }

    public function home(){

        if(session_status() == PHP_SESSION_ACTIVE){
            require_once __DIR__ . '/../view/home/home.html';
        }else{
            require_once __DIR__ . '/../view/login/login.html';
        }

    }
    
}