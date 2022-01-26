<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Program;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ProgramRepository;

class ProgramController extends AbstractController
{
// /**
//  * Show all rows from Program’s entity
//  *
//  * @Route("/", name="index")
//  * @return Response A response instance
//  */
// public function index(): Response
// {
//      $programs = $this->getDoctrine()
//                     ->getRepository(Program::class)
//                     ->findAll() ;

//      return $this->render(
//              'program/index.html.twig',
//              ['programs' => $programs]
//      );
// }


/**
 * Show all rows from Program’s entity
 *
 * @Route("/", name="index")
 * @return Response A response instance
 */
public function index(ProgramRepository $programRepository): Response
{
    return $this->render('program/index.html.twig',
    [
    'programs' => $programRepository->findAll(),
    ]);
}

    /**
     * @Route("/{id}", name="program_show", methods={"GET"})
     */
    public function show(Program $program): Response
    {
        return $this->render('program/show.html.twig', [
            'program' => $program,
        ]);
    }

// /**
//     * Getting a program by id
//     *
//     * @Route("/show/{id<^[0-9]+$>}", name="show")    
// 		* @return Response
//     */
//     public function show(int $id):Response
//     {
      
//         $program = $this->getDoctrine()
//                         ->getRepository(Program::class)
//                         ->findOneBy(['id' => $id]);
//         if (!$program) {
//             throw $this->createNotFoundException(
//                 'No program with id : '.$id.'found in program\'s table.'
//             );
//         }

//         return $this->render('program/show.html.twig', 
//         [
//             'program' => $program,
//         ]);
//     }
}
