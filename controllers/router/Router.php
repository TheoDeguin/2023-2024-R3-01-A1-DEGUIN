<?php
class Router {
    private $routeList;
    private $ctrlList;
    private $action_key;

    public function __construct($name_of_action_key = "action") {
        $this->action_key = $name_of_action_key;
        $this->routeList = array();
        $this->ctrlList = array();
    }

    public function createRouteList() {
        $this->routeList = [
            "index" => new RouteIndex($this->ctrlList["main"]),
            "add-pokemon" => new RouteAddPokemon($this->ctrlList["pokemon"]),
            "add-pokemon-type" => new RouteAddType($this->ctrlList["pokemon"]),
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
        $action = $get[$this->action_key] ?? $post[$this->action_key] ?? "index";
        try {
            if(!isset($this->routeList[$action])) throw new \Exception("Action inconnue");
            if ($post === []) {
                $this->routeList[$action]->action($get);
            }
            else {
                $this->routeList[$action]->action($post, 'POST');
            }
        }
        catch (\Exception $e)
        {
            http_response_code(404);
            $get["error"] = $e->getMessage();
            $this->routeList["exception"]->action($get);
        }
    }
}
?>