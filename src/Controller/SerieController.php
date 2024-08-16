<?php

namespace App\Controller;

use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SerieController extends AbstractController
{
    #[Route('/series/{page}', name: 'app_series_list', requirements: ['page' => '\d+'], defaults: ['page' => 1])]
    public function list(SerieRepository $serieRepository, int $page): Response
    {
        $nbByPages = 10;
        $offset = ($page-1) * $nbByPages;

        $criterias = ['status'=>'Returning','genres'=>'Gore'];

        $nbTotal = $serieRepository->count($criterias);

        //$series = $serieRepository->findAll();
        //récupérer les données en applicants des critères et des filtres
        #$series = $serieRepository->findBy(['status'=>'Returning','genres'=>'Gore'], ['vote' => 'DESC'], $nbByPages, $offset);


        //$series = $serieRepository->findBestSeriesWithSpecificGenre(['Gore', 'Comedy']);

        //$series = $serieRepository->getBestSeriesInDQL();

        $series = $serieRepository->getBestSeriesInRawSQL();

        //dd($series);

        //$nbTotalPages = floor($nbTotal/$nbByPages);

        return $this->render('serie/index.html.twig', [
            'series' => $series,
            'page' => $page,
            'nbPageMax' => ceil($nbTotal/$nbByPages),
        ]);
    }
}
