<?php

namespace App\EventListener;

use App\Entity\Contact;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ContactListener
{
    protected $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (true === property_exists($entity, 'createdAt') && $entity instanceof Contact) {
            //$user = $this->tokenStorage->getToken()->getUser();
            $entity->setUpdatedAt(new \DateTime());
            $entity->setCreatedAt(new \DateTime());
        }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function preUpdate(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (true === property_exists($entity, 'updatedAt') && $entity instanceof Contact) {
            $entity->setUpdatedAt(new \DateTime());
        }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function postPersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (true === property_exists($entity, 'updatedAt') && $entity instanceof Contact) {
            $entity->setUpdatedAt(new \DateTime());

            //dd('postPersist', $entity);
        }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function postUpdate(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (true === property_exists($entity, 'updatedAt') && $entity instanceof Contact) {
            $entity->setUpdatedAt(new \DateTime());
        }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function preRemove(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (true === property_exists($entity, 'updatedAt') && $entity instanceof Contact) {
            $entity->setUpdatedAt(new \DateTime());
        }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function postRemove(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (true === property_exists($entity, 'updatedAt') && $entity instanceof Contact) {
            $entity->setUpdatedAt(new \DateTime());
        }
    }
}