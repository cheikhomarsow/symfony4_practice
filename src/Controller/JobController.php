<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends Controller {

    /**
     * @Route("/", name="homepage")
     * @return Response
     */
    public function indexAction(){

        return $this->render('job/index.html.twig');
    }

    /**
     * @Route("/job/{id}")
     */
    public function jobShowAction($id){
        dump($id);
        return $this->render('job/job_show.html.twig', [
            'id' => $id
        ]);
    }

    /**
     * @Route("/contact")
     * @return Response
     */
    public function contactAction(){
        return new Response('<html><body>Contact</body></html>');
    }
}
