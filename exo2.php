<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trier tableau</title>
</head>
<body>
    <h1>Supprimer le 4ème élément d'un tableau</h1>

    <?php
    // La fonction array permet de créer un tableau
    $prenoms = array ('François', 'Nicole', 'Véronique', 'Michel', 'Benoît');
    print_r($prenoms);
    unset($prenoms[3]);

    print_r($prenoms);
    ?>
</body>
</html>
