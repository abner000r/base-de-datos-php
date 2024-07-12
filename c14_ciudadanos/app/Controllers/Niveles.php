<?php
namespace App\Controllers;
use App\Models\NivelesModel;

class Niveles extends BaseController
{
    public function index(): string
    {
     
        $niveles= new NivelesModel();
        $datos['datos']=$niveles->findAll();
        return view('niveles',$datos);
    }
}