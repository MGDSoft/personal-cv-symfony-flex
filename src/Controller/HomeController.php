<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route(path="/", name="home_basic")
     */
    public function homeBasicAction()
    {
        $om = $this->getDoctrine()->getManager();
        return $this->render(
            'home_basic.html.twig',
            [
                'skills' => $om->getRepository('App\Entity\Skill')->findAllEnabled(),
            ]
        );
    }
}