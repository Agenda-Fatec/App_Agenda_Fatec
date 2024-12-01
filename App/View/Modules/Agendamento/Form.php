<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Agendamento de Sala | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Global.js">  </script>
        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Agendamento.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= FILES ?>/View/Assets/CSS/Agendamento.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <div id="container">

            <main>

                <section id="scheduling">

                    <h1> Agendamento de Sala </h1>

                    <form action="<?= ROUTES ?>/agendamento/salvar" method="post">

                        <label for="fk_sala"> Sala selecionada: </label>
                        <select style="pointer-events: none;" name="fk_sala" id="fk_sala" required>

                            <?php foreach($model[0] as $sala): ?>

                                <option value="<?= $sala->id ?>" readonly<?= ($sala->id === (int) $_GET["fk_sala"]) ? " selected" : "" ?>> <?= $sala->nome ?> </option>

                            <?php endforeach ?>

                        </select>

                        <label for="data_utilizacao"> Escolha o dia desejado: </label>
                        <input type="date" name="data_utilizacao" id="data_utilizacao" required>

                        <p class="label"> Defina um horário de utilização: </p>
                        <div>

                            <input type="hidden" id="period" value="morning">

                            <input type="radio" name="period" value="morning" checked>
                            <p> Manhã </p>

                            <input type="radio" name="period" value="night">
                            <p> Noite </p>

                        </div>
                        <div>

                            <label for="hora_inicio_utilizacao"> Das: </label>
                            <select name="hora_inicio_utilizacao" id="hora_inicio_utilizacao" required>

                                <!-- Horários - Início -->

                            </select>

                            <label for="hora_fim_utilizacao"> Às: </label>
                            <select name="hora_fim_utilizacao" id="hora_fim_utilizacao" required>

                                <!-- Horários - Fim -->

                            </select>
                            
                        </div>

                        <label for="fk_aprovador"> Especifique o auxiliar de docente do seu curso: </label>
                        <select name="fk_aprovador" id="fk_aprovador" required>

                            <?php foreach($model[1] as $usuario): ?>

                                <?php if($model[2][$usuario->fk_cargo - 1]->nome === "Auxiliar de Docente"): ?>

                                    <option value="<?= $usuario->id ?>"> <?= $usuario->nome ?> </option>

                                <?php endif ?>

                            <?php endforeach ?>

                        </select>

                        <div id="buttons">

                            <a href="<?= ROUTES ?>/salas"> Cancelar </a>
                            <button type="reset"> Limpar </button>
                            <button type="submit"> Requisitar </button>

                        </div>

                    </form>

                </section>

            </main>

        </div>
        
    </body>

</html>