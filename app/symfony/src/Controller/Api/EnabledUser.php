<?php

namespace App\Controller\Api;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class EnabledUser
{
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke(User $data)
    {
        $user = $data;
        $user->setEnabled(true);
        $this->em->persist($user);
        $this->em->flush();

        return $user;
    }
}