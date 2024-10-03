<?php

    // Aplicação.

    define("BASEDIR", dirname(__FILE__, 2) . "\\");

    define("VIEWS", str_replace("\\", "/", dirname(__FILE__, 1)) . "/View/Modules/");

    // Banco de Dados.

    $_ENV["database"]["host"] = "localhost";

    $_ENV["database"]["user"] = "root";

    $_ENV["database"]["password"] = "";

    $_ENV["database"]["db_name"] = "db_agenda_fatec";

?>