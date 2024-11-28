<?php

    if(!isset($_SESSION))
    {

        session_start();

    }

    require "Config.php";

    require "Autoload.php";

    require "Routes.php";

?>