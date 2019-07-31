<?php 
namespace App\controllers;

class NotFoundController extends Controller
{
    public function index(){

        $this->viewManager->renderTemplate('404.twig.html');
    }
}