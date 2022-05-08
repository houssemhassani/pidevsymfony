<?php

namespace App\Controller;
use App\Repository\EmployeeRepository;

use App\Entity\Employee;
use App\Entity\Equipe;
use App\Entity\Service;
use App\Form\EquipeServiceType;
use App\Form\EquipeType;
use App\Repository\EquipeRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;


/**
 * @Route("/equipe")
 */
class EquipeController extends AbstractController
{   //hethi  page affichage lowla eli djik direct fiha les equipe wil recherche
    /**
     * @Route("/", name="app_equipe_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {
        $data = $entityManager
            ->getRepository(Equipe::class)
            ->findAll();
            $equipes = $paginator->paginate(
            $data, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5// Nombre de résultats par page
        );

        return $this->render('equipe/indextest1.html.twig', [
            'equipes' => $equipes,
        ]);
    }

    /**
     * @Route("/testJSONequipe", name="testJSONequipe")
     */
    public function AFFICHAGE_Par_JSON_Equipe(EntityManagerInterface $entityManager, NormalizerInterface $normalizer)
    {
        $equipes = $entityManager
            ->getRepository(Equipe::class)
            ->findAll();
        $JsonContent = $normalizer->normalize($equipes, 'json',['group'=>'post:read']);
        return new Response(json_encode($JsonContent));
    }

    

    /**
     * @Route("/AffichageEquipeParIDJSON", name="AffichageEquipeParIDJSON")
     */
    public function AffichageEquipeParIDJSON(EntityManagerInterface $entityManager, NormalizerInterface $normalizer,Request $request)
    {
        $id = $request->get("idEquipe");

        $equipes = $entityManager
            ->getRepository(Equipe::class)
            ->find($id);
        $JsonContent = $normalizer->normalize($equipes, 'json',['group'=>'post:read']);
        return new Response(json_encode($JsonContent));
    }


    /**
     * @Route ("/AjoutEquipeJSON", name="AjoutEqpJSON")
     * @Method("POST")
     */
        public function AjoutEquipeParJSON(Request $request)
        {
            $equipe = new Equipe();
            $numero = $request->query->get("numEquipe");
            $em = $this->getDoctrine()->getManager();
            $equipe->setNumEquipe($numero);
            $em->persist($equipe);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($equipe);
            return new JsonResponse($formatted);
        }
    /**
     * @Route("/deleteEquipeJSON", name="deleteEquipeJSON")
     * @Method("DELETE")
     */

    public function deleteEquipeJSON(Request $request) {
        $id = $request->get("idEquipe");

        $em = $this->getDoctrine()->getManager();
        $equipe = $em->getRepository(Equipe::class)->find($id);
        if($equipe!=null ) {
            $em->remove($equipe);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize($id);
            return new JsonResponse($formatted);

        }
        else
        return new JsonResponse("id equipe invalide ");


    }

    /**
 * @Route("/updateNumEquipeJSON", name="updateNumEquipeJSON")
 * @Method("PUT")
 */
    public function modifierNumEquipeJSON(Request $request, EquipeRepository $repository) {
        $em = $this->getDoctrine()->getManager();
        $equipe = $repository->find($request->get("idEquipe"));
        $equipe->setNumEquipe($request->get("numEquipe"));
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($equipe);
        return new JsonResponse("Numero Equipe a ete modifiee avec success.");

    }
    /**
     * @Route("/updateServiceEquipeJSON", name="updateServiceEquipeJSON")
     * @Method("PUT")
     */
    public function modifierServiceEquipeJSON(Request $request, EquipeRepository $repository) {
        $em = $this->getDoctrine()->getManager();
        $equipe = $repository->find($request->get("idEquipe"));
        $equipe->setService($request->get("service"));
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($equipe);
        return new JsonResponse("Service Equipe a ete modifiee avec success.");

    }


