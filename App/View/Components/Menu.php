<div id="blocker">

    <div id="menu">

        <figure> <img src="<?= ROOT ?>/View/Assets/Images/Logo.png" alt="Logo"> </figure>

        <button id="close-menu"> Fechar Menu </button>

        <nav>

            <a href="<?= ROOT ?>/"> Início </a>
            <a href="<?= ROOT ?>/salas"> Salas </a>
            <a href="<?= ROOT ?>/equipe"> Equipe </a>

            <?php if(count($_SESSION) > 0 && (bool) $_SESSION["usuario"]["administrador"]): ?>

                <details>
                
                    <summary> Administração </summary>

                    <?php $modules = ["Bloco", "Cargo", "Equipamento", "Sala"];

                          foreach($modules as $module): ?>

                        <details class="module">

                            <summary> <?= $module . "s" ?> </summary>

                            <a href="<?= ROOT ?>/<?= strtolower($module) ?>"> Cadastro </a>

                            <a href="<?= ROOT ?>/<?= strtolower($module) ?>/listagem"> Listagem </a>

                        </details>

                    <?php endforeach ?>

                </details>

            <?php endif ?>

        </nav>

    </div>

</div>