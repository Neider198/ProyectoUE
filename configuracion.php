<?php

$mods = []; //Iniciar el arreglo (array)

//modulo inicio
$mods['inicio'] = [
    "pagina-inicio" => ["diseño" => "menu-horizontal", "archivo" => "modulos/inicio/pagina-inicio.php"],
    "inicio" => ["diseño" => "menu-horizontal", "archivo" => "modulos/inicio/inicio.php"],
    "listar" => ["diseño" => "pagina-libre", "archivo" => "modulos/inicio/listar.php"] 
];


                //*****************************************//
                //------- MODULOS PROYECTOS ---------//
                //*****************************************//
//crear
$mods['proyecto'] = [
    "inicio" => ["diseño" => "menu-horizontal", "archivo" => "modulos/proyecto/inicio.php"] ,
    "consultar" => ["diseño" => "menu-horizontal", "archivo" => "modulos/proyecto/consultar.php"] ,
    "detalle" => ["diseño" => "menu-horizontal", "archivo" => "modulos/proyecto/detalle.php"] ,
    "anticipo" => ["diseño" => "menu-horizontal", "archivo" => "modulos/proyecto/anticipo.php"] ,
    "primer-pago" => ["diseño" => "menu-horizontal", "archivo" => "modulos/proyecto/primer-pago.php"] ,
    "segundo-pago" => ["diseño" => "menu-horizontal", "archivo" => "modulos/proyecto/segundo-pago.php"] ,
    "tercer-pago" => ["diseño" => "menu-horizontal", "archivo" => "modulos/proyecto/tercer-pago.php"] ,
];


                //*****************************************//
                //------- MODULOS PRESUPUESTO ---------//
                //*****************************************//
//crear
$mods['presupuesto'] = [
    "inicio" => ["diseño" => "menu-horizontal", "archivo" => "modulos/presupuesto/inicio.php"] ,
    "crear" => ["diseño" => "menu-horizontal", "archivo" => "modulos/presupuesto/crear.php"] ,
    
];


                //*****************************************//
                //------- MODULOS PRESUPUESTO ---------//
                //*****************************************//
//crear
$mods['modificar'] = [
    "adicion" => ["diseño" => "menu-horizontal", "archivo" => "modulos/modificar/adicion.php"] ,
    "translados" => ["diseño" => "menu-horizontal", "archivo" => "modulos/modificar/translados.php"] ,
    "detalles" => ["diseño" => "menu-horizontal", "archivo" => "modulos/modificar/detalles.php"] ,
];





                //*****************************************//
                //------- MODULOS DATOS GENERALES ---------//
                //*****************************************//
//modulo sexo
$mods['sexo'] = [
    "inicio" => ["diseño" => "menu-horizontal", "archivo" => "modulos/sexo/inicio.php"] ,
    "listar" => ["diseño" => "pagina-libre", "archivo" => "modulos/sexo/listar.php"] ,
    "registrar" => ["diseño" => "pagina-libre", "archivo" => "modulos/sexo/registar.php"],
    "actualizar" => ["diseño" => "pagina-libre", "archivo" => "modulos/sexo/actualizar.php"],
    "eliminar" => ["diseño" => "pagina-libre", "archivo" => "modulos/sexo/eliminar.php"]
];


?>

