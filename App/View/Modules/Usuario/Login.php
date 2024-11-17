<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Login | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= ROOT ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Acesso.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <div id="container">

            <main>

                <div id="form">

                    <form action="/login/validar" method="post">

                        <figure> <img src="<?= ROOT ?>/View/Assets/Images/Storyset/Login.svg" alt="Login"> </figure>

                        <section id="data">

                            <label for="email"> Digite seu e-mail institucional: </label>
                            <input type="email" id="email" name="email" maxlength="50" required>

                            <label for="senha"> Digite sua senha do Agenda Fatec: </label>
                            <input type="password" id="senha" name="senha" maxlength="20" required>

                            <div id="buttons">

                                <a href="/"> Cancelar </a>
                                <button type="reset"> Limpar </button>
                                <button type="submit"> Entrar </button>

                            </div>

                            <a id="register" href="/cadastro"> Não possui um cadastro? Clique aqui. </a>

                        </section>

                    </form>

                </div>

            </main>

        </div>
        
    </body>

</html>