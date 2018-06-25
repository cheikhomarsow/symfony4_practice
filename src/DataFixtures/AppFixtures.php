<?php

namespace App\DataFixtures;

use App\Entity\Job;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture{

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 40; $i++){
            $job = new Job();
            $job->setTitle("Job numéro " . $i);
            $job->setSlug("job-".$i);
            $job->setDescription("Descripton job numéro ".$i);
            $job->setCategory($i);
            $manager->persist($job);
        }

        $manager->flush();
    }

}