    /**
     * @Route("/rechercheEquipe ", name="rechercheEquipe", options={"expose"=true})
     */
    public function rechercheEquipe(Request $request,NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Equipe::class);
        $EquipeNumber=$request->get('searchValue');
        $Equipes = $repository->findTeamwithNumber($EquipeNumber);
      $jsonContent = $Normalizer->normalize($Equipes, 'json',['groups'=>'post:read']);
        $retour=json_encode($jsonContent);
     return new Response($retour);
    }
    //hethi methode recherche avancer

    /**
* @Route("/recherche_par_nom_taha", name="recherche_par_nom_taha",options={"expose"=true})
*/
public function rechercheequipetestTAHA(Request $request): JsonResponse
{
    $repository = $this->getDoctrine()->getRepository(Equipe::class);
    $EquipeNumber=$request->get('searchValue');
    $Equipes = $repository->findTeamwithNumber($EquipeNumber);
    $responseArray = [];
    $idx = 0;
    foreach ($Equipes as $Equipe) {
        $temp = [
            'numEquipe' => $Equipe->getNumEquipe(),
            'nbreEmp' => $Equipe->getnbreEmp(),
            'service' => $Equipe->getservice(),
        ];

        $responseArray[$idx++] = $temp;

    }
    return new JsonResponse($responseArray);
}

    /**
     * @Route("/stat1", name="tat1")
     */
    public function statEquipeAdvance(EquipeRepository $repository, EmployeeRepository $employeeRepository): Response
    {
        $data = [['ID Equipe', 'rate']];
        $equipes = $repository->findAll();
        $rating=0;
        $idx=1;
        foreach($equipes as $equipe)
        {
            $ID=$equipe->getIdEquipe();
            $Employees = $employeeRepository->getEmployeebyEquipeID($ID);

            foreach($Employees as $employee)
            {
                $rating = $rating + $employee->getRating();
                $idx++;
            }
            $RatingFINALEQUIPE=$rating/$idx;
            $data[]=array($ID, $RatingFINALEQUIPE);
            $bar = new ColumnChart();
            $bar->getData()->setArrayToDataTable(
                $data
            );

            $bar->getOptions()->getTitleTextStyle()->setColor('#07600');
            $bar->getOptions()->getTitleTextStyle()->setFontSize(50);

        }
        return $this->render('equipe/statEQUIPE.html.twig', array('barchart' => $bar,'nbs' => $equipes));
    }




    /**
     * @Route("/UPtriEQUIPE", name="UPtriEQUIPE",options={"expose"=true})
     */
    public function UPtriEQUIPE(Request $request): JsonResponse
    {
        $repository = $this->getDoctrine()->getRepository(Equipe::class);
        $UPorDOWN=$request->get('order');
        $Equipes=$repository->DescEquipeSearch($UPorDOWN);
        $responseArray = [];
        $idx = 0;
        foreach ($Equipes as $Equipe) {
            $temp = [
                'numEquipe' => $Equipe->getNumEquipe(),
                'nbreEmp' => $Equipe->getnbreEmp(),
                'service' => $Equipe->getservice(),
            ];

            $responseArray[$idx++] = $temp;

        }
        return new JsonResponse($responseArray);
    }

    /**
     * @Route("/DOWNtriEQUIPE", name="DOWNtriEQUIPE",options={"expose"=true})
     */
    public function DOWNtriEQUIPE(Request $request): JsonResponse
    {
        $repository = $this->getDoctrine()->getRepository(Equipe::class);
        $UPorDOWN=$request->get('order');
        $Equipes=$repository->AscEquipeSearch($UPorDOWN);
        $responseArray = [];
        $idx = 0;
        foreach ($Equipes as $Equipe) {
            $temp = [
                'numEquipe' => $Equipe->getNumEquipe(),
                'nbreEmp' => $Equipe->getnbreEmp(),
                'service' => $Equipe->getservice(),
            ];

            $responseArray[$idx++] = $temp;

        }
        return new JsonResponse($responseArray);
    }









    /**
     * @Route("/rechercheEquipetest ", name="rechercheEquipeTest")
     */
    public function rechercheEquipeTest(NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Equipe::class);

        $Equipes = $repository->findTeamwithNumber(33);
        $jsonContent = $Normalizer->normalize($Equipes, 'json',['groups'=>'equipe']);
        $retour=json_encode($jsonContent);
        return new Response($retour);
    }


/**
     * @Route("/AffecationEmpEquipe", name="AEE", methods={"GET"})
     */
      public function indexEMP_EQUIPE(EntityManagerInterface $em): Response
    {
        $employees = $em
            ->getRepository(Employee::class)
            ->findAll();
        $equipes = $em
            ->getRepository(Equipe::class)
            ->findAll();
        return $this->render('equipe/affichageEqyupeEmployee.html.twig', ['employees' => $employees,
            'equipes' => $equipes,'employees' => $employees,
        ]);

    }

    /**
     * @Route("/{idEquipe}/AffecterService", name="app_service_equipe_edit", methods={"GET", "POST"})
     */
    public function AffecterServiceEquipe(Request $request, Equipe $equipe, EntityManagerInterface $entityManager): Response
    {   $services = $entityManager
        ->getRepository(Service::class)
        ->findAll();
        $equipes = $entityManager
            ->getRepository(Equipe::class)
            ->findAll();
        $form = $this->createForm(EquipeServiceType::class, $equipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipe/AffecterServiceEquipe.html.twig', [
            'services' => $services,
            'equipes' => $equipes,
            'e' => $equipe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new", name="app_equipe_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $equipe = new Equipe();
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipe);
            $entityManager->flush();
            $this->addFlash('info','Ajout fait avec succes');


            return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipe/new.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEquipe}", name="app_equipe_show", methods={"GET"})
     */
    public function show(Equipe $equipe): Response
    {
        return $this->render('equipe/show.html.twig', [
            'equipe' => $equipe,
        ]);
    }

    /**
     * @Route("/{idEquipe}/edit", name="app_equipe_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipe/edit.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEquipe}", name="app_equipe_delete", methods={"POST"})
     */
    public function delete(Request $request, Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipe->getIdEquipe(), $request->request->get('_token'))) {
            $entityManager->remove($equipe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
    }
























}
