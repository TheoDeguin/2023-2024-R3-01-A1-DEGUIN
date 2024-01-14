<h1><?= isset($editPokemon) ? "Édition d'un Pokemon" : "Ajout d'un Pokemon" ?></h1>
<div>
    <form action="index.php?action=<?= isset($editPokemon) ? 'edit-pokemon' : 'add-pokemon' ?>" method="post">

        <label for="nomEspece">Nom du Pokemon :</label>
        <input type="text" name="nomEspece" id="nomEspece" required value="<?= isset($editPokemon) ? htmlspecialchars($editPokemon->getNomEspece()) : '' ?>">

        <label for="description">Description :</label>
        <textarea name="description" id="description" rows="4" required><?= isset($editPokemon) ? htmlspecialchars($editPokemon->getDescription()) : '' ?></textarea>

        <label for="typeOne">Type n°1 :</label>
        <input type="text" name="typeOne" id="typeOne" required value="<?= isset($editPokemon) ? htmlspecialchars($editPokemon->getTypeOne()) : '' ?>">

        <label for="typeTwo">Type n°2 :</label>
        <input type="text" name="typeTwo" id="typeTwo" required value="<?= isset($editPokemon) ? htmlspecialchars($editPokemon->getTypeTwo()) : '' ?>">

        <label for="urlImg">URL de l'image :</label>
        <input type="text" name="urlImg" id="urlImg" required value="<?= isset($pokemonEdit) ? htmlspecialchars($pokemonEdit->getUrlImg()) : '' ?>">

        <button type="submit"><?= isset($pokemonEdit) ? 'Éditer le Pokemon' : 'Ajouter le Pokemon' ?></button>
    </form>
</div>