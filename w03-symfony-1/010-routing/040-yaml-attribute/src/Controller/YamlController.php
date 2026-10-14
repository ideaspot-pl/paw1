<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class YamlController extends AbstractController
{
    public function yaml(): Response
    {
        return new Response("This was routed to using routes.yaml");
    }
}
