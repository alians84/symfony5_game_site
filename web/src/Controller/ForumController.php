<?php

namespace App\Controller;

use App\Entity\Complaint;
use App\Repository\ComplaintRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends AbstractController
{

    /**
     * @Route("/forum", name="app_forum")
     */
    public function index(EntityManagerInterface $em , ComplaintRepository $repository): Response
    {
        $allReport = $em->getRepository(Complaint::class)->find(1);
        $report = $allReport;
//        dd($allReport);
//        $repository->allReport($allReport);
//        dd($repository);
        return $this->render('forum/index.html.twig', [
            'controller_name' => 'ForumController',
            'allReport' => $report,
        ]);
    }
}
