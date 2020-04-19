<?php

namespace App\Controller\Api;

use App\Manager\UserManager;

class CreateUser
{
    protected $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function __invoke($data)
    {
        $user = $data;
        return $this->userManager->registerAccount($user);
    }
}