<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin_74ze5f' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin_74ze5f/user/remove' => [[['_route' => 'remove_user', '_controller' => 'App\\Controller\\Admin\\UserCrudController::removeUser'], null, null, null, false, false, null]],
        '/admin_74ze5f/user/statistic' => [[['_route' => 'statistic', '_controller' => 'App\\Controller\\Admin\\UserCrudController::statistic'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\DefaultController::contact'], null, null, null, false, false, null]],
        '/admin_74ze5f/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\Security\\SecurityController::admin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin_74ze5f/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/user/logout' => [[['_route' => 'user_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/graphql' => [[['_route' => 'api_graphql_entrypoint', '_controller' => 'api_platform.graphql.action.entrypoint', '_graphql' => true], null, null, null, false, false, null]],
        '/api/v1/graphql/graphiql' => [[['_route' => 'api_graphql_graphiql', '_controller' => 'api_platform.graphql.action.graphiql', '_graphql' => true], null, null, null, false, false, null]],
        '/api/fb9870/documentation' => [[['_route' => 'app_swagger_ui', '_controller' => 'api_platform.swagger.action.ui', 'area' => 'default'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/_trans(?'
                    .'|(?:/([^/]++))?(*:72)'
                    .'|/([^/]++)/([^/]++)/([^/]++)(?'
                        .'|(*:109)'
                        .'|/new(*:121)'
                        .'|(*:129)'
                    .')'
                .')'
                .'|/([^/]++)/translation/(?'
                    .'|edit(*:168)'
                    .'|sync(?'
                        .'|(*:183)'
                        .'|_all(*:195)'
                    .')'
                    .'|create_assets(*:217)'
                .')'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:243)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:289)'
                            .'|router(*:303)'
                            .'|exception(?'
                                .'|(*:323)'
                                .'|\\.css(*:336)'
                            .')'
                        .')'
                        .'|(*:346)'
                    .')'
                .')'
                .'|/a(?'
                    .'|pi/v1(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:397)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:428)'
                            .'|c(?'
                                .'|ontexts/(.+)(?:\\.([^/]++))?(*:467)'
                                .'|ities(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:501)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:539)'
                                    .')'
                                .')'
                            .')'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:576)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:614)'
                                .')'
                            .')'
                            .'|helps(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:650)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:688)'
                                .')'
                            .')'
                            .'|admins(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:725)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:763)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/_trans_edit_in_place/([^/]++)/([^/]++)(*:818)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'translation_index', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::indexAction', 'configName' => null], ['configName'], ['GET' => 0], null, false, true, null]],
        109 => [[['_route' => 'translation_show', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::showAction'], ['configName', 'locale', 'domain'], ['GET' => 0], null, false, true, null]],
        121 => [[['_route' => 'translation_create', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::createAction'], ['configName', 'locale', 'domain'], ['POST' => 0], null, false, false, null]],
        129 => [
            [['_route' => 'translation_edit', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::editAction'], ['configName', 'locale', 'domain'], ['POST' => 0], null, false, true, null],
            [['_route' => 'translation_delete', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::deleteAction'], ['configName', 'locale', 'domain'], ['DELETE' => 0], null, false, true, null],
        ],
        168 => [[['_route' => 'php_translation_profiler_translation_edit', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::editAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        183 => [[['_route' => 'php_translation_profiler_translation_sync', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::syncAction'], ['token'], ['POST' => 0], null, false, false, null]],
        195 => [[['_route' => 'php_translation_profiler_translation_sync_all', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::syncAllAction'], ['token'], ['POST' => 0], null, false, false, null]],
        217 => [[['_route' => 'php_translation_profiler_translation_create_assets', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::createAssetsAction'], ['token'], ['POST' => 0], null, false, false, null]],
        243 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        289 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        303 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        323 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        336 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        346 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        397 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        428 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        467 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        501 => [
            [['_route' => 'api_cities_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_cities_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        539 => [
            [['_route' => 'api_cities_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_cities_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_cities_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        576 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        614 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        650 => [
            [['_route' => 'api_helps_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Help', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_helps_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Help', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        688 => [
            [['_route' => 'api_helps_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Help', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_helps_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Help', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_helps_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Help', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        725 => [
            [['_route' => 'api_admins_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_admins_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        763 => [
            [['_route' => 'api_admins_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_admins_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_admins_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_admins_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        818 => [
            [['_route' => 'translation_edit_in_place_update', '_controller' => 'Translation\\Bundle\\Controller\\EditInPlaceController::editAction'], ['configName', 'locale'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
