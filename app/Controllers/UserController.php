<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends CoreController {

    public function register() {
        $this->show('user/register');
      }

      public function add()
    {
        $email     = filter_input( INPUT_POST, 'email',     FILTER_SANITIZE_STRING );
        $password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );
        $pseudo  = filter_input( INPUT_POST, 'pseudo',  FILTER_SANITIZE_STRING );

        $user = new User();

        $user->setEmail( $email ); 
        $user->setPassword( $password ); 
        $user->setPseudo( $pseudo); 
 

        if( $user->insert() )
        {
            global $router;
            header('Location: '.$router->generate( 'login' ));
        }
        else
        {
            echo "Une erreur est survenue lors de l'enregistrement de l'utilisateur.";
            exit();
        }
    }


}