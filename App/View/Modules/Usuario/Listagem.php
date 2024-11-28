<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Listagem de Usuários | Agenda Fatec </title>

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

                    <h1> Listagem de Usuários </h1>

                    <table>
                        
                        <thead>

                            <tr>

                                <th> Nome </th>

                                <th> E-mail </th>

                                <th> Cargo </th>

                                <th> Ativação </th>

                                <th> Administração </th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach($model[0] as $usuario): ?>

                                <?php if($usuario->id !== $_SESSION["usuario"]["id"]): ?>

                                    <tr>

                                        <td> <?= $usuario->nome ?> </td>

                                        <td> <?= $usuario->email ?> </td>

                                        <td> <?= $model[1][(int) $usuario->fk_cargo - 1]->nome ?> </td>

                                        <td> <a href="<?= ROOT ?>/usuario/alternar_ativacao?id=<?= $usuario->id ?>&ativo=<?= $usuario->ativo ?>"> <?= ((bool) $usuario->ativo) ? "Desativar" : "Ativar" ?> </a> </td>

                                        <td> <a href="<?= ROOT ?>/usuario/reclassificar?id=<?= $usuario->id ?>&administrador=<?= $usuario->administrador ?>"> <?= (!((bool) $usuario->administrador)) ? "Promover" : "Rebaixar" ?> </a> </td>

                                    </tr>

                                <?php endif ?>

                            <?php endforeach ?>

                        </tbody>
                    
                    </table>

                </section>

            </main>

        </div>
        
    </body>

</html>