<?php

namespace App\Controller\Error;

//Organiza o código em pastas virtuais
//Estamos dentro desse diretório

use App\Controller\AbstractController;

//use importa a classe AbstractController para usar aqui

class ErrorController extends AbstractController
//Cria uma classe ErrorController
//extends AbstractController herda funcionalidades da classe pai
{

    public function index(array $requestData): void

    //metodo principal: public\ metodo acessivel de qualquer lugar
    //index: nome do metodo ação proincipal
    //array  $requestData recebe um array  com dados da requisiçãi
    //:void indica que não retorna nada
    {
        $this->render('error.php', [
            'mensagem' => $requestData['mensagem'] ?? 'Erro interno do servidor'
        ]);
    }
}
// ?? Null Coalescing, se existir, usa esse valor
// se não existir, usa O TEXTO PADRAO





