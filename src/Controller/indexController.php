<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function benoitXavier()
    {
        return $this->json(['name' => 'bx']);
    }

    public function brandon()
    {
        return $this->json(['name' => 'brandon']);
    }
  
    public function julien()
    {
        return $this->json(['name => 'julien']);
    }
  
}
