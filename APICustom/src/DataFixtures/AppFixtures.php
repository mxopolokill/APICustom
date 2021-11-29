<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use APP\Entity\Scores;
 

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        

        for ($i = 0; $i < 50; $i++) {
            $Scores = new Scores();
            $Scores->setPseudo("");
            $Scores->setScore("");
            $Scores->setTimer("");
        }

        $manager->flush();
    }
}
