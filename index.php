<?php

include("configuracion.php");

$URL = $_SERVER['REQUEST_URI'];

$Parametros = explode('/', $URL);

define("RAIZ", "/" . $Parametros[1] . "/");

if (isset($Parametros[2]) && $Parametros[2] != "") {
    define("MODULO", $Parametros[2]);
} else {
    define("MODULO", "inicio");
}

if (isset($Parametros[3]) && $Parametros[3] != "") {
    define("ACCION", $Parametros[3]);
} else {
    define("ACCION", "pagina-inicio");
}

$menu = $mods[MODULO][ACCION];

$diseno = $menu["diseño"];

define("RAIZ_MODULO", RAIZ . MODULO . "/");

switch ($diseno) {
    case "menu-horizontal":
        include("paginas/menu-horizontal.php");
        break;

    case "sin-menu":
        include("paginas/sin-menu.php");
        break;

    case "pagina-libre":
        include("ppaginas/agina-libre.php");
        break;
}
?>