<?php

    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    switch($url)
    {

        case "/":

            include VIEWS . "../Index.html";

        break;

        default:

            http_response_code(404);

            include VIEWS . "../Error.html";

        break;

    }

?>