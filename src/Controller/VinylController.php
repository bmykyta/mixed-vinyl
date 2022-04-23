<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route(path: "/", name: "homepage")]
    public function homepage(): Response
    {
        return $this->render('vinyl/homepage.html.twig');
    }

    #[Route(path: "/browse/{slug}", name: "browse")]
    public function browse(string $slug = null): Response
    {
        if ($slug !== null) {
            $title = 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All Genres';
        }

        return new Response($title);
    }
}