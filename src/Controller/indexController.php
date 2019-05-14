<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function yorannelisabeth()
    {
        return $this->json(['name' => 'yorannelisabeth']);
    } 
}
