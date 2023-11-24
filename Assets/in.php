<!doctype html>
<html lang="fr">

<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="The Disrtict-resto online">
    <meta name="description" content="Large assortiment de menus-pizzas, burgers, sandwichs, wraps, salades, légumes. Livrasson gratuit">
    <meta name="keywords" content="resto, burger, pizza, salade, livrason gratuit">
    <link rel="stylesheet" href="css/mystyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/mystyles.css">

    <title>The District</title>

</head>

<body>

    <class="contbody"><div class="container-fluid">
        
        
<!-- php -->
        
        <?php
    session_start();

if (($_SESSION['url'])!=($_SERVER['HTTP_REFERER'])) {


    $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
}

elseif (!isset($_SESSION['url']) ) {


    $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
};

?>

<hr>
<div><?= $_SESSION['url'] ?></div>
<hr>


<!-- header -->

            <?php
            include('header2.php');
            ?>


<div class="w-100 d-flex row">
            <div class="row justify-content-center " id="afficher"></div>
            </div>

            <div class="w-100 row d-flex  justify-content-center">
                <div class="row col-9 justify-content-center" >
                    <div id="j" class="row justify-content-center mt-4 "></div>
                </div>
            </div>
            <div id="titre">
                <div class="col-12 d-flex justify-content-center">
                    <h1 class="font-weight-bold font-italic mr-4 pr-4"> Votre Commande : </h1>
                </div></div>
            <div class="w-100 d-flex justify-content-center row">
                    
            <div class="row col-8 cardContainer  ml-3 d-flex justify-content-center " id="op"></div>
            </div>
            <div id="w">
                <div  class="container-fluid  col-12 d-none d-md-block mb-4 mt-4">
                    <div class="row ">
                        <div class="col-2 ">
                            <div class="card border-0 bg-transparent  ">
                                <div class="card-body">
                                <img src="" class="card-img-top img-fluid" alt="">
                                </div>
                            </div>
                        </div>


                        <form class="col-8 " method="POST" action="2f_c.php">

                            <div class="col mr-4 pr-4 ml-2 mb-4 mt-4 ">
                                <label class="font-weight-bold font-italic text-right">Votre Nom et
                                Prénom : </label>
                                <input type="text" id="np" name="np" class="form-control">
                                <div id="np"
                                    class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                    style="display:none;" role="alert">
                                    <strong>Cette information est obligatoire ! </strong>
                                </div>
                            </div>

                            <div class="col mr-4 ml-4 mb-4 mt-4">
                                    <label class="font-weight-bold font-italic text-right">Téléphone :</label>
                                    <input type="text" id="t2" name="t" class="form-control">
                                    <div id="tel2"
                                        class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                        style="display:none;" role="alert">
                                        <strong>Cette information est obligatoire !</strong>
                                    </div>
                                </div>

                            <div class="form-row">
                                <div class="col mr-4 ml-4 mb-4 mt-4">
                                    <label class="font-weight-bold font-italic text-right">Email :</label>
                                    <input type="text" id="e2" name="e" class="form-control">
                                    <div id="email2"
                                        class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                        style="display:none;" role="alert">
                                        <strong>Cette information est obligatoire !</strong>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="form-group mr-4 ml-4 mb-4 mt-4">
                                <label class="font-weight-bold font-italic text-right"> Adresse :</label>
                                <textarea class="form-control" id="a" name="a" rows="4"></textarea>
                                <div id="adresse"
                                    class="alert alert-danger alert-dismissible fade bg-transparent border-0 show"
                                    style="display:none;" role="alert">
                                    <strong>Cette information est obligatoire !</strong>
                                </div>
                            </div>
                            <div class="container-fluid col-12 ">
                                <div class="item-content text-center ml-4 pl-4 ">

                                    <input type="submit" href="index.php?page=1" name="bouton" id="bouton"
                                    class="btn btn-outline-success my-2 fst-italic rounded-4 text-right " value="Envoyer">
                                </div>
                            </div>
                            <div class="w-100 mt-3 d-flex justify-content-center"> <a type="submit" class="btn btn-outline-success my-2 fst-italic rounded-4 " href="in.php">Acceuil</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                <div class="col-12 text-center">

                    <button type="button" id="bottom" onclick="window.location.href='<?php echo $_SESSION['url']; ?>'" class="btn btn-outline-success my-2 fst-italic rounded-4 text-center mt-4">Précédent</button>
                </div>
                <main>


