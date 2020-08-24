<?php

namespace App\DataCollector;

use App\Repository\CityRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

class AppBarFatboarCollector extends DataCollector
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @var CityRepository
     */
    protected $cityRepository;

    /**
     * AppBarFatboarCollector constructor.
     * @param UserRepository $userRepository
     * @param CityRepository $cityRepository
     */
    public function __construct(
        UserRepository $userRepository,
        CityRepository $cityRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->cityRepository = $cityRepository;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param \Throwable|null $exception
     */
    public function collect(Request $request, Response $response, \Throwable $exception = null)
    {
        $this->data = [
            'method' => $request->getMethod(),
            'acceptable_content_types' => $request->getAcceptableContentTypes(),
            'users' => $this->userRepository->findAll(),
            'cities' => $this->cityRepository->findAll(),
            'countUsers' => count($this->userRepository->findAll())
        ];
    }

    public function reset()
    {
        $this->data = [];
    }

    /**
     * @return mixed
     */
    public function getCountUsers()
    {
        return $this->data['countUsers'];
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->data['users'];
    }

    /**
     * @return mixed
     */
    public function getCities()
    {
        return $this->data['cities'];
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->data['method'];
    }

    /**
     * @return mixed
     */
    public function getAcceptableContentTypes()
    {
        return $this->data['acceptable_content_types'];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app.sentraider_fr';
    }
}

#https://symfony.com/doc/current/profiler/data_collector.html