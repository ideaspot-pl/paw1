<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

final class BlogController extends AbstractController
{
    #[Route('/blog/{page}', name: 'blog_list', requirements: ['page' => '[0-9]+'])]
//    #[Route('/blog/{page}', name: 'blog_list', requirements: ['page' => Requirement::DIGITS])]
    public function list(int $page): Response
    {
        return new Response("Page: $page");
    }

    #[Route('/blog/{slug}', name: 'blog_show')]
    public function show(string $slug): Response
    {
        return new Response("Slug: $slug");
    }

}
