<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function benoitXavier()
    {
        return $this->json(['name' => 'thibault']);
    }
    public function thibaultG()
    {
        return $this->json(['name' => 'thibault']);
    }
}
