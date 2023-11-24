$(document).ready(function() {
    // alert("k")
    console.log($("#btn").val());
    $("#btn").click(function(){
        // alert("p");
    });
    $("#btn").click(function(){
        // alert("a")
        jq1();
        // validation();
    });

    function jq1(){
        var btn = true;

        //Nom 

        var nom = $("#nom").val();
        console.log(nom);

        if (nom === "") {
            btn = false;
            $("#n").show();
        }
        else if (btn = true) {
            $("#n").hide();
        };

        //Prénom

        var prénom = $("#prénom").val();
        console.log(prénom);

        if (prénom === "") {
            btn = false;
            $("#p").show();
        }

        else if (btn == true) {
            $("#p").hide();
        };

     

        //Email

        var email = $("#email").val();
        console.log(email);

        if (email === "") {
            btn = false;
            $("#em").show();
        }

        // else if ($('#email').filter(function() {
        // return this.email.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/);
        // }));
    
        else if(btn=true){
            $("#em").hide();
            };
    
       //Telephone

   var telephone = $("#tel").val();
   console.log(telephone);

   if (telephone === "") {
       btn = false;
       $("#telephone").show();
   }

   else if (btn == true) {
       $("#telephone").hide();
   };

       //Question 

    var question = $("textarea#question").val();
    console.log(question);

    if (question === "") {
        btn = false;
        $("#q").show();
        }
        else if (btn = true) {
            $("#q").hide();
        };

    };
});