

<?php

/*Fichier PHP (script.php)
*
* Notre script va prendre un élément aléatoirement
* dans le tableau et l'afficher.
*/
$somebody = array('World', 'Foobar', 'John Doe');

$rep='Hello'.$somebody[0];
// Case 1.
//setResponse($rep,true,"Traitement reussi:");

// Case 2
setResponse('',false,"Echec de Traitement:(");

//Try this case 2 and comment the case 1
//setResponse('','false',"Une erreur est survenu quelque  part!");

//Function return an objet JSON cette 
//author YAHIATENE
//@parms $contentreponse content, $Reussi (true or false)
// If Reussi is false, so i send a message to explain what is happened
//the $Content can be an html element 
function setResponse($Content, $Reussi, $Message = null)
{
    header('Content-Type: text/plain');
    echo json_encode(array('Content' => $Content, 'Reussi' => $Reussi, 'Message' => $Message));
}
?>
