<?php

namespace App\EventListener;

use App\Entity\Contact;
use Doctrine\ORM\Event\LifecycleEventArgs;

/**
 * @package App\EventListener
 */
final class ContactListener
{
    /**
     * @param LifecycleEventArgs $args
     * @throws \Exception
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (true === property_exists($entity, 'createdAt') && $entity instanceof Contact) {
            $entity->setCreatedAt(new \DateTime());
            $entity->setUpdatedAt(new \DateTime());
        }
    }

    /**
     * @param LifecycleEventArgs $args
     * @throws \Exception
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (true === property_exists($entity, 'updatedAt') && $entity instanceof Contact) {
            $entity->setUpdatedAt(new \DateTime());
        }
    }
}
