<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("api", name: "api_")]
class SongApiController extends AbstractController
{
    #[Route("/songs/{id<\d+>}", name: "songs_get_one", methods: ["GET"])]
    public function getSong(int $id, LoggerInterface $logger): Response
    {
        $song = [
            'id'   => $id,
            'name' => 'Waterfalls',
            'url'  => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];

        $logger->info('Returning API response for song {song}', [
            'song' => $id,
        ]);

        return $this->json($song);
    }
}