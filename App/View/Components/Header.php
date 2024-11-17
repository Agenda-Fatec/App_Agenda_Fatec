<header>

    <nav>

        <button> <i class="bx bx-menu">  </i> </button>

        <div id="access">

            <?php if(count($_SESSION) > 0): ?>

                <a id="logout" href="/logout"> Sair </a>

            <?php else: ?>

                <a href="/cadastro"> Cadastro </a>
                <a href="/login"> Login </a>

            <?php endif ?>

        </div>

    </nav>

</header>