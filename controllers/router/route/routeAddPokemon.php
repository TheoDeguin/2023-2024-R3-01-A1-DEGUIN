<?php
require_once("controllers/Router/Route.php");
require_once("controllers/PokemonController.php");

class RouteAddPokemon extends Route {
    private PokemonController $controller;

    public function __construct(PokemonController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displayAddPokemon();
    }

    public function post($params = []) {
    }
}
?>