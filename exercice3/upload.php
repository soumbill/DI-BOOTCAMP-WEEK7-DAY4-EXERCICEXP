<?php


//si le fichier est téléchargé en cliquant sur le bouton de téléchargement
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
    //si le fichier est téléchargé avec toutes les erreurs rencontrées
    if(isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0){

    //paramettre du format
    $allowed = array("pdf" => "application/pdf");

   //superglobal name, type,taille
    $filename = $_FILES['pdf']['name'];
    $filesize = $_FILES['pdf']['size'];
    $filetype = $_FILES['pdf']['type'];

   //verification de l'extension du fichier
    $ext = pathinfo($filename,PATHINFO_EXTENSION);
    if(!array_key_exists($ext,$allowed)) die("Error: the file format is not acceptable");

   //verifier la taille du fichier
    $maxsize = 5 * 1024 * 1024;
    if($filesize > $maxsize) die("Error: file size too large!!");
   if(in_array($filetype,$allowed)){
    if(file_exists("upload/".$filename)){
        die("Sorry the file already exists");
    }else{
        move_uploaded_file($_FILES['pdf']['tmp_name'],"upload/".$filename);
        echo "File was uploaded successfully <br>";
    }
   }else{
        echo "Sorry a problem was encountered when trying to upload data!!";
    }
   }else{
        echo "Error: ". $_FILES['pdf']['error'];
    }
   //Affiche les informations du fichier telecharger
    if($_FILES['pdf']['error'] == 0){
        echo "Filename: ". $_FILES['pdf']['name'] ."<br>";
        echo "Filetype :". $_FILES['pdf']['type'] . "<br>";
        echo "Filesize: ". ($_FILES['pdf']['size'] / 1024) . "KB <br>";
    }
   }
?>