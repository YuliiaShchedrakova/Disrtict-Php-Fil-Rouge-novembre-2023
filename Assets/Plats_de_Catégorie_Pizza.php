<!DOCTYPE html>
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

    <title>Plats de Catédorie "Pizza"</title>
</head>

<body>


    <!--header-->

    <?php
 include('header2.php');
 ?>



    <!--Cards-->

    <!--1-->
    <div class="container ">

        <div class="row mb-5 col-12 menu d-flex align-items-center justify-content-around fst-italic ">
            

                <div class="card col-md-6 col-lg-3 " style="width: 25rem;">
                    <img src="img/pizza-margherita.jpg" class="card-img-top" alt="pizza1">
                    <div class="card-body">
                        <h1 class="card-title text-success d-flex justify-content-center">Pizza Margherita</h1>
                        <h5 class="card-text d-flex justify-content-center">Cette pizza est garnie de tomates, de
                            mozzarella, de basilic frais, de sel et d'huile d'olive.</h5>
                        <a href="#" class="btn btn-outline-success d-flex justify-content-center">Commander</a>
                    </div>
                </div>

                <div class="card col-md-6 col-lg-3 " style="width: 25rem;">
                    <img src="img/pizza_chorizo.jpg" class="card-img-top" alt="pizza2">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center text-success">Pizza Chorizo</h1>
                        <h5 class="card-text d-flex justify-content-center">Cette pizza est garnie de chorizo, de
                            poivron, mozzarella, oignon, de sel et d'huile d'olive.</h5>
                        <a href="#" class="btn btn-outline-success d-flex justify-content-center">Commander</a>
                    </div>
                </div>
        </div>

        <!--2-->
        <div class="row mb-5 col-12 menu d-flex align-items-center justify-content-around fst-italic">

                <div class="card col-md-6 col-lg-3 " style="width: 25rem;">
                    <img src="img/pizza-district.png" class="card-img-top" alt="pizza3">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center text-success">Pizza District</h1>
                        <h5 class="card-text d-flex justify-content-center">Cette pizza est garnie de saumon
                            fumé, de mozzarella, de oignon rouge, de sel et sauce creme. </h5>
                        <a href="#" class="btn btn-outline-success d-flex justify-content-center">Commander </a>
                    </div>
                </div>


                <div class="card col-md-6 col-lg-3" style="width: 25rem;">
                    <img src="img/pizza hawaii.jpg" class="card-img-top" alt="pizza4">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center text-success">Pizza Hawaii</h1>
                        <h5 class="card-text d-flex justify-content-center">Cette pizza est garnie d’ananas, de
                            mozzarella, de filet de poulet, de sel, olives, et sauce tomate.</h5>
                        <a href="#" class="btn btn-outline-success d-flex justify-content-center">Commander</a>
                    </div>
                </div>
        </div>

    </div>

    <!--3 pic-->


    <div class="row text-center d-flex align-items-center justify-content-around mt-5 gy-3">

        <div class="button2 col-md-6 rounded-4" style="width: 18rem;">
                <a href="#" class="btn btn-outline-success my-2 fst-italic rounded-4  ">Précedent</a>
        </div>
        
        <div class="button2 col-md-6 rounded-4" style="width: 18rem;">
            <a href="#" class="btn btn-outline-success my-2 fst-italic rounded-4">Suivant</a>
        </div>

    </div>

<!-- 
    <hr style="border: 10px solid"> -->



    <!--Footer-->

    <?php
 include('footer.php');
 ?>


    <!--!-->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


</body>

</html>