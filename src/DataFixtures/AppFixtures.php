<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach (['AT', 'DE'] as $code) {
            $county = (new Country())->setCode($code);
            $manager->persist($county);
        }

        $manager->flush();
    }
}
