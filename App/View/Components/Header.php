<header>

    <nav>

        <button id="open-menu"> <i class="bx bx-menu">  </i> </button>

        <div id="access">

            <?php if(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) === ROOT . "/sala/descricao"): ?>

                <a href="<?= ROOT ?>/agendamento/novo?fk_sala=<?= $model[0]->id ?>"> Agendar </a>

            <?php else: ?>

                <?php if(count($_SESSION) > 0): ?>

                    <a id="logout" href="<?= ROOT ?>/logout"> Sair </a>

                <?php else: ?>

                    <a href="<?= ROOT ?>/cadastro"> Cadastro </a>
                    <a href="<?= ROOT ?>/login"> Login </a>

                <?php endif ?>

            <?php endif ?>

        </div>

    </nav>

</header>