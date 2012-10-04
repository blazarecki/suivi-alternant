<?php

namespace Suivi\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Template,
    Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * This class represent the main controller.
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class MainController extends Controller
{
    /**
     * @Route(
     *      pattern = "/",
     *      name    = "main_index"
     * )
     *
     * @Template
     *
     * @return array
     */
    public function indexAction()
    {
        return [];
    }
}
