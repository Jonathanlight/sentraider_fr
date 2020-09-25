<?php

namespace App\Controller\Api;

use App\Entity\User;
use App\Manager\UserManager;
use Doctrine\ORM\EntityManagerInterface;

class CreateUser
{
    /**
     * @var UserManager
     */
    protected $userManager;

    /**
     * CreateUser constructor.
     * @param UserManager $userManager
     */
    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @param $data
     * @return mixed
     * @throws \Exception
     */
    public function __invoke($data)
    {
        return $this->userManager->registerAccount($data);
    }
}