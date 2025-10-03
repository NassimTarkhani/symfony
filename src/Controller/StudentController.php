<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return new Response('hello students');
    }
    #[Route('/student/{id}', name: 'show_student', requirements: ['id' => '\d{2}'])]
    public function showStudent( int $id): Response
    {
        return new Response('hello students number : '.$id);
    }

    #[Route('/student/{name}', name: 'show_student_name', requirements: ['name' => '[a-zA-Z]+'])]
    public function showName( string $name): Response
    {
        return $this->render('student/student.html.twig',["name" => $name]);
    }

    #[Route('/student/{mark1}/{mark2}', name: 'sum', requirements: ["mark1"=>"\d+","mark2"=>"\d+"],)]
    public function sum( int $mark1 , int $mark2): Response
    {
        $total=$mark1+$mark2;
        return $this->render('student/sum.html.twig',[
            'mark1' => $mark1,
            'mark2' => $mark2,
            'total' => $total,]);
    }
    #[Route('/hello', name: 'student_hello')]
    public function hello(): Response
    {
return $this->redirectToRoute('app_student');
    }
    #[Route('/documentation',name:'student_docs')]
public function docs(int $id): Response{
return $this->redirect('https://symfony.com/doc/current/index.html');
}    #[Route('/documentation',name:'student_docs')]
public function docs(int $id): Response{
return $this->redirect('https://symfony.com/doc/current/index.html');
}




}
