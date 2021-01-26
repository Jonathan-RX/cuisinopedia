<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserAccountController extends AbstractController
{

    /**
     * @Route("/profile", name="app_user_profile")
     */
    public function profile()
    {
        return $this->render('users/index.html.twig');
    }


    /**
     * @Route("/profile/recipes", name="app_user_recipes")
     */
    public function recipes()
    {
        return $this->render('users/recipes.html.twig');
    }


    /**
     * @Route("/profile/tools", name="app_user_tools")
     */
    public function tools()
    {
        return $this->render('users/tools.html.twig');
    }
}
