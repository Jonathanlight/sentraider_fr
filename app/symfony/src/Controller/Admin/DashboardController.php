<?php

namespace App\Controller\Admin;

use App\Entity\City;
use App\Entity\Help;
use App\Entity\User;
use App\Repository\CityRepository;
use App\Repository\HelpRepository;
use App\Repository\UserRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    /**
     * @var UserRepository
     */
    protected UserRepository $userRepository;

    /**
     * @var HelpRepository
     */
    protected HelpRepository $helpRepository;

    /**
     * @var CityRepository
     */
    protected CityRepository $cityRepository;

    public function __construct(
        UserRepository $userRepository,
        HelpRepository $helpRepository,
        CityRepository $cityRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->helpRepository = $helpRepository;
        $this->cityRepository = $cityRepository;
    }

    /**
     * @Route("/admin_74ze5f", name="admin")
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     */
    public function index(): Response
    {
        return $this->render('bundles/EasyAdminBundle/welcome.html.twig', [
            'countUser' => $this->userRepository->countAllUser(),
            'countHelp' => $this->helpRepository->countAllHelp(),
            'cities' => $this->cityRepository->findAll()
        ]);
    }

    /**
     * @return Dashboard
     */
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Sentraider')
            ->setFaviconPath('assets/front/img/favicon.png')
            ->setTextDirection('ltr')
        ;
    }

    public function configureAssets(): Assets
    {
        return Assets::new()
            ->addCssFile('bundles/easyadmin/css/style.css');

    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setName($user->getUsername())
            ->displayUserName(true)
            //->setAvatarUrl('https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png')
            //->setAvatarUrl($user->getProfileImageUrl())
            ->displayUserAvatar(true)
            ->setGravatarEmail($user->getUsername())

            ->addMenuItems([
                //MenuItem::linkToLogout('Logout', 'fa fa-sign-out'),
            ]);
    }

    /**
     * @return iterable
     */
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('User', 'fa fa-user', User::class);
        yield MenuItem::linkToCrud('Ville', 'fa fa-map', City::class);
        yield MenuItem::linkToCrud('Help', 'fa fa-recycle', Help::class);
    }
}
