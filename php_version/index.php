<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Dischi php</title>
</head>
<body>

<?php
    include __DIR__ . '/database_logic.php';
    // var_dump($database);
?>

<header>
    <form action="./index.php" method="get">
        <input type="text" name="filter" value="<?= $filter ?>">
        <input type="submit" value="cerca">
    </form>
</header>

<main>
    <div class="albums-container">
        <?php
        foreach ($database as $album){
            include __DIR__ . '/albumCard.php';
        }
        ?>


    </div>
</main>


</body>
</html>