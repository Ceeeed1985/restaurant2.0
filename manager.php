<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <title>Restaurant - Pass'-moi une frite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="styles/default.css" />
  </head>
<body>
    <header class="container-fluid bg-dark bg-opacity-90 py-4 mb-5">
        <section class="container bg-dark text-warning text-center">
            <h1>TASK Manager</h1>
        </section>
    </header>
    <section class="container-fluid">
        <section class="container border border-2 border-secondary rounded">
            <section class="row d-flex justify-content-around my-4">
            <section class="menu col-md-4">
                <a class="btn btn-dark btn-lg border-2 m-2 w-75" href="#" role="button" id="monTaskManager">Mon Task Manager</a>
                <a class="btn btn-primary btn-lg border-2 m-2 w-75" href="#" role="button" id="dashboard">Dashboard</a>
                <a class="btn btn-danger btn-lg border-2 m-2 w-75" href="#" role="button" id="messagerie">Messagerie</a>
                <a class="btn btn-warning btn-lg border-2 m-2 w-75" href="#" role="button" id="guestbook">Livre d'or</a>
                <a class="btn btn-success btn-lg border-2 m-2 w-75" href="#" role="button" id="medias">Médias</a>
                <a class="btn btn-info btn-lg border-2 m-2 w-75" href="#" role="button" id="campagnes">Campagnes</a>
                <a class="btn btn-secondary btn-lg border-2 m-2 w-75" href="#" role="button" id="blog">Blog</a>
                <a class="btn btn-outline-secondary btn-lg border-2 m-2 w-75" href="#" role="button" id="menus">Menus</a>

            </section>
            <article class="container col-md-8" id="display">

            </article>
        </section>
        </section>
    </section>


    <script src="script/manager.js"></script>
</body>
</html>