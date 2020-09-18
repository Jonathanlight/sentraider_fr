<?php

namespace App\Manager;

use App\Entity\Contact;
use App\Event\ContactEvent;
use App\Services\MessageService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class ContactManager
{
    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var MessageService
     */
    protected $messageService;

    public function __construct(
        EventDispatcherInterface $eventDispatcher,
        EntityManagerInterface $em,
        MessageService $messageService
    )
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->em = $em;
        $this->messageService = $messageService;
    }

    /**
     * @param Contact $contact
     */
    public function sendContact(Contact $contact)
    {
        if ($contact instanceof Contact) {
            $this->em->persist($contact);
            $this->em->flush();

            $event = new ContactEvent($contact);
            $this->eventDispatcher->dispatch($event);

            $this->messageService->addSuccess('Votre message à bien été  valider .');
        }
    }
}