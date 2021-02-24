<?php

namespace App\Controllers;
use App\Models\User;

class MainController extends CoreController {
    public function home()
    {

        $this->show('main/home');
    }

     public function legal()
    {
        $this->show('main/legal');
    }


    public function login()
    {
        $this->show('main/login');
    }

    public function connect()
    {
        global $router;
        $user = User::findByEmail($_POST['email']);

        if ($user && password_verify($_POST['password'], $user->getPassword())) {
            $_SESSION['user'] = $user;
            header('Location: '.$router->generate('main-home'));
            exit();
        } else {
            header('Location: '.$router->generate('login'));
            exit();
        }
    }

    public function logout()
    {
        global $router;
        unset( $_SESSION['user'] );

        header('Location: '.$router->generate('login'));
        exit();
    }
}