<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{




    public function thomas()
    {
        return $this->json(['name' => 'thomas']);
    }
}
