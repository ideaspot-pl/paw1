<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class DemoController extends AbstractController
{
    #[Route('/', name: 'demo_index')]
    public function index()
    {
        return $this->render('demo/index.html.twig');
    }

    #[Route('/one', name: 'demo_one')]
    public function one()
    {
        return $this->render('demo/one.html.twig');
    }

    #[Route('/two', name: 'demo_two')]
    public function two()
    {
        return $this->render('demo/two.html.twig');
    }

    #[Route('/three', name: 'demo_three')]
    public function three()
    {
        return $this->render('demo/three.html.twig');
    }
}
