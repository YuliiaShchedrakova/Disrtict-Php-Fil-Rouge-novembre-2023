<?php

session_start();
var_DUMP("a");
if(isset($_POST["btn"])){

//variables

$demande=$_POST["question"];
$email=$_POST["email"];
$telephone=$_POST["tel"];
$nom=$_POST["nom"];
$prenom=$_POST["prénom"];



//email 
function fun1($email){
    $validation= "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/";
    if (preg_match($validation,$email)){
return true;
    }
    else{    echo "<p> Ecrire votre email <p>";
        return false;
    
    };
}; 

//telephone 
function fun2($telephone){
    $validation= "/^[0-9]{10,}$/";
    if (preg_match($validation,$telephone)){
return true;
    }
    else{
             echo "<p> Ecrire votre numéro de téléphone <p>";
        return false;
   
    };
};


//nom
function fun3($nom){
    $validation= "/^[a-zA-Z]+$/";
    if (preg_match($validation,$nom)){
return true;
    }
    else{
          echo "<p> Ecrire votre nom <p>";
        return false;
      
    };
};
function fun4($prenom){
    $validation= "/^[a-zA-Z]+$/";
    if (preg_match($validation,$prenom)){
return true;
    }
    else{
         echo "<p> Ecrire votre prénom <p>";
        return false;
       
    };
};

//votre demande 
function fun5($demande){
    $validation= "/^[a-zA-Z]+$/";
    if (preg_match($validation,$demande)){
return true;
    }
    else{
         echo "<p> Ecrire votre demande. Cette information est obligatoire ! <p>";
        return false;
       
    };
};


//!

if(fun1($email)==true &fun2($telephone)==true &fun3($nom)==true&fun4($prenom)==true&fun5($demande)==true){

$_SESSION["question"]=$demande;
$_SESSION["email"]=$email;
$_SESSION["tel"]=$telephone;
$_SESSION["nom"]=$nom;
$_SESSION["prénom"]=$prenom;

$nomFichier=date("Y-m-d-H-i-s");
$contenuFichier="Nom : ".$_SESSION["nom"]
."\r\n Prenom : ".$_SESSION["prénom"]
."\r\n  Email : ".$_SESSION["email"]
."\r\n  Telephone : ".$_SESSION["tel"]
."\r\n  Demande :".$_SESSION["question"];
file_put_contents($nomFichier,$contenuFichier);
header("Location: dem.php");
exit();
}

else{
unset($_SESSION["auth"]);
session_destroy();

// header("Location: in.php?page=Contact");
// exit(e.preventDefault());
// };

};
};
?>