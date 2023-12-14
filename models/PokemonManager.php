<?php
require_once('models/Model.php');
require_once('models/Pokemon.php');

class PokemonManager extends Model{
    public function getAll() : Array{
        $result = $this->execRequest('SELECT * FROM POKEMON');
        $pokemon_array=array();
        foreach($result->fetchAll() as $pokemon){
            $pokemon_object = new Pokemon();
            $pokemon_array[] = $pokemon_object;
        }
        return $pokemon_array;
    }

    public function getByID(int $idPokemon) : ?Pokemon{
        $resultline = $this->execRequest('SELECT * FROM POKEMON WHERE idPokemon=?', [$idPokemon]);
        $result = $resultline->fetch();

        $pokemon = new Pokemon(
            $result['idPokemon'],
            $result['nomEspece'],
            $result['description'],
            $result['typeOne'],
            $result['typeTwo'],
            $result['urlImg']
        );
        return $pokemon;
    }
}
?>