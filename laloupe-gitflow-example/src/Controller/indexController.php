<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function antoineFaintrenie()
    {
        return $this->json(['name' => 'af']);
    }
}
