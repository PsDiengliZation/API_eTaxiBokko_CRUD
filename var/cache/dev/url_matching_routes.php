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
        '/chauffeur' => [[['_route' => 'chauffeur_index', '_controller' => 'App\\Controller\\ChauffeurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chauffeur/new' => [[['_route' => 'chauffeur_new', '_controller' => 'App\\Controller\\ChauffeurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule' => [[['_route' => 'vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/new' => [[['_route' => 'vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/chauffeur/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:241)'
                    .'|/edit(*:254)'
                    .'|(*:262)'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:306)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:337)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:373)'
                        .'|vehicules(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:411)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:449)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        190 => [[['_route' => 'chauffeur_show', '_controller' => 'App\\Controller\\ChauffeurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'chauffeur_edit', '_controller' => 'App\\Controller\\ChauffeurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'chauffeur_delete', '_controller' => 'App\\Controller\\ChauffeurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        306 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        337 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        373 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        411 => [
            [['_route' => 'api_vehicules_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vehicule', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_vehicules_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vehicule', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        449 => [
            [['_route' => 'api_vehicules_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vehicule', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_vehicules_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vehicule', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_vehicules_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vehicule', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_vehicules_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vehicule', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
