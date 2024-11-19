<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Salas da Fatec Jahu | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= ROOT ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Salas.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <?php include VIEWS . "../Components/Menu.php" ?>

        <div id="container">

            <?php include VIEWS . "../Components/Header.php" ?>

            <main>

                <section id="rooms">

                    <h1> Salas da Fatec Jahu </h1>

                    <?php foreach($model as $sala): ?>

                        <?php if((bool) $sala->ativo): ?>

                            <a class="room" href="<?= ROOT ?>/sala/descricao?id=<?= $sala->id ?>">

                                <h2 class="room-name"> <?= $sala->nome . " ($sala->numero)" ?> </h2>

                            </a>
                        
                        <?php endif ?>

                    <?php endforeach ?>

                </div>

            </main>

        </div>
        
    </body>

</html>