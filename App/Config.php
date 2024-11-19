<?php

    // Aplicação.

    define("BASEDIR", dirname(__FILE__, 2) . "\\");

    define("ROOT", ($_SERVER["HTTP_HOST"] === "localhost:8000") ? "" : "/App_Agenda_Fatec/App");

    define("VIEWS", str_replace("\\", "/", dirname(__FILE__, 1) . "/View/Modules/"));

    // Banco de Dados.

    $_ENV["database"]["host"] = "localhost:3306";

    $_ENV["database"]["user"] = "root";

    $_ENV["database"]["password"] = "";

    $_ENV["database"]["db_name"] = "db_agenda_fatec";

?>