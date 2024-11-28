<header>

    <nav>

        <button id="open-menu"> <i class="bx bx-menu">  </i> </button>

        <div id="access">

            <?php if(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) === ROUTES . "/sala/descricao"): ?>

                <a href="<?= ROUTES ?>/agendamento/novo?fk_sala=<?= $model[0]->id ?>"> Agendar </a>

            <?php else: ?>

                <?php if(count($_SESSION) > 0): ?>

                    <a id="logout" href="<?= ROUTES ?>/logout"> Sair </a>

                <?php else: ?>

                    <a href="<?= ROUTES ?>/cadastro"> Cadastro </a>
                    <a href="<?= ROUTES ?>/login"> Login </a>

                <?php endif ?>

            <?php endif ?>

        </div>

    </nav>

</header>