<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function fabien()
    {
        return $this->json(['name' => 'fab']);
    }
}


