<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

final class SecurityController extends AbstractController
{
    #[Route('/', name: 'app_security')]
    public function index(): Response
    {
        return $this->render('security/index.html.twig', [
        ]);
    }

    #[Route('/admin', name: 'app_admin')]
    public function admin(
        #[CurrentUser]
        User $user,
    ): Response
    {
        return $this->render('security/admin.html.twig', [
            'user' => $user,
        ]);
    }
}
