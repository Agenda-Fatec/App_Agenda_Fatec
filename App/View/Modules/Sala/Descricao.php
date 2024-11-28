<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Descrição de Sala | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= FILES ?>/View/Assets/CSS/Descricao.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <?php include VIEWS . "../Components/Menu.php" ?>

        <div id="container">

            <?php include VIEWS . "../Components/Header.php" ?>

            <main>

                <section id="description">

                    <h1> Descrição de Sala </h1>

                    <h2> Sala: </h1>

                    <p> <?= $model[0]->nome ?> (<?= $model[1]->nome ?>) </p>

                    <h2> Status Atual: </h2>

                    <span id="status"> <?= $model[0]->status_atual ?> </span>

                    <h2> Equipamentos: </h2>

                    <section  id="equipments">

                        <?php foreach($model[2] as $equipamento): ?>

                            <span class="equipment">

                                <p class="equipment-name"> <?= $equipamento->nome ?> | <?= $equipamento->quantidade ?> unidade(s) </p>

                            </span>

                        <?php endforeach ?>

                    </section>

                </div>

            </main>

        </div>
        
    </body>

    <script type="text/javascript">

        window.addEventListener("load", function() {

            const element = document.getElementById("status");

            switch(element.innerText)
            {

                case "INDISPONÍVEL":
                    element.style.backgroundColor = "#FF0000";
                break;

                case "EM USO":
                    element.style.backgroundColor = "#808080";
                break;

                default:
                    element.style.backgroundColor = "#008000";
                break;

            }

        });

    </script>

</html>