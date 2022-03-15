<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use App\Service\User\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'country_list')]
    public function index(CountryRepository $countryRepository): Response
    {
        $countries = $countryRepository->findAll();
        dump($countries);

        return $this->render('country/index.html.twig', [
            'countries' => $countries,
        ]);
    }

    #[Route('/users/{userName}', name: 'user_profile')]
    public function avatar(string $userName, UserManager $manager): Response
    {
        return $this->render('avatar.html.twig', [
            'avatar' => $manager->getAvatar($userName),
        ]);
    }
}
