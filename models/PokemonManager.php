<?php
require_once('models/Model.php');
require_once('models/Pokemon.php');

class PokemonManager extends Model{
    public function getAll() : Array{
        $result = $this->execRequest('SELECT * FROM POKEMON');
        $res = $result->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getByID(int $idPokemon) : ?Pokemon{
        $resultline = $this->execRequest('SELECT * FROM POKEMON WHERE idPokemon=?', [$idPokemon]);
        $result = $resultline->fetch();

        // Vérifier si un résultat a été trouvé
        if ($result) {
            $pokemon = new Pokemon(
                $result['idPokemon'],
                $result['nomEspece'],
                $result['description'],
                $result['typeOne'],
                $result['typeTwo'],
                $result['urlImg']
            );
            return $pokemon;
        } else {
            // Retourner null si aucun résultat n'est trouvé
            return null;
        }
    }

    public function deletePokemon(int $idPokemon):int
    {
        $request = "DELETE FROM pokemon WHERE idPokemon = :id";
        $params = [':id' => $idPokemon];
        $resultat = $this->execRequest($request,$params);

        return $resultat->rowCount();
    }
}
?>