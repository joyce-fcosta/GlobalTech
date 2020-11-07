<?php

include_once "paginas/includes/portifolio_header.php";

include_once "paginas/portifolio_middle.php";


$paginas = isset($_GET['pg']);

if ($paginas) {
    
    switch ($_GET['pg']) {

        case 'curriculo':
            include_once "CurriculoWEB.php";
            break;

            case 'globaltech':
                include_once "globaltech.php";
                break;
            
        default:            
            break;
    }
} 


// else {
//     include_once "pg_erro.php";
// }




include_once "paginas/includes/portifolio_foother.php";
