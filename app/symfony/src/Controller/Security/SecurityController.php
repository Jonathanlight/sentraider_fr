<?php

namespace App\Controller\Security;

use App\Entity\User;
use App\Form\Security\LoginType;
use App\Form\Security\RegisterType;
use App\Form\Security\RequestType;
use App\Form\Security\ResetType;
use App\Manager\TokenManager;
use App\Manager\UserManager;
use App\Services\MessageService;
use App\Services\TokenService;
use App\Services\TranslatorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/admin_74ze5f/login", name="admin_login", methods={"GET","POST"})
     * @param AuthenticationUtils $authUtils
     * @return Response
     */
    public function admin(AuthenticationUtils $authUtils): Response
    {
        $form = $this->createForm(LoginType::class, [
            '_username' => $authUtils->getLastUsername(),
        ]);

        return $this->render('security/login.html.twig', [
            'error' => $authUtils->getLastAuthenticationError(),
            'admin' => 'Admin',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/login", name="login", methods={"GET","POST"})
     * @param AuthenticationUtils $authUtils
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function user(
        AuthenticationUtils $authUtils,
        Request $request
    ): Response {
        $form = $this->createForm(LoginType::class, [
            '_username' => $authUtils->getLastUsername(),
        ]);

        return $this->render('security/login.html.twig', [
            'error' => $authUtils->getLastAuthenticationError(),
            'form' => $form->createView(),
            'admin' => '',
        ]);
    }

    /**
     * @Route("/admin_74ze5f/logout", name="admin_logout", methods={"GET"})
     * @Route("/user/logout", name="user_logout", methods={"GET"})
     */
    public function logout()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}