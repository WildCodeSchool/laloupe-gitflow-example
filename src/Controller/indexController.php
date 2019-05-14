<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function aurelien()
    {
        return $this->json(['name' => 'Aurélien']);
    }
}
