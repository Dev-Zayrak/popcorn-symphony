<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Repository\SerieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test_persist', name: 'app_test_persist')]
    public function testPersist(EntityManagerInterface $em): Response
    {
        $serie = new Serie();
        $serie->setName('Dr House')
            ->setOverview('Le Dr Greg House est un médecin revêche qui ne fait confiance à personne, et encore moins à ses patients. Irrévérencieux et controversé, il n\'en serait que plus heureux s\'il pouvait ne pas adresser la parole à ses patients. Mais House est un brillant médecin. Et avec son équipe d\'experts, il est prêt à tout pour résoudre les cas médicaux les plus mystérieux et sauver des vies.')
            ->setStatus('ENDED')
            ->setGenres("drole, medicale")
            ->setFirstAirDate(new \DateTime('2004-11-16'))
            ->setLastAirDate(new \DateTime('2012-05-21'))
            ->setDateCreated(new \DateTime());

        #$em->persist($serie);
        #$em->flush();

        return new Response("L'entité est en base (normalement)");

    }

    #[Route('/test_update/{id}', name: 'app_test_update', requirements: ['id' => '\d+'])]
        public function testUpdate(SerieRepository $serieRepository,EntityManagerInterface $em ,int $id):response{

        $serie = $serieRepository->find($id);

        $serie->setOverview("Le Dr Greg House part en sucette");
        $serie->setDateModified(new \DateTime());

        $em->flush();

        return new Response("L'entité est à jour en BDD (normalement)");
    }
}
