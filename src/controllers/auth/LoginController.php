<?php

namespace App\controllers\auth;

use App\controllers\Controller;
use App\db\entities\User;

class LoginController extends Controller
{
    public function Index()
    {
        $this->error = null;
        $this->viewManager->renderTemplate('login.twig.html');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repository = $this->doctrineManager->em->getRepository(User::class);
        $user = $repository->findByEmail($email);
        if (!$user) {
            $this->error = "No existe el usuario";
            $this->viewManager->renderTemplate('login.twig.html', ['error' => $this->error]);
        }
       if($user[0]->password != sha1($password)){
           $this->error="No existe usuario o Password incorrecta";
           $this->viewManager->renderTemplate('login.twig.html', ['error' => $this->error]);
       } 
       $this->sessionManager->put('user',$user);
       $this->redirectTo('paneldecontrol');
    }
}
