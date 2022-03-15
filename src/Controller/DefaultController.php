<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_country_list')]
    public function index(CountryRepository $countryRepository): Response
    {
        $countries = $countryRepository->findAll();
        dump($countries);

        return $this->render('country/index.html.twig', [
            'countries' => $countries,
        ]);
    }
}
