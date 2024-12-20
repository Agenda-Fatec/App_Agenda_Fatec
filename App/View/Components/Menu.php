<div id="blocker">

    <div id="menu">

        <figure> <img src="<?= FILES ?>/View/Assets/Images/Logo.png" alt="Logo"> </figure>

        <button id="close-menu"> Fechar Menu </button>

        <nav>

            <a href="<?= ROUTES ?>/"> Início </a>
            <a href="<?= ROUTES ?>/salas"> Salas </a>
            <a href="<?= ROUTES ?>/equipe"> Equipe </a>
            <a href="<?= ROUTES ?>/ajuda"> Ajuda </a>

            <?php if(count($_SESSION) > 0 && (bool) $_SESSION["usuario"]["administrador"]): ?>

                <details>
                
                    <summary> Administração </summary>

                    <details class="module">

                        <summary> Agendamentos </summary>

                        <a href="<?= ROUTES ?>/agendamento/listagem"> Requisições </a>

                    </details>

                    <?php $modules = ["Bloco", "Cargo", "Equipamento", "Sala"];

                          foreach($modules as $module): ?>

                        <details class="module">

                            <summary> <?= $module . "s" ?> </summary>

                            <a href="<?= ROUTES ?>/<?= strtolower($module) ?>"> Cadastro </a>

                            <a href="<?= ROUTES ?>/<?= strtolower($module) ?>/listagem"> Listagem </a>

                        </details>

                    <?php endforeach ?>

                    <details class="module">

                        <summary> Usuários </summary>

                        <a href="<?= ROUTES ?>/usuario/listagem"> Listagem </a>

                    </details>

                </details>

            <?php endif ?>

        </nav>

    </div>

</div>