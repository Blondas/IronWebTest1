<?php

namespace Kris\IronApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Kris\IronApiBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getUsersAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('KrisIronApiBundle:User')
            ->findAll();

        return array('users' => $users);
    }


    /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="KrisIronApiBundle:User")
     */
    public function getUserAction(User $user)
    {

        return array('users' => $user);


    }

    /**
     *  @Route("/article/{id}")
     * @Method({"PUT"})
     */
    public function createArticleAction() {

    }
}
