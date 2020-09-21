<?php

namespace App\EventSubscriber;

use App\Event\ContactEvent;
use App\Services\SwiftMailerService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ContactSubscriber implements EventSubscriberInterface
{
    /**
     * @var SwiftMailerService
     */
    protected $mailerService;

    public function __construct(SwiftMailerService $mailerService)
    {
        $this->mailerService = $mailerService;
    }

    /**
     * @param ContactEvent $event
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function onSendContact(ContactEvent $event)
    {
        $contact = $event->getContact();

        $parameters = [
            "email" => $contact->getEmail(),
            "name" => $contact->getName(),
            "description" => $contact->getDescription()
        ];

        $this->mailerService->send(
            "Nouveau Contact",
            ['support@devsprof.fr'],
            [$contact->getEmail()],
            ContactEvent::TEMPLATE_CONTACT,
            $parameters
        );
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            ContactEvent::class => [
                ['onSendContact', 1]
            ]
        ];
    }
}