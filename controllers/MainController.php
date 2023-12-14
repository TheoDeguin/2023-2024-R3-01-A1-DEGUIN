<?php
require_once('views/View.php');
require_once('models/PokemonManager.php');

class MainController{
    public function Index() : void {
        $poke = new PokemonManager();
        $pokemon = $poke->getbyid(1);
        var_dump($pokemon);
        $indexView = new View('Index');
        $indexView->generer(
            ['nomDresseur' => "Red",]
        );
    }
}
?>