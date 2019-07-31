<?php
namespace App\controllers;


class NotAllowedController extends Controller{

    public function index()
    {
        $this->viewManager->renderTemplate('405.twig.html');
    }
}