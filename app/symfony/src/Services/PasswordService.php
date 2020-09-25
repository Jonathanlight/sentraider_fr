<?php

namespace App\Services;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PasswordService
{
    /**
     * @var PasswordService
     */
    private $userPasswordEncoder;

    /**
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    /**
     * @param object $entity
     * @param string $password
     * @return string
     */
    public function encode(object $entity, string $password): string
    {
        return $this->userPasswordEncoder->encodePassword($entity, $password);
    }

    /**
     * @param string $password
     * @return int
     */
    public function formatRequirement(string $password)
    {
        return preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $password);
    }

    /**
     * @param object $entity
     * @param string $password
     * @return bool
     */
    public function isValid(object $entity, string $password): bool
    {
        return $this->userPasswordEncoder->isPasswordValid($entity, $password);
    }
}