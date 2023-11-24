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
  <title>1</title>
</head>

<body>


    <div class="container-fluid ">

       <?php
        include('header.php');
        ?>



<div class="w-100 d-flex row">
                 <div class="row justify-content-center " id="afficher"></div>
                 <div class="col-12 text-center" > <a type="submit" id="go" href="demande.php" class="btn btn-outline-success my-2 fst-italic rounded-4" >Précedent</a></div>
            </div>
     
          

      

      <div class="container-fluid col-12 mb-4 mt-1 d-flex  ">
        <div class="col-2 d-none d-md-block ">
           <div class="card border-0 bg-transparent  ">
            <div class="card-body">
               <img src="" class="card-img-top img-fluid  " >
             </div>
           </div>
        </div>
        <div calss="col-10 justify-content-center ">
          <h2 class="mt-4 ml-4 text-success fst-italic d-flex justify-content-center  ">Votre commande est envoyée ! Congrats ! </h2><br>
          </div>
          </div>
         <div class="w-100 d-flex justify-content-center"> <a type="submit" class="btn btn-outline-success my-2 fst-italic rounded-4 " href="in.php">Acceuil</a></div>
        
      </div>
     
      <?php
        include('footer.php');
        ?>

    </div>

  </div>


  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
  <script src="assets/jquery.js"></script>



  <script>
            
            $(document).ready(function () {

$.getJSON("District_JSON.json", function (data) {
   
    var afficher = $("#categorie");
    var aff = $("#pers");
    var cat = data.categorie;
    var pl = data.plat;

    
    for (i = 0; i < cat.length; i++) {
        var index = cat [i];
        var resultat = `<div class="card w-25 mr-4 mb-4 d-flex justify-content-space-around"
    style=" background-image: url(''); background-size: cover;">
    <img class="card-img-top" src="img/pic/category/${index.image}" alt="plat">
    <div class="card-body">
        <h5 class="card-title font-weight-bold font-italic">${index.libelle}</h5>

    </div>
    </div>`
        afficher.append(resultat);
    };

    var aff2=$("cat2");
    for (i = 0; i < 3; i++) {
        var top = pl[i];
        var plt = `<div class="card w-25 mr-4 mb-4"
    style=" background-image: url(''); background-size: cover;">
    <img class="card-img-top" src="img/pic/food/${top.image}" alt="plat">
    <div class="card-body">
        <h5 class="card-title font-weight-bold font-italic">${top.libelle}</h5>
        <p class="card-text">${top.description}<br> Menu: ${top.prix} </p>
        <a href="commande.html" class="btn btn-dark">commander</a>
    </div>
</div>`
        afficher.append(plt);
    };
});

//SEARCH

$("#btn").click(function () {
    research();
});

$("#search").on("done", function (ac2) {
   
  if(ac2.which===13){
  research();
};
});



function research() {
    var ok = $("#categorie");
    ok.empty();
    // visible.hide();
    var input = $("#search").val();

    $.getJSON("District_JSON.json", function (data) {
        var pl = data.plat;

            var p = pl.filter(function (ac3) {
                return ac3.libelle.toLowerCase().includes(input.toLowerCase());
            });  
    
        miseajour(p);

        function miseajour(resultat) {
         
            $.each(resultat, function (element, one) {
                var pers = ` 
            <div class="card w-25 mx-1 "
                style=" background-image: url(''); background-size: cover; ">
                <img class="card-img-top" src="img/pic/food/${one.image}" alt="${one.image}">
                <div class="card-body font-weight-bold font-italic">
                    <h5 class="card-title ">${one.libelle}</h5>
                    <p class="card-text">${one.description} <br> Menu: ${one.prix}
                    </p>
                    <a href="commande.html" class="btn btn-dark">Commander</a>
                    </div>
                    </div>`;
                ok.append(pers);
            });
            // search(inpt);
        }
    });
};
});

</script>
</body>

