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
        '/citoyen' => [[['_route' => 'app_citoyen_index', '_controller' => 'App\\Controller\\CitoyenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/citoyen/new' => [[['_route' => 'app_citoyen_new', '_controller' => 'App\\Controller\\CitoyenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employee' => [[['_route' => 'app_employee_index', '_controller' => 'App\\Controller\\EmployeeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/new' => [[['_route' => 'app_employee_new', '_controller' => 'App\\Controller\\EmployeeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/responsable' => [[['_route' => 'app_responsable_index', '_controller' => 'App\\Controller\\ResponsableController::index'], null, ['GET' => 0], null, true, false, null]],
        '/responsable/new' => [[['_route' => 'app_responsable_new', '_controller' => 'App\\Controller\\ResponsableController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/citoyen/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/employee/([^/]++)(?'
                    .'|(*:240)'
                    .'|/edit(*:253)'
                    .'|(*:261)'
                .')'
                .'|/responsable/([^/]++)(?'
                    .'|(*:294)'
                    .'|/edit(*:307)'
                    .'|(*:315)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'app_citoyen_show', '_controller' => 'App\\Controller\\CitoyenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'app_citoyen_edit', '_controller' => 'App\\Controller\\CitoyenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'app_citoyen_delete', '_controller' => 'App\\Controller\\CitoyenController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_employee_show', '_controller' => 'App\\Controller\\EmployeeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'app_employee_edit', '_controller' => 'App\\Controller\\EmployeeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        261 => [[['_route' => 'app_employee_delete', '_controller' => 'App\\Controller\\EmployeeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'app_responsable_show', '_controller' => 'App\\Controller\\ResponsableController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'app_responsable_edit', '_controller' => 'App\\Controller\\ResponsableController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        315 => [
            [['_route' => 'app_responsable_delete', '_controller' => 'App\\Controller\\ResponsableController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
