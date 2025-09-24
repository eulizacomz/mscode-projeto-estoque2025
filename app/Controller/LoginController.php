<?php

namespace App\Controller;

use App\Model\Usuario;

/// login -----vai receber os dados do formulário de login

class LoginController  extends AbstractController{

    public function index(array $requestData): void
    {

        //inicializar sessão
        session_start();
    

        $model =new Usuario();

        $usuario = $model->findByemail($requestData['email']);
        if(!$usuario){
            $this->redirectToError('Usuário ou senha inválidos');
        }

        if (! password_verify($requestData['senha'], $usuario['senha'])){
            $this->redirectToError('Usuário ou senha inválidos');
        }

        $_SESSION['usuario_logado'] = 1;

         $this->redirect('/tela-inicial');
        }

    }

   