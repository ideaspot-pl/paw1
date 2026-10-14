<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class DerivedController extends AbstractController
{
    #[Route('/derived/{max}', name: 'derived', requirements: ['max' => Requirement::DIGITS])]
    public function randomAction(int $max = 100): Response
    {
        $number = random_int(0, $max);

        return new Response(
            "<html><body>Random number: $number</body></html>"
        );
    }
}
