<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'listar_contactos' => [[], ['_controller' => 'App\\Controller\\ContactoController::listar'], [], [['text', '/contacto/listar']], [], [], []],
    'insertar_con_provincia_contacto' => [[], ['_controller' => 'App\\Controller\\ContactoController::insertarConProvincia'], [], [['text', '/contacto/insertar/ConProvincia']], [], [], []],
    'insertar_sin_provincia_contacto' => [[], ['_controller' => 'App\\Controller\\ContactoController::insertarSinProvincia'], [], [['text', '/contacto/insertar/SinProvincia']], [], [], []],
    'ficha_contacto' => [['codigo'], ['_controller' => 'App\\Controller\\ContactoController::ficha'], [], [['variable', '/', '[^/]++', 'codigo', true], ['text', '/contacto']], [], [], []],
    'buscar_contacto' => [['texto'], ['_controller' => 'App\\Controller\\ContactoController::buscar'], [], [['variable', '/', '[^/]++', 'texto', true], ['text', '/contacto/buscar']], [], [], []],
    'modificar_contacto' => [['id', 'nombre'], ['_controller' => 'App\\Controller\\ContactoController::update'], [], [['variable', '/', '[^/]++', 'nombre', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/contacto/update']], [], [], []],
    'eliminar_contacto' => [['id'], ['_controller' => 'App\\Controller\\ContactoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contacto/delete']], [], [], []],
    'nuevo_contacto' => [[], ['_controller' => 'App\\Controller\\ContactoController::nuevo'], [], [['text', '/contacto/crear/nuevo']], [], [], []],
    'editar_contacto' => [['codigo'], ['_controller' => 'App\\Controller\\ContactoController::editar'], [], [['variable', '/', '[^/]++', 'codigo', true], ['text', '/contacto/modificar']], [], [], []],
    'app_page' => [[], ['_controller' => 'App\\Controller\\PageController::index'], [], [['text', '/page']], [], [], []],
    'app_inicio' => [[], ['_controller' => 'App\\Controller\\PageController::inicio'], [], [['text', '/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'index' => [[], ['_controller' => 'listar'], [], [['text', '/contacto/listar']], [], [], []],
];
