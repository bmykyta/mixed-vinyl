<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("api", name: "api_")]
class SongApiController extends AbstractController
{
    #[Route("/songs/{id<\d+>}", name: "song", methods: ["GET"])]
    public function getSong(int $id): Response
    {
        $song = [
            'id'   => $id,
            'name' => 'Waterfalls',
            'url'  => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];

        return $this->json($song);
    }
}