<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Repository\UserRepository;


class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

      /**
     * @Route("/admin",name="admin")
     */
    public function afficher(): Response
    {
        $e = $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();
        dump($e); // Add this line
        return $this->render('admin/index.html.twig', ['e' => $e]);
    }
    


}
