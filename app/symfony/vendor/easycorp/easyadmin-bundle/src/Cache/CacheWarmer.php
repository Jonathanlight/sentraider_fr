<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Cache;

use EasyCorp\Bundle\EasyAdminBundle\Contracts\Controller\DashboardControllerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouterInterface;
use function Symfony\Component\String\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CacheWarmer implements CacheWarmerInterface
{
    public const DASHBOARD_ROUTES_CACHE = 'easyadmin/routes-dashboard.php';

    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function isOptional()
    {
        return false;
    }

    public function warmUp($cacheDirectory)
    {
        $allRoutes = $this->router->getRouteCollection();
        $dashboardRoutes = [];

        /** @var Route $route */
        foreach ($allRoutes as $routeName => $route) {
            $controller = u($route->getDefault('_controller') ?? '');
            if (!$controller->endsWith('::index')) {
                continue;
            }

            $controllerFqcn = $controller->beforeLast('::')->toString();
            if (!is_subclass_of($controllerFqcn, DashboardControllerInterface::class)) {
                continue;
            }

            // when using i18n routes, the same controller can be associated to
            // multiple routes (e.g. 'admin.en', 'admin.es', 'admin.fr', etc.)
            $dashboardRoutes[$routeName] = $controller->toString();
        }

        (new Filesystem())->dumpFile(
            $cacheDirectory.'/'.self::DASHBOARD_ROUTES_CACHE,
            '<?php return '.var_export($dashboardRoutes, true).';'
        );
    }
}
