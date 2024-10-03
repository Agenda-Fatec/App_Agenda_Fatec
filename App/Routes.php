<?php

    use App\Controller\
    {

        BlockController,
        EquipmentController,
        PositionController,
        RoomController,
        RoomEquipmentAssocController,
        SchedulingController,
        UserController

    };

    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    switch($url)
    {

        // Início.

        case "/":

            include VIEWS . "../Index.html";

        break;

        // Bloco.

        case "/block/save":

            BlockController::Save();

        break;

        case "/block/remove":

            BlockController::Remove();

        break;

        case "/block/list":

            BlockController::List();

        break;

        // Equipamento.

        case "/equipment/save":

            EquipmentController::Save();

        break;

        case "/equipment/remove":

            EquipmentController::Remove();

        break;

        case "/equipment/list":

            EquipmentController::List();

        break;

        // Cargo.

        case "/position/save":

            PositionController::Save();

        break;

        case "/position/remove":

            PositionController::Remove();

        break;

        case "/position/list":

            PositionController::List();

        break;

        // Sala.

        case "/room/save":

            RoomController::Save();

        break;

        case "/room/remove":

            RoomController::Remove();

        break;

        case "/room/list":

            RoomController::List();

        break;

        // Agendamento.

        case "/scheduling/save":

            SchedulingController::Save();

        break;

        case "/scheduling/remove":

            SchedulingController::Remove();

        break;

        case "/scheduling/list":

            SchedulingController::List();

        break;

        // Usuário.

        case "/user/save":

            UserController::Save();

        break;

        case "/user/remove":

            UserController::Remove();

        break;

        case "/user/list":

            UserController::List();

        break;

        // Padrão.

        default:

            http_response_code(404);

            include VIEWS . "../Error.html";

        break;

    }

?>