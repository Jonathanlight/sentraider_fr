<?php

namespace App\Controller;

use App\Event\ContactEvent;
use App\Form\ContactType;
use App\Manager\ContactManager;
use App\Services\MessageService;
use App\Services\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @param MessageService $messageService
     * @param MailerService $mailerService
     * @param ContactManager $contactManager
     * @return Response
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function contact(
        Request $request,
        MessageService $messageService,
        MailerService $mailerService,
        ContactManager $contactManager
    ): Response
    {
        $formContact = $this->createForm(ContactType::class, null);
        $formContact->handleRequest($request);

        if ($formContact->isSubmitted() && $formContact->isValid()) {
            $data = $formContact->getData();

            $contactManager->sendContact($data);
            return $this->redirectToRoute('contact');
        }

        return $this->render('default/contact.html.twig', [
            'formContact' => $formContact->createView()
        ]);
    }
}
