<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowsController extends AbstractController
{
    /**
     * @Route("/shows", name="shows_browse")
     */
    public function browse(): Response
    {
        return $this->render('shows/browse.html.twig', [
            'controller_name' => 'ShowsController'
        ]);
    }
}
