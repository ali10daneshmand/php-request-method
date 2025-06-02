<?php
namespace App;

class Route {
    private array $routes = [];

    public function addRoute(string $method = "GET", string $path = "/", callable|null $handle = null): void
    {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => rtrim($path, '/'),
            'handle' => $handle
        ];
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                if (is_callable($route['handle'])) {
                    call_user_func($route['handle']);
                } else {
                    http_response_code(404);
                    echo "404 Not Found";
                }
                return;
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
}
?>
