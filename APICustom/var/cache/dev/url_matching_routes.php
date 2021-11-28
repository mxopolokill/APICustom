<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/Scores' => [[['_route' => 'api_post_total', '_controller' => 'App\\Controller\\ScoresController::total'], null, ['GET' => 0], null, false, false, null]],
        '/api/Classement' => [[['_route' => 'api_post', '_controller' => 'App\\Controller\\ScoresController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/add_Scores' => [[['_route' => 'api_post_scores', '_controller' => 'App\\Controller\\ScoresController::Newscore'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
