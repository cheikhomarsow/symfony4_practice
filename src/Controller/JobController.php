<?php
namespace App\Controller;

use App\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends Controller {



    /**
     * @Route("/job/{id}")
     */
    public function jobShowAction($id){
        $job = $this->getDoctrine()->getRepository(Job::class)->find($id);
        if(!$job){
            throw $this->createNotFoundException("L'offre d'emploie n'existe pas");
        }
        return $this->render('job/job_show.html.twig', [
            'job' => $job
        ]);
    }
}
