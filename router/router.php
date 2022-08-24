<?php


$routes = [];
route('/', function() {
    echo 'Home';
});

route('/login', function() {
    echo 'login';
});

function route(string $path, callable $callback) {
    global $routes;
    $routes[$path] = $callback;
}
run();
function run() {
    global $routes;
    $uri = $_SERVER['REQUEST_URI'];
    foreach ($routes as $path => $callback) {
        # code...
        if ($path !== $uri) continue;
            # code...
            $callback();
        
    }
}
?>
