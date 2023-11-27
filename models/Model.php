<?php
abstract class Model{
    private PDO $db;

    protected function execRequest(string $sql, array $params = null) : PDOStatement|false{
        $connexion = $this->getDB();
        $statement = $connexion->prepare($sql);
        if($params!=null) $statement->execute($params);
        else $statement->execute();
        return $statement;
    }

    public function getDB() : PDO{
        if($this->db === null){
            $this->db = new PDO('mysql:host=localhost;dbname=pokedex;charset=utf8', 'root', '');
        }
        return $this->db;
    }
}
?>