<?php // index.php

require_once __DIR__ . '/model.php';
require_once __DIR__ . '/controllers.php';

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ('/index.php' === $uri) {
    list_action();
} elseif ('/index.php/show' === $uri && isset($_GET['id'])) {
    show_action($_GET['id']);
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}

// based on https://symfony.com/doc/current/introduction/from_flat_php_to_symfony.html
