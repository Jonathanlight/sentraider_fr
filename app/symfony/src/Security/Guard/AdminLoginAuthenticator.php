<?php

namespace App\Security\Guard;

use App\Entity\Admin;
use App\Services\PasswordService;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

class AdminLoginAuthenticator extends AbstractGuardAuthenticator
{
    /**
     * @var PasswordService
     */
    private $passwordService;

    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    /**
     * @param PasswordService       $passwordService
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(
        PasswordService $passwordService,
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->passwordService = $passwordService;
        $this->urlGenerator    = $urlGenerator;
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function supports(Request $request): bool
    {
        if (!$request->request->has('_username') || !$request->request->has('_password')) {
            return false;
        }
        if ($this->urlGenerator->generate('admin_login') !== $request->getPathInfo()) {
            return false;
        }
        if (!$request->isMethod(Request::METHOD_POST)) {
            return false;
        }
        return true;
    }

    /**
     * @param Request                 $request
     * @param AuthenticationException $exception
     *
     * @return RedirectResponse
     */
    public function start(Request $request, AuthenticationException $exception = null): RedirectResponse
    {
        return new RedirectResponse($this->urlGenerator->generate('admin_login'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getCredentials(Request $request): array
    {
        $data = [
            'username' => $request->request->get('_username'),
            'password' => $request->request->get('_password'),
        ];
        $request->getSession()->set(Security::LAST_USERNAME, $data['username']);
        return $data;
    }

    /**
     * @param string                $credentials
     * @param UserProviderInterface $userProvider
     * @return Admin
     */
    public function getUser($credentials, UserProviderInterface $userProvider): Admin
    {
        return $userProvider->loadUserByUsername($credentials['username']);
    }

    /**
     * @param string        $credentials
     * @param UserInterface $user
     * @return bool
     */
    public function checkCredentials($credentials, UserInterface $user): bool
    {
        if ($this->passwordService->isValid($user, $credentials['password'])) {
            return true;
        }
        return false;
    }

    /**
     * @param Request        $request
     * @param TokenInterface $token
     * @param string         $providerKey
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey): RedirectResponse
    {
        return new RedirectResponse($this->urlGenerator->generate('admin'));
    }

    /**
     * @param Request                 $request
     * @param AuthenticationException $exception
     * @return RedirectResponse
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): RedirectResponse
    {
        $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);
        return new RedirectResponse($this->urlGenerator->generate('admin_login'));
    }

    /**
     * @return bool
     */
    public function supportsRememberMe(): bool
    {
        return false;
    }
}