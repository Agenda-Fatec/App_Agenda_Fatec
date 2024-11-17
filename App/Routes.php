<?php

    use App\Controller\
    {

        AgendamentoController,
        BlocoController,
        CargoController,
        EquipamentoController,
        SalaEquipamentoAssocController,
        SalaController,
        UsuarioController

    };

    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    switch($url)
    {

        case "/":
            include VIEWS . "../Index.php";
        break;

        case "/cadastro":
            UsuarioController::Form("Cadastro");
        break;

        case "/cadastro/salvar":
            UsuarioController::Save();
        break;

        case "/login":
            UsuarioController::Form();
        break;

        case "/login/validar":
            UsuarioController::Login();
        break;

        case "/login/verificar":
            exit(var_dump($_SESSION));
        break;

        case "/logout":
            UsuarioController::Logout();
        break;

        default:
            http_response_code(404);

            include VIEWS . "../Erro.php";
        break;

    }

?>