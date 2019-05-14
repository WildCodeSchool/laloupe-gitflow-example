<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function benoitXavier()
    {
        return $this->json(['name' => 'bx']);
    }
    public function lucLevillain()
    {
        return $this->json(['name' => 'luclev']);
    }
}
