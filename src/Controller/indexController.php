<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function benoitXavier()
    {
        return $this->json(['name' => 'bx']);
    }

    public function victor()
    {
        return $this->json(['name' => 'tshintu']);
    }
  
    public function brandon()
    {
        return $this->json(['name' => 'brandon']);
    }
}
