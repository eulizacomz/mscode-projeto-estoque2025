<?php

namespace App\Controller\Error;

use App\Controller\AbstractController;

//Organiza o código em pastas virtuais
//Estamos dentro desse diretório

class NotFoundController extends AbstractController
//use importa a classe AbstractController para usar aqui

{
    public function index(array $requestData): void
    {
        $this->render('404.php', [
            'mensagem' => 'Página não encontrada'
        ]);
    }
}
