<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function Fabrice()
    {
        return $this->json(['name' => 'Fabriceeee bordel']);
    }
}
