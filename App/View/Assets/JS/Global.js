/*

    Diferença entre Eventos ON e addEventListener:

    Eventos ON (onclick, onload, etc.): Só permite definir uma função para um determinado evento (Causa mau funcionamento se dois scripts
                                        diferentes acessarem o evento de um mesmo elemento.).

    addEventListener (click, load, etc.): Permite definir várias funções para um mesmo evento de um elemento.

*/

// Constants and Variables:

const assets_root_folder = "/View/";

// Functions:

function ADD_Favicon()
{

    let favicon = document.createElement("link");

    favicon.setAttribute("rel", "icon");

    favicon.setAttribute("type", "image/x-icon");

    favicon.setAttribute("href", `${assets_root_folder}Assets/Images/Favicon.png`);

    document.head.appendChild(favicon);

}

function ADD_Menu_Events()
{

    document.getElementById("open-menu").onclick = function() {

        document.getElementById("blocker").style.transform = "translateX(0%)";

    };

    const close_menu = function() {

        document.getElementById("blocker").style.transform = "translateX(-100%)";

    };

    document.getElementById("close-menu").onclick = close_menu;

    document.getElementById("blocker").onclick = close_menu;

}

// Events:

window.addEventListener("load", function() {

    ADD_Favicon();

    if(document.getElementById("menu") !== null)
    {

        ADD_Menu_Events();
        
    }

});