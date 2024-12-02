<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Cadastro | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= FILES ?>/View/Assets/CSS/Acesso.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <div id="container">

            <main>

                <div id="form">

                    <form action="<?= ROUTES ?>/cadastro/salvar" method="post">

                        <figure> <img src="<?= FILES ?>/View/Assets/Images/Storyset/Cadastro.svg" alt="Cadastro"> </figure>

                        <section id="data">

                            <label for="nome"> Digite seu nome completo: </label>
                            <input type="text" id="nome" name="nome" maxlength="255" autocomplete="off" required>

                            <label for="email"> Digite seu e-mail institucional: </label>
                            <input type="email" id="email" name="email" maxlength="100" autocomplete="off" required>

                            <label for="fk_cargo"> Defina sua relação com a instituição de ensino: </label>
                            <select id="fk_cargo" name="fk_cargo" required>

                                <?php foreach($model as $cargo): ?>

                                    <?php if((bool) $cargo->ativo): ?>

                                        <option value="<?= $cargo->id ?>"> <?= $cargo->nome ?> </option>

                                    <?php endif ?>

                                <?php endforeach ?>

                            </select>

                            <label for="senha"> Crie uma senha: </label>
                            <input type="password" id="senha" name="senha" minlength="4" maxlength="20" required>

                            <label for="confirmacao_senha"> Confirme sua senha: </label>
                            <input type="password" id="confirmacao_senha" name="confirmacao_senha" minlength="4" maxlength="20" required>

                            <div id="buttons">

                                <a href="<?= ROUTES ?>/"> Cancelar </a>
                                <button type="reset"> Limpar </button>
                                <button type="submit"> Cadastrar </button>

                            </div>

                            <a id="register" href="<?= ROUTES ?>/login"> Já possui um cadastro? Clique aqui. </a>

                        </section>

                    </form>

                </div>

            </main>

        </div>
        
    </body>

</html>