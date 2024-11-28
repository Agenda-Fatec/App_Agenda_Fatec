<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Cadastro de Bloco | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= ROOT ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Form.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <div id="container">

            <main>

                <section id="module-form">

                    <h1> Cadastro de Bloco </h1>

                    <form action="<?= ROOT ?>/bloco/salvar" method="post">

                        <input type="hidden" id="id" name="id" value="<?= $model->id ?>">

                        <label for="nome"> Nome: </label>
                        <input type="text" id="nome" name="nome" value="<?= $model->nome ?>">

                        <label for="descricao"> Descrição: </label>
                        <textarea id="descricao" name="descricao" maxlength="255"><?= $model->descricao ?></textarea>

                        <div id="buttons">

                            <a href="<?= ROOT ?>/bloco/listagem"> Cancelar </a>
                            <button type="reset"> Limpar </button>
                            <button type="submit"> Salvar </button>

                        </div>

                    </form>

                </section>

            </main>

        </div>
        
    </body>

</html>