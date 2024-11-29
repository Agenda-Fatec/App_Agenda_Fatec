<?php

    use App\Controller\
    {

        AgendamentoController,
        BlocoController,
        CargoController,
        EquipamentoController,
        SalaController,
        UsuarioController

    };

    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    switch(substr($url, strlen(ROUTES)))
    {

        case "/":
            include VIEWS . "../Inicio.php";
        break;

        case "/equipe":
            include VIEWS . "../Equipe.php";
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

        case "/salas":
            SalaController::List("Salas");
        break;

        case "/sala/descricao":
            SalaController::Describe();
        break;

        case "/agendamento/novo":
            AgendamentoController::Form();
        break;

        case "/ajuda";
            include VIEWS . "Ajuda/index.php";
        break;

        default:
            
            if(count($_SESSION) > 0 && (bool) $_SESSION["usuario"]["administrador"])
            {

                switch(substr($url, strlen(ROUTES)))
                {

                    case "/bloco":
                        BlocoController::Form();
                    break;

                    case "/bloco/salvar":
                        BlocoController::Save();
                    break;

                    case "/bloco/listagem":
                        BlocoController::List();
                    break;

                    case "/bloco/alternar_ativacao":
                        BlocoController::Toggle();
                    break;

                    case "/cargo":
                        CargoController::Form();
                    break;

                    case "/cargo/salvar":
                        CargoController::Save();
                    break;

                    case "/cargo/listagem":
                        CargoController::List();
                    break;

                    case "/cargo/alternar_ativacao":
                        CargoController::Toggle();
                    break;

                    case "/equipamento":
                        EquipamentoController::Form();
                    break;

                    case "/equipamento/salvar":
                        EquipamentoController::Save();
                    break;

                    case "/equipamento/listagem":
                        EquipamentoController::List();
                    break;

                    case "/equipamento/alternar_ativacao":
                        EquipamentoController::Toggle();
                    break;

                    case "/sala":
                        SalaController::Form();
                    break;

                    case "/sala/salvar":
                        SalaController::Save();
                    break;

                    case "/sala/listagem":
                        SalaController::List();
                    break;

                    case "/sala/alternar_ativacao":
                        SalaController::Toggle();
                    break;

                    case "/usuario/listagem":
                        UsuarioController::List();
                    break;

                    case "/usuario/alternar_ativacao":
                        UsuarioController::Toggle();
                    break;

                    case "/usuario/reclassificar":
                        UsuarioController::Reclassify();
                    break;

                    default:
                        http_response_code(404);

                        include VIEWS . "../Erro.php";
                    break;

                }

            }

            else
            {

                http_response_code(404);

                include VIEWS . "../Erro.php";

            }

        break;

    }

?>