<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function quentin()
    {
        return $this->json(['name' => 'quentin']);
    }
}
