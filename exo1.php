<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trier tableau</title>
</head>
<body>
    <h1>Trier un tableau avec foreach</h1>

    <?php
    // La fonction array permet de créer un tableau
    $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
    foreach($prenoms as $element)
    {
        echo $element . '<br />';
    }
    ?>
</body>
</html>
