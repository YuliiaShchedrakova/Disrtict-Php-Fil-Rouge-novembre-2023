<?php

session_start();
var_DUMP("yu1");

if(isset($_POST["btn"])){
    $telephone=$_POST["t"];
    $adresse=$_POST["ad"];
    $np=$_POST["np"];
    $email=$_POST["em"];

var_DUMP("yu2");

//adresse
function ad($adresse){
    $validation= "/^[0-9]+\s[a-zA-Z\s]+$/";
    if (preg_match($validation,$adresse)){
return true;
    }
    else{
        echo " <p>Ecrire votre adresse<p>";
        return false;
        
    };
};

//telephone 
function t($telephone){
    $validation= "/^[0-9]{10,}$/";
    if (preg_match($validation,$telephone)){
return true;
    }
    else{
    echo " <p>Ecrire votre numéro de téléphone<p>";
        return false;
    };
};

//email 
function em($email){
    $validation= "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,3}$/";
    if (preg_match($validation,$email)){
return true;
    }
    else{
        echo " <p>Ecrire votre email<p>";
        return false;
    };
};

//prénom et nom 
function np($np){
    $validation= "/^[a-zA-Z]+\s[a-zA-Z]+$/";
    if (preg_match($validation,$np)){
return true;
    }
    else{
        echo " <p>Ecrire votre nom et prénom <p>";
        return false;
    };
}; 

//!

if(em($email)==true &t($telephone)==np($np)==true&ad($adresse)==true){

$_SESSION["t"]=$telephone;
$_SESSION["ad"]=$adresse;
$_SESSION["np"]=$np;
$_SESSION["em"]=$email;

$nomFichier="R".date("Y-m-d-H-i-s");
$contenuFichier="Nom et Prénom: ".$_SESSION["np"]
."\r\n  Adresse :".$_SESSION["ad"]
."\r\n  Email : ".$_SESSION["em"]
."\r\n  Telephone : ".$_SESSION["t"];
file_put_contents($nomFichier,$contenuFichier);
// echo "yu3";
header("Location: 1.php");
exit();
}

else{
unset($_SESSION["auth"]);
session_destroy();
};

};

?>