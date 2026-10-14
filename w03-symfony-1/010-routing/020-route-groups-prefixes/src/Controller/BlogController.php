<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/blog', name: 'blog_', requirements: ['_locale' => 'en|pl|de'])]
final class BlogController extends AbstractController
{
    #[Route('/{_locale}', name: 'index')]
    public function index(): Response
    {
        return new Response("index");
    }

    #[Route('/{_locale}/posts/{slug}', name: 'show')]
    public function show(string $slug): Response
    {
        return new Response("show: $slug");
    }
}
