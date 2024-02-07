<?php
/*
 * Front Controller
 */

// si le paramètre "section" est défini dans l'URL
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'page2':
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/page2.php');
            break;
        case 'page3':
            include('../templates/page3.php');
            break;
        case 'page4':
            include('../templates/page4.php');
            break;
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            include('../templates/page-404.php');
        case 'accueil':
            include('../templates/accueil.php');
                break;
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../templates/accueil.php');
}