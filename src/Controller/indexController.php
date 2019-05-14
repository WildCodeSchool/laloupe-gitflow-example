<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class theClass extends theSmallClass
{
    public function Fabrice()
    {
        return $this->json(['name' => 'Fabrice']);
    }
}
