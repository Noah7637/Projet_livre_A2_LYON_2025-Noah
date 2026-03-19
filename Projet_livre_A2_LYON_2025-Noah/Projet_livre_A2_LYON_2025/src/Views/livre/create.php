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
        <form action="/insert" method="post">
          <div>
            <label for="title"><i class="ri-heading"></i></label>
            <input name="title" type="text" placeholder="Votre titre" />
          </div>
          <div>
            <label for="author"><i class="ri-user-fill"></i></label>
            <input name="author" type="text" placeholder="Votre auteur" />
          </div>
          <div>
            <label for="description"><i class="ri-book-open-fill"></i></label>
            <textarea
              name="description"
              type="text"
              placeholder="Votre description">
           </textarea>
          </div>
          <div>
            <label for="link"><i class="ri-earth-fill"></i></label>
            <input name="slug" type="url" placeholder="Votre Url" />
          </div>

          <div>
            <label for="date"><i class="ri-time-line"></i>Sortie le</label>
            <input type="date" name="date" />
            <button class="submitButton" type="submit">Créer</button>
          </div>
        </form>
      </section>
    </main>
  </body>
</html>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
