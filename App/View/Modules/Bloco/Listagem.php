<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Listagem de Blocos | Agenda Fatec </title>

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

                    <h1> Listagem de Blocos </h1>

                    <a id="new-register" href="<?= ROUTES ?>/bloco">  Adicionar </a>

                    <table>
                        
                        <thead>

                            <tr>

                                <th> Nome </th>

                                <th> Edição </th>

                                <th> Ativação </th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach($model as $bloco): ?>

                                <tr>

                                    <td> <?= $bloco->nome ?> </td>

                                    <td> <a href="<?= ROUTES ?>/bloco?id=<?= $bloco->id ?>"> Editar </a> </td>

                                    <td> <a href="<?= ROUTES ?>/bloco/alternar_ativacao?id=<?= $bloco->id ?>&ativo=<?= $bloco->ativo ?>"> <?= ((bool) $bloco->ativo) ? "Desativar" : "Ativar" ?> </a> </td>

                                </tr>

                            <?php endforeach ?>

                        </tbody>
                    
                    </table>

                </section>

            </main>

        </div>
        
    </body>

</html>