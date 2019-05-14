<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function thibdr()
    {
        return $this->json(['name' => 'thibdr']);
    }
}
