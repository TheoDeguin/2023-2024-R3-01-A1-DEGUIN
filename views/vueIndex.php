<h1>Pokédex de <?= $nomDresseur ?></h1>

<h2>All Pokémon:</h2>
<?php var_dump($allPokemon); ?>

<h2>Pokémon by Existing ID:</h2>
<?php var_dump($existingPokemon); ?>

<h2>Pokémon by Non-Existing ID:</h2>
<?php var_dump($nonExistingPokemon); ?>

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
            </tr>
        ");
    }
    ?>
</table>