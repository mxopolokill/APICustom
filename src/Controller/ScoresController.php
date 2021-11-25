<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Scores;
use App\Repository\ScoresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;  
use Symfony\Component\Serializer\Normalizer;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ScoresController  extends  AbstractController
{ 
    /**
     * @Route("/api/Scores", name="api_post", methods={"GET"})
     */
    public function index(ScoresRepository $ScoresRepository)
    {

        return $this->json($ScoresRepository->findorderDESC(), 200, [], ['groups' => 'read']);

    }

     /**
     * @Route("/api/Scores", name="api_post_scores", methods={"POST"})
     */
    public function Newscore(Request $request, SerializerInterface $serializer, EntityManagerInterface $manager, ValidatorInterface $validator)
    {
        $jsonRecu = $request->getContent();

       
        try{
            $score = $serializer->deserialize($jsonRecu, Scores::class, 'json');
       
           $errors = $validator->validate($score);

           if(count($errors) > 0 )
           {
             return $this->json($errors, 400);
            }
            $manager->persist($score);

            $manager->flush();
      
           return $this->json($score, 201, [], ['groups' => 'read']);

     }catch (NotEncodableValueException $encode){
           return $this->json([
               'status' => 400,
               'message' => $encode->getMessage()
           ], 400); 
        }
    }

    
}