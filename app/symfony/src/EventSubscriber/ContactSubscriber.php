<?php

namespace App\EventSubscriber;

use App\Event\ContactEvent;
use App\Services\MailerService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ContactSubscriber implements EventSubscriberInterface
{
    /**
     * @var MailerService
     */
    protected $mailerService;

    /**
     * ContactSubscriber constructor.
     * @param MailerService $mailerService
     */
    public function __construct(MailerService $mailerService)
    {
        $this->mailerService = $mailerService;
    }

    /**
     * @param ContactEvent $event
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function onSendContact(ContactEvent $event): void
    {
        $contact = $event->getContact();
        $parameters = [
          'email' => $contact->getEmail(),
          'name' => $contact->getName(),
          'description' => $contact->getDescription()
        ];

        $this->mailerService->send(
            "Nouveau Message",
            "hello@devsprof.fr",
            $contact->getEmail(),
            ContactEvent::TEMPLATE_CONTACT,
            $parameters
        );
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            ContactEvent::class => [
                ['onSendContact', 1]
            ]
        ];
    }
}