<!-- php -->

    <?php


    if(!isset($_GET['page'])|| empty($_GET['page'])||$_GET['page']=='accueil')
    {

        include('accueil.php');
    }

    else if($_GET['page']=='contact'){
        include('Contact.php');
    }

    else if($_GET['page']=='dem'){
        include('dem.php');
    }

    else if($_GET['page']=='categorie'){
        include('Catégories.php');
    }

    else if($_GET['page']=='plats'){
        include('Plats1.php');
    }

    else if($_GET['page']=='1'){
        include('1.php');
    };                           
    
    ?>

</main>

<!-- php -->

        <?php
        include('footer.php');
        ?>

    </div>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

        <script src="Assets/jquery.js"></script>



<!--SCRIPT-->

    <script>
        $(document).ready(function () {
        form.hide();
        titre.hide();
        btn.hide();
        
    //variables
        var op=$("#op");
        var btn=$("#bottom"); 
        var test=$("#j");
        var affichage = $("#categorie");
        var titre=$("#titre");
        var form=$("#w");
        var affiche = $("#txt");
        var visible=$("#visible");
        var a = $("#afficher");
        var tel=$("#smm");
        var aff=$("#plats");

            var url = window.location.href;


    $.getJSON("District_JSON.json", function (json) {
                var ctg = json.categorie;
                var plt = json.plat;


// pour afficher:
$(document).on("click", ".di", function (e) {
    e.preventDefault();
    var id=$(this).attr("value");
    commande(id);
});

function commande(id){
btn.hide();
test.empty();
op.empty();
a.empty();
form.show();
titre.show();

    $.each(plt, function (element, uno) {
        var idpp=uno.id_plat;
        if (idpp == id){ 
            var t = $( ` 
            <div class="card  col-12 col-md-3 mx-1 "><img class="card-img-top himg img-fluid"  src="asset/food/${uno.image}" alt="${uno.libelle}">
            <div class="card-body font-italic">
            <h5 class="  card-title font-weight-bold ">${uno.libelle}</h5>
            <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p><span class="stock6 text-danger"><span>   
            </div><div class="mt-auto mb-2 text-center"><a href="#" class="btn btn-warning t">Quantité : 1 </a></div></div> `);
visible.hide();
                op.append(t);
                var stock = resultat.find(".stock6");
    stock.text(uno.active === 'Yes' ? '' : 'Disponible prochainement');
                };
            });
        };
    });


 // pour search: 

$("#btn").click(function () {
            search();
        });

        $("#recherche").on("keypress", function (e) {
            if(e.which===13){
            e.preventDefault();
            search();
        };
        }); 

        function search() {
            a.empty();
            test.empty();
visible.hide();
btn.show();
            var input = $("#recherche").val();

            $.getJSON("plat.json", function (json) {
            var plt = json.plat;
            var pla = plt.filter(function (p) {
                return p.libelle.toLowerCase().includes(input.toLowerCase());
                    });  
miseajour(pla);

function miseajour(result) {
                    $.each(result, function (element, uno) {
                        var txt = $( `<div class="card   col-12 col-md-3 mx-1 ">
                        <img class="card-img-top img-fluid himg" src="asset/food/${uno.image}" alt="${uno.libelle}">
                        <div class="card-body font-italic "><h5 class="card-title  font-weight-bold ">${uno.libelle}</h5>
                            <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p><span class="stock5 text-danger"><span>
                        </div> <div class="mt-auto mb-2 text-center"><a href="#" value="${uno.id_plat}" class="btn btn-warning di t">Commander</a></div>
                    </div>`);

                        a.append(txt);
                        var stock = txt.find(".stock5");
stock.text(uno.active === 'Yes' ? '' : 'Disponible ');
                    });
                }
            });
        };

// afficher les catégories :

for (i = 0; i < ctg.length; i++) {
                    var item = ctg[i];
                    var resultat = $( `<div class="t  cat card custom-card col-12 col-md-3 mr-4 mb-4 d-none d-md-block">
                <img class=" card-img-top taille  img-fluid" src="asset/category/${item.image}" alt="${item.libelle}">
                <div class="card-body pl-3"><h3 value="${item.id_categorie}" class=" titre card-title font-weight-bold font-italic id">${item.libelle}</h3>
                <span class="stock text-danger"><span>
                </div>
            </div>`);
            
            affichage.append(resultat);
var stock = resultat.find(".stock");
    stock.text(item.active === 'Yes' ? '' : 'Disponible ');
};

 // afficher plats click:

$(".cat").click(function () {
    var id=$(this).find(".id").attr("value");
    btn.show();
    plat(id);
    });
        function plat(id){
            op.empty();
            test.empty();
            a.empty();
        
            $.each(plt, function (element, uno) {
                var idcat=uno.id_categorie;
                if (idcat == id){ 
                            var t = $( `<div class="card  col-12 col-md-3  mx-1 ">
                            <img class="card-img-top himg img-fluid"  src="asset/food/${uno.image}" alt="${uno.libelle}">
                            <div class="card-body font-italic">
                                <h5 class="  card-title font-weight-bold ">${uno.libelle}</h5>
                                <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p>
                                <span class="stock1 text-danger"><span>
                            </div><div class="mt-auto mb-2 text-center"><a href="#" value="${uno.id_plat}" class="btn btn-warning di t">Commander</a></div>
                        </div>`);
visible.hide();

                            test.append(t);
                            var stock = resultat.find(".stock1");
    stock.text(uno.active === 'Yes' ? '' : 'Disponible ');
                };
            });
        };


// afficher les plats :

for (i=0;i<plt.length;i++){
var item=plt[i];
var iche=$( `<div class="card col-12 col-md-3 hauteur mr-3 mb-3">
    <img class="card-img-top img-fluid himg" src="asset/food/${item.image}" alt="${item.libelle}">
    <div class="card-body font-italic">
        <h5 class="card-title font-weight-bold">${item.libelle}</h5>
        <p class="card-text">${item.description} <br> Menu: ${item.prix} €</p>
        <span class="stock7 text-danger"></span>
    </div>
    <div class="mt-auto mb-2 text-center"> <a href="#" value="${item.id_plat}" class="btn btn-warning di t">Commander</a></div>
</div>`);

aff.append(iche);
var stock = iche.find(".stock7");
    stock.text(item.active === 'Yes' ? '' : 'Disponible ');                   
    };


// plats (1_3):

    for (i = 0; i < 3; i++) {
                    var truc = plt[i];
                    var r = $( `<div  class="card  col-12 col-md-3 ml-1 mb-1 ">
                        <img  class="card-img-top himg img-fluid "  src="asset/food/${truc.image}" alt="${truc.libelle}">
                        <div class="card-body font-italic"><h5 class="card-title font-weight-bold ">${truc.libelle}</h5>
                        <p class="card-text ">${truc.description}<br> Menu: ${truc.prix} €  </p>
                        <span class="stock3 text-danger"><span></div> <div class="mt-auto mb-2 text-center"> <a href="#" value="${truc.id_plat}" class="btn btn-warning di t">Commander</a></div></div>`);

                    affiche.append(r);
                    var stock = resultat.find(".stock3");
                    stock.text(truc.active === 'Yes' ? '' : 'Disponible ');
                };

// plats (3_5):

                for (i = 3; i < 5; i++) {
                    var leplat = plt[i];
                    var card = $( `<div   class="card col-12 ml-1  mb-2 ">
                <img class="card-img-top img-fluid himg" src="asset/food/${leplat.image}" alt="${leplat.libelle}">
                <div class="card-body font-italic">
                    <h5  class="card-title  font-weight-bold ">${leplat.libelle}</h5>
                    <p class="card-text ">${leplat.description}<br> Menu: ${leplat.prix} €  </p><span class="stock4 text-danger"><span></div> <div class="mt-auto mb-2 text-center"><a href="#" value="${leplat.id_plat}" class="btn btn-warning di t">Commander</a></div></div>`);
                tel.append(card);
                
                var stock = resultat.find(".stock4");
    stock.text(leplat.active === 'Yes' ? '' : 'Disponible ');
                };

        });


    </script>

</body>
</html>