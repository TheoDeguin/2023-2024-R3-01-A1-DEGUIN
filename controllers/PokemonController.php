<?php
require_once('controllers/MainController.php');
require_once('views/View.php');
require_once('models/PokemonManager.php');

class PokemonController extends MainController{
    public function displayAddPokemon(?string $message = null) : void{
        $addPokemonView = new View('AddPokemon');
        $addPokemonView->generer(["message" => $message]);
    }

    public function displayAddType(?string $message = null) : void{
        $addTypeView = new View('AddType');
        $addTypeView->generer(["message" => $message]);
    }
}
?>