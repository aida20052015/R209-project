<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
final class FALLCISSEController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/FALLCISSE', name: 'app_FALLCISSE')]
    public function index(): Response
    {
        return $this->render('FALLCISSE/index.html.twig', [
            'controller_name' => 'FALLCISSEController',
        ]);
    }
}
