<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    public function showTeacher ($name ): Response
    {
        return  ("Bonjour $name");
    }
    #[Route('/Teacher2/{name}')]
    public function showTeacher2($name): Response
    {
        return $this->render('/teacher/showTeacher.html.twig', ['name' => $name]);
    }
    #[Route('/goToIndex')]
    public function goToIndex()
    {
        return $this->forward('App\Controller\StudentController::index2');
    }
}
