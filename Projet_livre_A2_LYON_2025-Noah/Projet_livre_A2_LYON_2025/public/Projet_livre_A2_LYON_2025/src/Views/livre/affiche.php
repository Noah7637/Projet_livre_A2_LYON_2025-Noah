<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>livres</title>
    <link rel="stylesheet" href="/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
<section>
<div class="container">
<div class='card'>
        <div id="titre_auteur">
        <h2><?= $solo[0]->getTitle()?></h2> 
        <p>par <?= $solo[0]->getAuthor() ?></p>
        </div>
        <p><?= $solo[0]->getDescription() ?></p>
        <p>Sorti le : <?= $solo[0]->getDate() ?></p>
        <div id="afficher_icone">
        <a href="/modify/<?= $solo[0]->getId()?>"><i class="ri-pencil-fill"></i></a>
        <a href="/delete/<?= $solo[0]->getId()?>"><i class="ri-delete-bin-fill"></i></a>
        </div>
</div>
</div>
</section>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';