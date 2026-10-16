<?php

namespace App\Controller;

use App\Entity\Location;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FormController extends AbstractController
{
    #[Route('/', name: 'app_form')]
    public function index(): Response
    {
        $location = new Location();
        $location
            ->setCountry('PL')
            ->setCity('Szczecin')
            ->setLatitude(53.4481)
            ->setLongitude(14.5372)
        ;

        $form = $this->createFormBuilder($location) // default values in $location
            ->add('country', TextType::class)
            ->add('city', TextType::class)
            ->add('latitude', NumberType::class)
            ->add('longitude', NumberType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Create Location',
            ])
            ->getForm()
        ;

        return $this->render('form/index.html.twig', [
            'location' => $location,
            'form' => $form,
        ]);
    }
}
