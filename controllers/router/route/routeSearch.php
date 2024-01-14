<?php
require_once("controllers/router/Route.php");
require_once("controllers/MainController.php");

class RouteSearch extends Route{
    private MainController $controller;

    public function __construct(MainController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displaySearch();
    }

    public function post($params = []) {
    }
}
?>