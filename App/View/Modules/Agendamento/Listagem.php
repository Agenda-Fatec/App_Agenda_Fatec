<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Listagem de Agendamentos | Agenda Fatec </title>

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

                    <h1> Listagem de Agendamentos </h1>

                    <table>
                        
                        <thead>

                            <tr>

                                <th> Requisitor </th>

                                <th> Sala Pedida </th>

                                <th> Dia Especificado </th>

                                <th> Hora Inicial </th>

                                <th> Hora Final </th>

                                <th colspan="2"> Situação </th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach($model[0] as $agendamento): ?>

                                <?php if((int) $_SESSION["usuario"]["id"] === $agendamento->fk_aprovador): ?>

                                    <tr>

                                        <td> <?= $model[1][$agendamento->fk_requisitor - 1]->nome ?> </td>

                                        <td> <?= $model[2][$agendamento->fk_sala - 1]->nome ?> </td>

                                        <td> <?= $agendamento->data_utilizacao ?> </td>

                                        <td> <?= $agendamento->hora_inicio_utilizacao ?> </td>

                                        <td> <?= $agendamento->hora_fim_utilizacao ?> </td>

                                        <?php if($agendamento->situacao === "Pendente"): ?>

                                            <td> <a href="<?= ROUTES ?>/agendamento/confirmar?id=<?= $agendamento->id ?>&situacao=Aprovado"> Aprovar </a> </td>

                                            <td> <a href="<?= ROUTES ?>/agendamento/confirmar?id=<?= $agendamento->id ?>&situacao=Negado"> Negar </a> </td>

                                        <?php else: ?>

                                            <td colspan="2"> <?= $agendamento->situacao ?> </td>

                                        <?php endif ?>

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