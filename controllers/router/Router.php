<?php
require_once('controllers/router/Route.php');
require_once('controllers/router/route/routeIndex.php');
require_once('controllers/router/route/routeAddPokemon.php');
require_once('controllers/router/route/routeAddType.php');
require_once('controllers/router/route/routeSearch.php');
require_once('controllers/router/route/routeDelPokemon.php');
require_once('controllers/router/route/routeEditPokemon.php');
require_once('controllers/MainController.php');
require_once('controllers/PokemonController.php');

class Router {
    private array $routeList; 
    private array $ctrlList;
    private string $action_key;

    public function __construct($name_of_action_key = "action") {
        $this->action_key = $name_of_action_key;
        $this->createControllerList();
        $this->createRouteList();
    }

    public function createRouteList() {
        $this->routeList = [
            "index" => new RouteIndex($this->ctrlList["main"]),
            "add-pokemon" => new RouteAddPokemon($this->ctrlList["pokemon"]),
            "add-type-pokemon" => new RouteAddType($this->ctrlList["pokemon"]),
            "search" => new RouteSearch($this->ctrlList["main"]),
            "del-pokemon" => new RouteDelPokemon($this->ctrlList["pokemon"]),
            "edit-pokemon" => new RouteEditPokemon($this->ctrlList["pokemon"]),
        ];
    }
    
    public function createControllerList() {
        $this->ctrlList = [
            "main" => new MainController(),
            "pokemon" => new PokemonController()
        ];
    }

    public function routing($get, $post) {
        if (isset($get["action"])) {
            $this->routeList[$get["action"]]->action();
        }
        else if (isset($post["action"])) {
            $this->routeList[$post["action"]]->action();
        }
        else {
            $this->routeList["index"]->action();
        }
    }
}
?>