<?php

namespace App\controllers;
use App\db\entities\Post;


class  PostController extends Controller
{

    public  function index()
    {
        $post = $this->doctrineManager->em->getRepository(Post::class)->findAll();
    
        $this->viewManager->renderTemplate('post.twig.html', ['posts'=>$post]);
    }
}
