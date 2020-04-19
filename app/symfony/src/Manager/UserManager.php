<?php

namespace App\Manager;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Services\PasswordService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class UserManager
{
    protected $passwordServices;
    protected $entityManager;
    protected $userRepository;

    public function __construct(
        PasswordService $passwordServices,
        EntityManagerInterface $entityManager,
        UserRepository $userRepository
    )
    {
        $this->passwordServices = $passwordServices;
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
    }

    public function findEmail(string $email)
    {
        $user = $this->userRepository->findByEmail($email);

        if ($user){
            return $user[0];
        }

        return null;
    }

    public function referenceFormat()
    {
        return "REP".uniqid();
    }

    public function registerAccount(User $user)
    {
        if ($this->findEmail($user->getEmail())){
            throw new BadRequestHttpException('Cette adresse email existe déjà');
        }

        $user->setUsername($user->getEmail());
        $password = $this->passwordServices->encode($user, $user->getPassword());
        $user->setPassword($password);
        $user->setReference($this->referenceFormat());
        $user->setCreated(new \DateTime());
        $user->setUpdated(new \DateTime());
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return [
            "message" => "création d'un utilisateur a bien été effectue",
            "user" => $user
        ];
    }
}