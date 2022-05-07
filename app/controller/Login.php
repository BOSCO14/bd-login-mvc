<?php

namespace app\controller;

use \app\model\Usuario;

class Login{

    public function check(){
        try {
            Usuario::validate($_POST);
            header('Location: ?url=home/home/');
        } catch (\Exception $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href="?url=home/login/"</script>';
        }    
    }
    
}