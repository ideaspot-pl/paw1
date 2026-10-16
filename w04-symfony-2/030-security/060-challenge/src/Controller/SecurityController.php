<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SecurityController extends AbstractController
{
    #[Route('/', name: 'app_security_index')]
    public function index(): Response
    {
        return $this->render('security/index.html.twig');
    }

    #[Route('/granted', name: "app_security_granted")]
    public function granted(): Response
    {
        return $this->render('security/granted.html.twig');
    }

    #[Route('/url', name: "app_security_url")]
    public function url(): Response
    {
        return $this->render('security/url.html.twig');
    }
}
