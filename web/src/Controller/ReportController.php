<?php

namespace App\Controller;

use App\Entity\Complaint;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{



    /**
     * @Route("/report", name="app_report")
     */
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $writeRequest = $request->request->all();
        //новая запись в бд (без проверок, надо будет добавить , если не поймешь так уж и быть за косарь помогу переделать по человечески))))))) не шучу
        $newComplaint = new Complaint();
        $newComplaint->email = $writeRequest['email'];
        $newComplaint->topic = $writeRequest['topic'];
        $newComplaint->description = $writeRequest['report-text'];
        $em->persist($newComplaint);
        $em->flush();
        return $this->render('report/index.html.twig', [
            'controller_name' => 'ReportController',
        ]);
    }
}
