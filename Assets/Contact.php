<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="The Disrtict-resto online">
    <meta name="description"
        content="Large assortiment de menus-pizzas, burgers, sandwichs, wraps, salades, légumes. Livrasson gratuit">
    <meta name="keywords" content="resto, burger, pizza, salade, livrason gratuit">
    <link rel="stylesheet" href="css/mystyles.css"> 



    <!--!-->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <title>Contact</title>
</head>



<body>

    <!--header-->

    <div class="container-fluid ">

<?php
include('header.php');
?>

    <!--formulaire-->

    <div class="container-fluid row col-12 d-flex  ">

        <div class="col-2 justify-content-end">
            <img src="img/9754-1024x1024.jpg" class="img-fluid rounded-circle d-none d-lg-block " alt="pic" id="pic"
                title="pic">
        </div>

        <div class="col-10 ">

<!--form-->      

            <form action="Formulaire_de_contact.php" method="POST" class="col-12 col-md-8 d-none col-10 d-md-block menu fst-italic gy-3 fs-5 text">
            


                <div class="form-row">

                    <div class="col-10 mr-4 ml-4 mb-4 mt-4 ">
                        <label class="font-weight-bold font-italic text-right ">Nom</label>
                        <input type="text" name="nom" class="form-control">
                            <div id="n" style="display:none;" class="alert bg-transparent border-0 fade show alert-info alert-dismissible " role="alert">
                            <strong>Cette information est obligatoire !</strong>
                            </div>
                    </div>

                    <div class="col-10  mr-4 ml-4 mb-4 mt-4">
                        <label class="font-weight-bold font-italic text-right">Prénom</label>
                        <input type="text" name="prénom" class="form-control">
                        <div id="p" class="alert bg-transparent border-0 fade show alert-info alert-dismissible"
                            style="display:none;" role="alert">
                            <strong>Cette information est obligatoire !</strong>
                        </div>
                    </div>
                </div>

                <div class="form-row">

                    <div class="col-10  mr-4 ml-4 mb-4 mt-4">
                        <label class="font-weight-bold font-italic text-right">Email</label>
                        <input type="text" name="email" class="form-control">
                        <div id="em" class="alert bg-transparent border-0 fade show alert-info alert-dismissible"
                            style="display:none;" role="alert">
                            <strong>Cette information est obligatoire !</strong>
                        </div>
                    </div>

                    <div class="col-10  mr-4 ml-4 mb-4 mt-4">
                        <label class="font-weight-bold font-italic text-right">Téléphone</label>
                        <input type="text" name="tel" class="form-control">
                        <div id="telephone" style="display:none;"
                            class="alert bg-transparent border-0 fade show alert-info alert-dismissible" role="alert">
                            <strong>Cette information est obligatoire ! </strong>
                        </div>
                    </div>
                </div>

                <div class="form-group col-10  mr-4 ml-4 mb-4 mt-4">
                    <label class="font-weight-bold font-italic text-right">Votre Demande</label>
                    <textarea class="form-control" name="question" rows="4"></textarea>
                    <div id="q" class="alert bg-transparent border-0 fade show alert-info alert-dismissible"
                        style="display:none;" role="alert">
                        <strong>Cette information est obligatoire !</strong>
                    </div>
                </div>

<!--button envoyer-->

<div class="container-fluid col-4">

<div class="item-content text-center ml-4 pl-4 "> 
    <div class="row text-center d-flex mt-5 button2 col-md-6 rounded-4" style="width: 20rem;">
    <button type="submit" name="btn" class="btn btn-outline-success my-2 fst-italic rounded-4"
    value="Envoyer"> 


</div> 
</div>           


            </form>
        </div>
    </div>

<!--Footer-->

<div class="container-fluid ">

<?php
 include('footer.php');
 ?>

    <!--!!-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script> 

    <script src="jquery.js"></script>
    


</body>

</html>