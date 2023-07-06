<?php

/*include './config.php';
global $connection;

// Requête pour récupérer les consoles
$console_type = $connection->query('SELECT id, label FROM console');
$console_labels = [];
while ($console = mysqli_fetch_assoc($console_type)) {
    $console_labels[$console['id']] = $console['label'];
}

$consoleId = isset($_GET['console']) ? $_GET['console'] : null;

// Requête pour récupérer les jeux en fonction de la console sélectionnée
if ($consoleId !== null) {
    $query = "SELECT jeu.id, jeu.titre, jeu.description, jeu.prix, jeu.image_path, console.label
    FROM jeu
    INNER JOIN game_console ON jeu.id = game_console.jeu_id
    INNER JOIN console ON game_console.console_id = console.id
    WHERE console.id = $consoleId";

    $res = mysqli_query($connection, $query);
} else {
    // Requête pour récupérer tous les jeux
    $res = $connection->query('SELECT * FROM jeu');
}*/


include './config.php';
global $connection;

// Requête pour récupérer les consoles avec le nombre de jeux associés
$query = "SELECT console.id, console.label, COUNT(jeu.id) AS count_jeux
          FROM console
          LEFT JOIN game_console ON console.id = game_console.console_id
          LEFT JOIN jeu ON game_console.jeu_id = jeu.id
          GROUP BY console.id";

$console_type = $connection->query($query);

$console_labels = [];
while ($console = mysqli_fetch_assoc($console_type)) {
    $console_labels[$console['id']] = [
        'label' => $console['label'],
        'count_jeux' => $console['count_jeux']
    ];
}

$consoleId = isset($_GET['console']) ? $_GET['console'] : null;

// Requête pour récupérer les jeux en fonction de la console sélectionnée
if ($consoleId !== null) {
    $query = "SELECT jeu.id, jeu.titre, jeu.description, jeu.prix, jeu.image_path, console.label
    FROM jeu
    INNER JOIN game_console ON jeu.id = game_console.jeu_id
    INNER JOIN console ON game_console.console_id = console.id
    WHERE console.id = $consoleId";

    $res = mysqli_query($connection, $query);
} else {
    // Requête pour récupérer tous les jeux
    $res = $connection->query('SELECT * FROM jeu');
}



