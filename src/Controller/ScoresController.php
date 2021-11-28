<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Scores;
use App\Repository\ScoresRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
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







class ScoresController extends  AbstractController
{ 
    ////////////////////////////////////////////////////////////////////////////////////
    //                          Function GET pour voir tout les scores                //
   //                              Route sécuriser par token                         //
  ////////////////////////////////////////////////////////////////////////////////////

    /**
     * @Route("/api/Scores", name="api_post_total", methods={"GET"})
     */

   public function total(ScoresRepository $ScoresRepository)



   
        //si ?TOKEN ET présent dans La requete 
    {   if(isset($_GET["TOKEN"])) {

        // chemin d'accès fichier JSON
        $fichierjson = __DIR__ .'/Token.json'; 
                    // mettre le contenu du fichier dans une variable
            $datajson = file_get_contents($fichierjson); 
                // décoder le flux JSON
            $objetjson = json_decode($datajson, true); 

                // accéder à l'élément 
            $SécurityAccess = $objetjson["TOKEN"];

        //Si la valeur du TOKEN  donner et strictement égual a la valeur du TOKEN 
        if($_GET["TOKEN"] == $SécurityAccess ) {
            //Je retourne tout les scores 
            return $this->json($ScoresRepository->findAll(), 200, [], ['groups' => 'read']);
        }else{
            //Si la valeur du TOKEN et incorecte je retourne un message d'erreur 
            return $this->json("ta loucher ! ton token est incorecte !", 401);
        }   
    }
    else {
        //Si ?TOKEN etnon detecter dans L'url je retourne un message d'erreur 
        return $this->json("oublie pas mon token ! , sinon T coincer ici !", 401);
    }}

     ////////////////////////////////////////////////////////////////////////////////////
    //                Function GET pour voir les 10 derniers meilleurs scores         //
   //                              Route sécuriser par token                         //
  ////////////////////////////////////////////////////////////////////////////////////

    /**
     * @Route("/api/Classement", name="api_post", methods={"GET"})
     */

    public function index(ScoresRepository $ScoresRepository)
    //si ?TOKEN ET présent dans La requete 
    {   if(isset($_GET["TOKEN"])) {

        // chemin d'accès fichier JSON
        $fichierjson = __DIR__ .'/Token.json'; 
                    // mettre le contenu du fichier dans une variable
            $datajson = file_get_contents($fichierjson); 
                // décoder le flux JSON
            $objetjson = json_decode($datajson, true); 

                // accéder à l'élément 
            $SécurityAccess = $objetjson["TOKEN"];
        
        //Si la valeur du TOKEN  donner et strictement égual a la valeur du TOKEN
        if($_GET["TOKEN"] == $SécurityAccess) {
             //Je retourne Les 10 meilleurs scores 
            return $this->json($ScoresRepository->findorderDESC(), 200, [], ['groups' => 'read']);
        }else{
        //Si la valeur du TOKEN et incorecte je retourne un message d'erreur 
            return $this->json("ta loucher ! ton token est incorecte !", 401);
        }}
    else {
         //Si ?TOKEN etnon detecter dans L'url je retourne un message d'erreur 
        return $this->json("oublie pas mon token ! , sinon T coincer ici !", 401);
    }
  }




     ////////////////////////////////////////////////////////////////////////////////////
    //                          Function POST pour ajout score                        //
   //                              Route sécuriser par token                         //
  ////////////////////////////////////////////////////////////////////////////////////

     /**
     * @Route("/api/add_Scores", name="api_post_scores", methods={"POST"})
     */
    
    public function Newscore(Request $request, SerializerInterface $serializer, EntityManagerInterface $manager, ValidatorInterface $validator)
    {  //si ?TOKEN ET présent dans La requete 
        if(isset($_GET["TOKEN"])) {

            // chemin d'accès fichier JSON
        $fichierjson = __DIR__ .'/Token.json'; 
            // mettre le contenu du fichier dans une variable
        $datajson = file_get_contents($fichierjson); 
            // décoder le flux JSON
        $objetjson = json_decode($datajson, true);  

            // accéder à l'élément 
        $SécurityAccess = $objetjson["TOKEN"];

        //Si la valeur du TOKEN  donner et strictement égual a la valeur du TOKEN
            if($_GET["TOKEN"] == $SécurityAccess ) {
        //
        $jsonRecu = $request->getContent();

        //
        try{
            //
            $score = $serializer->deserialize($jsonRecu, Scores::class, 'json');
            //
           $errors = $validator->validate($score);
           //
           if(count($errors) > 0 )
           {
            //
             return $this->json($errors, 400);
            }
            //
            $manager->persist($score);
            //
            $manager->flush();
            //
           return $this->json($score, 201, [], ['groups' => 'read']);

     }catch (NotEncodableValueException $encode){
           return $this->json([
               'status' => 400,
               'message' => $encode->getMessage()
           ], 400); 
        }
    }else{
        //Si la valeur du TOKEN et incorecte je retourne un message d'erreur 
        return $this->json("ta loucher ! ton token est incorecte !", 401);
    }
 }else {
     //Si ?TOKEN etnon detecter dans L'url je retourne un message d'erreur 
    return $this->json("oublie pas mon token ! , sinon T coincer ici !", 401);
}
}
   
}