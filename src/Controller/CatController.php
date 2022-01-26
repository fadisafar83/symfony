<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatController extends AbstractController
{

//     /**
//  * Show all rows from Program’s entity
//  *
//  * @Route("/cat", name="cat_index")
//  * @return Response A response instance
//  */
//     public function index(): Response
//     {
//         return $this->render('cat/index.html.twig', [
//             'controller_name' => 'CatController',
//         ]);
//     }

//     /**
//     * Getting a program by id
//     *
//     * @Route("/show/{id<^[0-9]+$>}", name="show")    
// 		* @return Response
//     */
//     public function show(string $catName):Response
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
