<?php

namespace App\DataFixtures\Processor;

use App\Entity\Admin;
use App\Services\PasswordService;
use Fidry\AliceDataFixtures\ProcessorInterface;

class AdminProcessor implements ProcessorInterface
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
        if (!$object instanceof Admin) {
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
