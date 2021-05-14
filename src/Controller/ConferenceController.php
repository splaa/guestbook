<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/hello/{name}', name: 'homepage')]
    public function index(string $name = 'People'): Response
    {
        $greet = '';
        if ($name ) {
            $greet = sprintf('%s', htmlspecialchars($name));
        }
        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
            'greet' => $greet,
        ]);
    }
}
