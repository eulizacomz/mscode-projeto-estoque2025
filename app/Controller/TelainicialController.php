<?php

namespace App\Controller;

//principal, rota /

class TelainicialController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('tela-inicial.php', [
            // passar dados para a view
        ]);
    }
}
