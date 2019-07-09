<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Article;

/**
 * Brand controller.
 *
 * @Route("/api")
 */
class ApiController extends Controller
{
    /**
     * Say Hello.
     * @Route("/hello")
     *
     * @return string
     */
    public function getSayHelloAction()
    {
        return new Response(
            '<html><body>Hello World</body></html>'
        );
      
    }

}