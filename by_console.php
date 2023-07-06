<?php

require './config.php';
require './get_jeux.php';
require './header.php';

$consoleId = isset($_GET['console']) ? $_GET['console'] : null;
?>

<h1>Tous les jeux <?php echo $console_labels[$consoleId]['label']; ?></h1>
<div class="cartes">
    <?php while ($carte = mysqli_fetch_assoc($res)) :

        $prix = $carte['prix'] == 0 ? 'Gratuit' : $carte['prix'] / 100 . '€';
        ?>
        <div class="card" style="width: 290px;">
            <img src="images/games/<?php echo $carte['image_path']; ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $carte['titre'] ?></h5>
                <p class="card-text"><?php echo $prix ?></p>
                <a href="./detail.php?jeu=<?php echo $carte['id'] ?>" class="btn btn-primary">Voir détail</a>
            </div>
        </div>
    <?php endwhile; ?>

</div>

