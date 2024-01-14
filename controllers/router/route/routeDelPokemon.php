<?php
require_once("controllers/Router/Route.php");
require_once("controllers/PokemonController.php");

class RouteDelPokemon extends Route {
    private PokemonController $controller;

    public function __construct(PokemonController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        $idPokemon = $params['idPokemon'];
        $this->controller->deletePokemon($idPokemon);
    }

    public function post($params = []) {
    }
}
?>