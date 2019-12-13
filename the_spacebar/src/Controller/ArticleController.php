<?php


namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;

class ArticleControler
{
    public function homepage() {
        return new Response("OMG my first page");
    }
}