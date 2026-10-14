<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/', name: 'mobile', host: 'm.localhost')]
    public function mobile(): Response
    {
        return new Response("mobile");
    }

    #[Route('/', name: 'desktop')]
    public function index(): Response
    {
        return new Response("desktop");
    }
}
