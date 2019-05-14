<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    public function benoitXavier()
    {
        return $this->json(['name' => 'bx']);        
    }


    public function Lyne()
    {
        return $this->json(['name' => 'Lyne']);
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
