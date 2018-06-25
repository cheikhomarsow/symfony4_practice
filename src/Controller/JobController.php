<?php
namespace App\Controller;

use App\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends Controller {



    /**
     * @Route("/job/{slug}")
     */
    public function jobShowAction(Job $job){
        if(!$job){
            throw $this->createNotFoundException("L'offre d'emploie n'existe pas");
        }
        return $this->render('job/job_show.html.twig', [
            'job' => $job
        ]);
    }
}
