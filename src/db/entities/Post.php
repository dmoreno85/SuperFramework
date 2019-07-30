<?php

namespace App\db\entities;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post extends Entity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    public $titulo;
    /**
     * @ORM\Column(type="string")
     */
   public $descripcion;
    /**
     * @ORM\Column(type="string")
     */
    public $autor;
    /**
     * @ORM\column(type="datetime")
     */
    public $created_at;
    /**
     * @ORM\column(type="datetime")
     */
    public $update_at;
    public function __construct()
    {
      $this->created_at = new \DateTime('now');   
    }
}