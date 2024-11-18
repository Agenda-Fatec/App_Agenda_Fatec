<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Listagem de Cargos | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= ROOT ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Listagem.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <?php include VIEWS . "../Components/Menu.php" ?>

        <div id="container">

            <?php include VIEWS . "../Components/Header.php" ?>

            <main>

                <section id="module-list">

                    <h1> Listagem de Cargos </h1>

                    <table>
                        
                        <thead>

                            <tr>

                                <th> Nome </th>

                                <th> Edição </th>

                                <th> Ativação </th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach($model as $cargo): ?>

                                <tr>

                                    <td> <?= $cargo->nome ?> </td>

                                    <td> <a href="/cargo?id=<?= $cargo->id ?>"> Editar </a> </td>

                                    <td> <a href="/cargo/alternar_ativacao?id=<?= $cargo->id ?>&ativo=<?= $cargo->ativo ?>"> <?= ((bool) $cargo->ativo) ? "Desativar" : "Ativar" ?> </a> </td>

                                </tr>

                            <?php endforeach ?>

                        </tbody>
                    
                    </table>

                </section>

            </main>

        </div>
        
    </body>

</html>