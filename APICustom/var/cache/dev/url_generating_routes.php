<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'api_post_total' => [[], ['_controller' => 'App\\Controller\\ScoresController::total'], [], [['text', '/api/Scores']], [], []],
    'api_post' => [[], ['_controller' => 'App\\Controller\\ScoresController::index'], [], [['text', '/api/Classement']], [], []],
    'api_post_scores' => [[], ['_controller' => 'App\\Controller\\ScoresController::Newscore'], [], [['text', '/api/add_Scores']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];