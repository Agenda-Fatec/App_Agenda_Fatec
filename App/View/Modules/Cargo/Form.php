<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Cadastro de Cargo | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= ROOT ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Form.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <div id="container">

            <main>

                <section id="module-form">

                    <h1> Cadastro de Cargo </h1>

                    <form action="<?= ROOT ?>/cargo/salvar">

                        <input type="hidden" id="id" name="id" value="<?= $model->id ?>">

                        <label for="nome"> Nome: </label>
                        <input type="text" id="nome" name="nome" value="<?= $model->nome ?>">

                        <div id="buttons">

                            <a href="<?= ROOT ?>/cargo/listagem"> Cancelar </a>
                            <button type="reset"> Limpar </button>
                            <button type="submit"> Salvar </button>

                        </div>

                    </form>

                </section>

            </main>

        </div>
        
    </body>

</html>