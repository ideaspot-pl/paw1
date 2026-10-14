<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

final class ForecastController extends AbstractController
{
    #[Route('{_locale}/forecast', name: 'app_forecast', requirements: ['_locale' => 'en|pl|uk'])]
    public function index(TranslatorInterface $translator): Response
    {
        $header = $translator->trans('forecast.index.header');
        $temperature = rand(-5, 5);

        return $this->render('forecast/index.html.twig', [
            'header' => $header,
            'temperature' => $temperature,
        ]);
    }
}
