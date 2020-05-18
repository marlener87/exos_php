<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 4</title>
</head>
<body>
    <h1>Insérer un élément dans un tableau</h1>

    <?php
    // La fonction array permet de créer un tableau
    $prenoms = array ('François', 'Nicole', 'Véronique', 'Michel', 'Benoît');
    array_push($prenoms, "Leeloo");
    foreach($prenoms as $element)
    {
        echo $element . '<br />';
    }
    ?>
</body>
</html>
