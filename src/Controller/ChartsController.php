<?php

namespace App\Controller;

use App\Entity\Commantaire;
use App\Entity\Publication;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

class ChartsController extends AbstractController
{
    /**
     * @Route("/charts", name="app_charts")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Publication::class);
        $repository = $this->getDoctrine()->getRepository(Commantaire::class);
        $publication = $repository->findAll();
        $commentaire = $repository->findAll();
        $em = $this->getDoctrine()->getManager();


        $pr1 = 0;
        $pr2 = 0;



        foreach ($publication as $publication) {
            if ($publication->getID() >= "1")  :

                $pr1 += 1;
            else:

                $pr2 += 1;


            endif;

        }
        foreach ($commentaire as $commentaire) {
            if ($commentaire->getID() >= "100")  :

                $pr1 += 1;
            else:

                $pr2 += 1;


            endif;

        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['publication', 'commentaire'],
                ['publication', $pr1],
                ['commentaire', $pr2],

            ]
        );
        $pieChart->getOptions()->setTitle('Publication/Commentaire');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('charts/index.html.twig', array('piechart' => $pieChart));
    }

}
