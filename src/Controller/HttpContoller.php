<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/http')]
class HttpContoller extends AbstractController
{
    #[Route('/', name: 'http_index', methods: ['GET'])]
    #[Cache(smaxage: 10)]
    public function index(Request $request): Response
    {
        $response = new Response();

        var_dump($response->isRedirect('/pl'));

        $view = $this->renderView('http/index.html.twig', [
            /*
            'request_headers' => [
                'test_name' => 'test_value',

            ],
            'response_headers' => [
                'test_name' => 'test_value',
            ],
            */
            'request' => $request,
            'response' => $response,
        ]);

        $response->setContent($view);


        return $response;
    }
}
