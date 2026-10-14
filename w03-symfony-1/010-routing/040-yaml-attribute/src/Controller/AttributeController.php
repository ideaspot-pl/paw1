<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AttributeController extends AbstractController
{
    #[Route('/attributes', name: 'attributes')]
    public function mobile(): Response
    {
        return new Response("This was routed to using attributes");
    }
}
