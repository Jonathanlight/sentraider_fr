<?php

namespace App\Event;

use App\Entity\Contact;
use Symfony\Contracts\EventDispatcher\Event;

class ContactEvent extends Event
{
    const TEMPLATE_CONTACT = "email/contact.html.twig";

    /**
     * @var Contact
     */
    protected $contact;

    /**
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return Contact
     */
    public function getContact(): Contact{
        return $this->contact;
    }
}