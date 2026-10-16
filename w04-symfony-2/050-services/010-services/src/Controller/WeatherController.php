<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\HighlanderForecastGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WeatherController extends AbstractController
{
    #[Route('/')]
    public function index(
        HighlanderForecastGenerator $generator
    ): Response
    {
        return new Response(<<<EOT
<html>
    <body>
        Highlander says: <i>{$generator->getForecast()}</i>
    </body>
</html>
EOT
        );
    }
}
