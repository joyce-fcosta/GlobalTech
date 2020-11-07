<?php


include_once "paginas/globaltech_paginas/includes/header.php";





include_once "paginas/globaltech_paginas/inicial.php";


$paginas = isset($_GET['pg']);


if ($paginas) {

    switch ($_GET['pg']) {
        case 'termos':
            include_once "paginas/globaltech_paginas/termosdeuso.php";
            break;
        case 'politica':
            include_once "paginas/globaltech_paginas/politica.php";
            break;
        default:
            break;
    }
}else{
    include_once "paginas/globaltech_paginas/inicial.php";
}





include_once "paginas/globaltech_paginas/sobre.php";






include_once "paginas/globaltech_paginas/includes/foother.php";
