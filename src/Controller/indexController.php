<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class theClass extends theSmallClass
{
    public function Fabrice()
    {
        return $this->json(['name' => 'Fabrice']);

    }
    public function richard()
    {
        return $this->json(['name' => 'richard']);
    }



    public function aurelien()
    {
        return $this->json(['name' => 'Aurelien']);
    }
      

    public function thomas()
    {
        return $this->json(['name' => 'thomas']);
    }

    public function brandon()
    {
        return $this->json(['name' => 'brandon']);
      
    }
  
    public function julien()
    {
        return $this->json(['name => 'julien']);
    }
  
    public function xavier()
    {
        return $this->json(['name' => 'Xavier']);
    }

}
