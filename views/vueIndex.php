<h1>Pokédex de <?= $nomDresseur ?></h1>
<table>
    <tr>
        <td>ID</td>
        <td>Pokémon</td>
        <td>Description</td>
        <td>Types</td>
        <td>Image</td>
    </tr>
    <?php
    foreach($allPokemon as $pokemon){
        echo("
            <tr>
                <td>$pokemon[idPokemon]</td>
                <td>$pokemon[nomEspece]</td>
                <td>$pokemon[description]</td>
                <td>$pokemon[typeOne] $pokemon[typeTwo]</td>
                <td><img src=$pokemon[urlImg] alt=$pokemon[nomEspece]></td>
                <td>
                    <button type=\"button\" href=\"index.php?action=edit-pokemon&idPokemon=$pokemon[idPokemon]\">Modifier</button>
                    <button type=\"button\" href=\"index.php?action=del-pokemon&idPokemon=$pokemon[idPokemon]\">Supprimer</button>
                </td>
            </tr>
        ");
    }
    ?>
</table>