<?php


namespace App\Controller;

//rota/logout

class LogoutController extends AbstractController
{
    public function index(array $requestData):void
    {
        session_start();
        session_destroy();
        $this->redirect('/');
    }
}