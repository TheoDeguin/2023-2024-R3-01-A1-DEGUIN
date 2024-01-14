<?php
require_once("controllers/Router/Route.php");
require_once("controllers/PokemonController.php");

class RouteEditPokemon extends Route {
    private $controller;

    public function __construct($controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get(array $params=[]){
        $idPokemon = $params['idPokemon'];
        $this->controller->displayEditPokemon($idPokemon); 
    }

    public function post(array $params = []): void
    {
        $pokemon = [
        "nomEspece" => parent::getParam($params, "nomEspece", false),
        "description" => parent::getParam($params, "description", false),
        "typeOne" => parent::getParam($params, "typeOne", false),
        "typeTwo" => parent::getParam($params, "typeTwo", true), 
        "urlImg" => parent::getParam($params, "urlImg", false),
        ];
    }
}
?>