<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function richard()
    {
        return $this->json(['name' => 'richard']);
    }
}
