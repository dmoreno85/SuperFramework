<?php
namespace App\controllers;

class HolaController extends Controller{

    public function index(){
        $this->viewManager->renderTemplate('hola.twig.html');
    }


}