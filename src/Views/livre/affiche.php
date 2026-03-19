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

<div class='livre'>
        <p><?= $solo[0]->getTitle()?></p>  
        <p><?= $solo[0]->getDescription() ?></p>
        <p>Sorti le : <?= $solo[0]->getDate() ?></p>
        <a href="/modify/<?= $solo[0]->getId()?>"><i class="ri-pencil-fill"></i></a><br>
        <a href="/delete/<?= $solo[0]->getId()?>"><i class="ri-delete-bin-fill"></i></a>
        
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';