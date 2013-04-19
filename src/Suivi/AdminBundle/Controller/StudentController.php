<?php

namespace Suivi\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Student controller.
 *
 * @Route(pattern = "/student")
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class StudentController extends Controller
{
    /**
     * List all students.
     *
     * @Route(
     *      pattern = "/list",
     *      name    = "admin_student_list"
     * )
     *
     * @Template
     *
     * @return array
     */
    public function listAction()
    {
        $students = $this->getDoctrine()->getRepository('SuiviUserBundle:Student')->getList();

        return ['students' => $students];
    }

    public function addAction()
    {

    }

    public function editAction()
    {

    }

    public function removeAction()
    {

    }
}
