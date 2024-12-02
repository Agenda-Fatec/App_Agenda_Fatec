<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Cadastro de Equipamento | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= FILES ?>/View/Assets/CSS/Form.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <div id="container">

            <main>

                <section id="module-form">

                    <h1> Cadastro de Equipamento </h1>

                    <form action="<?= ROUTES ?>/equipamento/salvar" method="post">

                        <input type="hidden" id="id" name="id" value="<?= $model->id ?>">

                        <label for="nome"> Nome: </label>
                        <input type="text" id="nome" name="nome" value="<?= $model->nome ?>" maxlength="255" autocomplete="off">

                        <label for="descricao"> Descrição: </label>
                        <textarea id="descricao" name="descricao" maxlength="255"><?= $model->descricao ?></textarea>

                        <div id="buttons">

                            <a href="<?= ROUTES ?>/equipamento/listagem"> Cancelar </a>
                            <button type="reset"> Limpar </button>
                            <button type="submit"> Salvar </button>

                        </div>

                    </form>

                </section>

            </main>

        </div>
        
    </body>

</html>