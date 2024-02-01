<?php

namespace estoque\App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
class ProdutoController extends Controller{

    public function lista(){

        return '<h1>Listagem de produtos com laravel<h1>';

    } 
}