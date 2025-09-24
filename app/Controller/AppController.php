<?php

namespace App\Controller;

//principal, rota /

class AppController extends AbstractController
{
    public function index(array $requestData): void

   //metodo principal: public: metodo acessivel de qualquer lugar
    //index: nome do metodo ação principal
    //array  $requestData recebe um array  com dados da requisiçãi
    //:void indica que não retorna nada
    {
        $this->render('index.php', [
            // passar dados para a view
        ]);
    }
}
