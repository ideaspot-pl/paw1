<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class ServiceController extends AbstractController
{
    #[Route('/service/{max}',
        name: 'service',
        requirements: ['max' => Requirement::DIGITS]
    )]
    public function randomAction(
        LoggerInterface $logger,
        int $max = 100,
    ): Response
    {
        $logger->debug("Generating a random number between 0 and $max");
        $number = random_int(0, $max);
        $logger->info("Generated random number: $number");

        return new Response(
            "<html><body>Random number: $number</body></html>"
        );
    }
}
