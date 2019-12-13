<?php


namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response("OMG my first page");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug) {
        return new Response(sprintf("Future page for show page : %s", $slug));
    }
}