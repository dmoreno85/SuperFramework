<?php
namespace App\controllers;

use App\db\entities\User;



class UsersController extends Controller{

    
 
    public function index()
    {
        $user = $this->doctrineManager->em->getRepository(User::class)->findAll();

        $this->viewManager->renderTemplate('usersView.twig.html',['users'=>$user]);
    }
}