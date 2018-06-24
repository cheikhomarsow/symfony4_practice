<?php
namespace App\Controller;

use App\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     * @return Response
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();

        $job = new Job();
        $job->setTtitle('On recherche un clown');
        $job->setDescription('Je suis une description 1 bla bla bla');
        $job->setCategory(2);

        /*
        $em->persist($job);

        $em->flush();
        */

        return $this->render('job/index.html.twig', [
            'job' => $job
        ]);
    }


}
