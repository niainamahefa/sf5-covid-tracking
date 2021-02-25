<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use DateTime;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CallApiService $callApiService, ChartBuilderInterface $chartBuilder): Response
    {

    	//dd($callApiService->getGlobalData());
        return $this->render('home/index.html.twig', [
            'data' => $callApiService->getGlobalData(),
        ]);
    }

}
