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
  <body>

    <main>
    
      <h2>
        <span><i class="ri-git-repository-fill"></i></span>Créer un Livre
      </h2>
      <section class="card">
        <form action="/confirm/<?= $solo[0]->getId() ?>" method="post">
          <div>
            <label for="title"><i class="ri-heading"></i></label>
            <input name="NEWtitle" type="text" placeholder="<?= $solo[0]->getTitle() ?>" />
          </div>
          <div>
            <label for="author"><i class="ri-user-fill"></i></label>
            <input name="NEWauthor" type="text" placeholder="<?= $solo[0]->getAuthor() ?>" />
          </div>
          <div>
            <label for="description"><i class="ri-book-open-fill"></i></label>
            <textarea
              name="NEWdescription"
              type="text"
              placeholder="<?=$solo[0]->getDescription() ?>"></textarea>
          </div>
          <div>
            <label for="link"><i class="ri-earth-fill"></i></label>
            <textarea name="NEWslug" type="url" placeholder="<?=$solo[0]->getSlug()?>"></textarea>
          </div>

          <div>
            <label for="date"><i class="ri-time-line"></i>Sortie le</label>
            <input type="date" name="NEWdate" placeholder="<?= $solo[0]->getDate() ?>"/>
            <button class="submitButton" type="submit">Confirmer modifications</button>
          </div>
        </form>
      </section>
    </main>
  </body>
</html>


<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';