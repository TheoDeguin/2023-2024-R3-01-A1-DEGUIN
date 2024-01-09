<?php
class RouteIndex extends Route {
    private MainController $controller;

    public function __construct(MainController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->Index();
    }

    public function post($params = []) {
        return $this->controller->Index();
    }
}
?>