<!DOCTYPE html>
<html lang="fr">
<?php include './get_jeux.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e7d24cb735.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Actuatlités Jeux Videos</title>
</head>

<body class="img1">
<main>
    <img src="./images/logo.png" class="img2" alt="">
    <nav class="nav">
        <ul class="consoles">
            <li class="btn btn-primary"><a href="./index.php">Tous les jeux</a></li>
            <li class="btn btn-primary"><a href="#"><i class="fa-solid fa-caret-down" style="color: #fafafa;"></i> Par console</a>
                <ul class="submenu bg-primary">
                    <?php foreach ($console_labels as $consoleId => $console) { ?>
                        <li class="liste-consoles">
                            <a href="./by_console.php?console=<?php echo $consoleId; ?>">
                                <?php echo $console['label']; ?> (<?php echo $console['count_jeux']; ?>)
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
    <hr>