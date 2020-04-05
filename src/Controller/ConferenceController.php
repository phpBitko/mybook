<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="homepage")
     *
     * @param Request $request
     * @param string $name
     *
     * @return Response
     */
    public function index(Request $request, string $name = '')
    {
        $greet = '';
        if ($name) {
           $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
        return new Response(<<<EOF
<htlm>
    <body>
    $greet
    <img src="/images/website-under-construction.gif">
</body>
</htlm>

EOF
        );
    }
}
