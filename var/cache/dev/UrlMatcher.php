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
        '/equipe' => [[['_route' => 'app_equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipe/new' => [[['_route' => 'app_equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gescitoyen' => [[['_route' => 'app_gestio_citoyen_index', '_controller' => 'App\\Controller\\GestioCitoyenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gescitoyen/new' => [[['_route' => 'app_gestio_citoyen_new', '_controller' => 'App\\Controller\\GestioCitoyenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gesadmin' => [[['_route' => 'app_gestion_admin_index', '_controller' => 'App\\Controller\\GestionAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gesadmin/new' => [[['_route' => 'app_gestion_admin_new', '_controller' => 'App\\Controller\\GestionAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gesemployee' => [[['_route' => 'app_gestion_employee_index', '_controller' => 'App\\Controller\\GestionEmployeeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gesemployee/new' => [[['_route' => 'app_gestion_employee_new', '_controller' => 'App\\Controller\\GestionEmployeeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gesresponsable' => [[['_route' => 'app_gestion_responsable_index', '_controller' => 'App\\Controller\\GestionResponsableController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gesresponsable/new' => [[['_route' => 'app_gestion_responsable_new', '_controller' => 'App\\Controller\\GestionResponsableController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/loginemployee' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginEmployeeController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/responsable' => [[['_route' => 'app_responsable_index', '_controller' => 'App\\Controller\\ResponsableController::index'], null, ['GET' => 0], null, true, false, null]],
        '/responsable/new' => [[['_route' => 'app_responsable_new', '_controller' => 'App\\Controller\\ResponsableController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login_', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/e(?'
                    .'|mployee/([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                    .'|quipe/([^/]++)(?'
                        .'|(*:290)'
                        .'|/edit(*:303)'
                        .'|(*:311)'
                    .')'
                .')'
                .'|/ges(?'
                    .'|citoyen/([^/]++)(?'
                        .'|(*:347)'
                        .'|/(?'
                            .'|accept(*:365)'
                            .'|refuser(*:380)'
                            .'|edit(*:392)'
                        .')'
                        .'|(*:401)'
                    .')'
                    .'|admin/([^/]++)(?'
                        .'|(*:427)'
                        .'|/edit(*:440)'
                        .'|(*:448)'
                    .')'
                    .'|employee/([^/]++)(?'
                        .'|(*:477)'
                        .'|/edit(*:490)'
                        .'|(*:498)'
                    .')'
                    .'|responsable/([^/]++)(?'
                        .'|(*:530)'
                        .'|/edit(*:543)'
                        .'|(*:551)'
                    .')'
                .')'
                .'|/responsable/([^/]++)(?'
                    .'|(*:585)'
                    .'|/edit(*:598)'
                    .'|(*:606)'
                .')'
                .'|/service/([^/]++)(?'
                    .'|(*:635)'
                    .'|/edit(*:648)'
                    .'|(*:656)'
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
        243 => [[['_route' => 'app_employee_show', '_controller' => 'App\\Controller\\EmployeeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_employee_edit', '_controller' => 'App\\Controller\\EmployeeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'app_employee_delete', '_controller' => 'App\\Controller\\EmployeeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        290 => [[['_route' => 'app_equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['idEquipe'], ['GET' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['idEquipe'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        311 => [[['_route' => 'app_equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['idEquipe'], ['POST' => 0], null, false, true, null]],
        347 => [[['_route' => 'app_gestio_citoyen_show', '_controller' => 'App\\Controller\\GestioCitoyenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        365 => [[['_route' => 'app_gestion_citoyen_accepter', '_controller' => 'App\\Controller\\GestioCitoyenController::accepter'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        380 => [[['_route' => 'app_gestion_citoyen_refuser', '_controller' => 'App\\Controller\\GestioCitoyenController::refuser'], ['id'], ['GET' => 0], null, false, false, null]],
        392 => [[['_route' => 'app_gestio_citoyen_edit', '_controller' => 'App\\Controller\\GestioCitoyenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        401 => [[['_route' => 'app_gestio_citoyen_delete', '_controller' => 'App\\Controller\\GestioCitoyenController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        427 => [[['_route' => 'app_gestion_admin_show', '_controller' => 'App\\Controller\\GestionAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        440 => [[['_route' => 'app_gestion_admin_edit', '_controller' => 'App\\Controller\\GestionAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        448 => [[['_route' => 'app_gestion_admin_delete', '_controller' => 'App\\Controller\\GestionAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        477 => [[['_route' => 'app_gestion_employee_show', '_controller' => 'App\\Controller\\GestionEmployeeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        490 => [[['_route' => 'app_gestion_employee_edit', '_controller' => 'App\\Controller\\GestionEmployeeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        498 => [[['_route' => 'app_gestion_employee_delete', '_controller' => 'App\\Controller\\GestionEmployeeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        530 => [[['_route' => 'app_gestion_responsable_show', '_controller' => 'App\\Controller\\GestionResponsableController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        543 => [[['_route' => 'app_gestion_responsable_edit', '_controller' => 'App\\Controller\\GestionResponsableController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'app_gestion_responsable_delete', '_controller' => 'App\\Controller\\GestionResponsableController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        585 => [[['_route' => 'app_responsable_show', '_controller' => 'App\\Controller\\ResponsableController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        598 => [[['_route' => 'app_responsable_edit', '_controller' => 'App\\Controller\\ResponsableController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        606 => [[['_route' => 'app_responsable_delete', '_controller' => 'App\\Controller\\ResponsableController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        635 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        648 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        656 => [
            [['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
