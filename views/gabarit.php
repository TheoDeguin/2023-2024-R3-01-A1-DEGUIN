<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="public\css\main1.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>
</head>

<body>
<header>
    <!-- Menu -->
    <nav>
        <a href="index.php">Index</a>
        <a href="index.php?action=add-pokemon">Add Pokemon</a>
        <a href="index.php?action=add-type-pokemon">Add Type</a>
        <a href="index.php?action=search">Search</a>
    </nav>
</header>
<!-- #contenu -->
<main id="contenu">
    <?= $contenu ?>
</main>
<footer>

</footer>
</body>

</html>