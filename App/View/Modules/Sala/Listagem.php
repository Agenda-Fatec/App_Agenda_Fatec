<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Listagem de Salas | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= FILES ?>/View/Assets/CSS/Listagem.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <?php include VIEWS . "../Components/Menu.php" ?>

        <div id="container">

            <?php include VIEWS . "../Components/Header.php" ?>

            <main>

                <section id="module-list">

                    <h1> Listagem de Salas </h1>

                    <table>
                        
                        <thead>

                            <tr>

                                <th> Nome </th>

                                <th> Número </th>

                                <th> Bloco </th>

                                <th> Edição </th>

                                <th> Ativação </th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach($model[0] as $sala): ?>

                                <tr>

                                    <td> <?= $sala->nome ?> </td>

                                    <td> <?= $sala->numero ?> </td>

                                    <td> <?= $model[1][(int) $sala->fk_bloco - 1]->nome ?> </td>

                                    <td> <a href="<?= ROUTES ?>/sala?id=<?= $sala->id ?>"> Editar </a> </td>

                                    <td> <a href="<?= ROUTES ?>/sala/alternar_ativacao?id=<?= $sala->id ?>&ativo=<?= $sala->ativo ?>"> <?= ((bool) $sala->ativo) ? "Desativar" : "Ativar" ?> </a> </td>

                                </tr>

                            <?php endforeach ?>

                        </tbody>
                    
                    </table>

                </section>

            </main>

        </div>
        
    </body>

</html>