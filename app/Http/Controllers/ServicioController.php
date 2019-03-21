<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Pais;
use App\Estado;


class ServicioController extends Controller
{
    public function igualaplatano($nombre) {
        if ($nombre == 'platano')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}