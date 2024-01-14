<?php
require_once('views/View.php');
require_once('models/PokemonManager.php');

class MainController{
    public function Index() : void {
        $pokeManager = new PokemonManager();
        $allPokemon = $pokeManager->getAll();
        $existingPokemon = $pokeManager->getByID(1);
        $nonExistingPokemon = $pokeManager->getByID(999);

        $indexView = new View('Index');
        $indexView->generer([
            'allPokemon' => $allPokemon,
            'existingPokemon' => $existingPokemon,
            'nonExistingPokemon' => $nonExistingPokemon,
            'nomDresseur' => "Red",
        ]);
    }

    public function displaySearch() : void{
        $searchView = new View('Search');
        $searchView->generer([]);
    }
}
?>