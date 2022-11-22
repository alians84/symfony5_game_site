<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    //todo понадобится в дальнейшем
//    /**
//     * @Route("/user", name="user")
//     */
//    public function index()
//    {
//        return $this->render('user/forum.html.twig', [
//            'controller_name' => 'UserController',
//        ]);
//    }

 /**
  * @Route("/", name="user")
  */
 public function main()
 {
     return $this->render('user/index.html.twig', [
         'controller_name' => 'UserController',
     ]);
 }

}
