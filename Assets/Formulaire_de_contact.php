<?php

session_start();

if(isset($_POST["envoyer"])){

//variables

$demande=$_POST["demande"];
$email=$_POST["email"];
$telephone=$_POST["telephone"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];



//email 
function fun1($email){
    $validation= "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/";
    if (preg_match($validation,$email)){
return true;
    }
    else{
        return false;
        echo "<p> Ecrire votre email <p>";
    };
}; 

//telephone 
function fun2($telephone){
    $validation= "/^[0-9]{10,}$/";
    if (preg_match($validation,$telephone)){
return true;
    }
    else{
        return false;
        echo "<p> Ecrire votre numéro de téléphone <p>";
    };
};


//nom
function fun3($nom){
    $validation= "/^[a-zA-Z]+$/";
    if (preg_match($validation,$nom)){
return true;
    }
    else{
        return false;
        echo "<p> Ecrire votre nom <p>";
    };
};
function fun4($prenom){
    $validation= "/^[a-zA-Z]+$/";
    if (preg_match($validation,$prenom)){
return true;
    }
    else{
        return false;
        echo "<p> Ecrire votre prénom <p>";
    };
};

//votre demande 
function fun5($demande){
    $validation= "/^[a-zA-Z]+$/";
    if (preg_match($validation,$demande)){
return true;
    }
    else{
        return false;
        echo "<p> Ecrire votre demande. Cette information est obligatoire ! <p>";
    };
};


//!

if(fun1($email)===true&fun2($telephone)===fun3($nom)===true&fun4($prenom)===true&fun5($demande)===true){

$_SESSION["demande"]=$demande;
$_SESSION["email"]=$email;
$_SESSION["telephone"]=$telephone;
$_SESSION["nom"]=$nom;
$_SESSION["prenom"]=$prenom;

$nomFichier=date("Y-m-d-H-i-s");
$contenuFichier="Nom : ".$_SESSION["nom"]
."\r\n Prenom : ".$_SESSION["prenom"]
."\r\n  Email : ".$_SESSION["email"]
."\r\n  Telephone : ".$_SESSION["telephone"]
."\r\n  Demande :".$_SESSION["demande"];
file_put_contents($nomFichier,$contenuFichier);
header("Location: index.php?page=demande");
exit(e.preventDefault());
}

else{
unset($_SESSION["auth"]);
session_destroy();

header("Location: in.php?page=Contact");
exit(e.preventDefault());
};

};

?>