<?php
// src/AppBundle/Controller/Calculator.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}