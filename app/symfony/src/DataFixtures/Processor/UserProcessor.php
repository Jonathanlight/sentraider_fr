<?php

namespace App\DataFixtures\Processor;

use App\Entity\User;
use App\Services\PasswordService;
use Fidry\AliceDataFixtures\ProcessorInterface;

class UserProcessor implements ProcessorInterface
{
    /**
     * @var PasswordService
     */
    private $passwordService;

    /**
     * @param PasswordService $passwordService
     */
    public function __construct(PasswordService $passwordService)
    {
        $this->passwordService = $passwordService;
    }

    /**
     * @param string $id
     * @param object $object
     */
    public function preProcess(string $id, $object): void
    {
        if (!$object instanceof User) {
            return;
        }

        $object->setPassword($this->passwordService->encode($object, $object->getPassword()));
    }

    /**
     * @param string $id
     * @param object $object
     */
    public function postProcess(string $id, $object): void
    {
    }
}
