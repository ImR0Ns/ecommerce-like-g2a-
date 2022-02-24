$(document).ready(function(){
    $(".newPassCreate").on("change paste keyup", function() {
        //global var
        var val = $(this).val();
        var forCheck = val.split("");
        var upper = false;
        var special = false;
        var nr = false;

        //check upper
        for(var i in forCheck) {
            if(forCheck[i] === forCheck[i].toUpperCase() && forCheck[i] !== forCheck[i].toLowerCase()) {
                upper = true;
            }
        }
        if(upper) {
            $(".uppercaseLetters").html('<i class="fas fa-check"></i> Uppercase letters');
            $(".uppercaseLetters").css("color", "#104FAC");
        } else {
            $(".uppercaseLetters").html('<i class="fas fa-times"></i> Uppercase letters');
            $(".uppercaseLetters").css("color", "#B3B3B3");
        }

        //check special
        for(var k in forCheck) {
            if(forCheck[k] === "@" || forCheck[k] === "#" || forCheck[k] === "$" || forCheck[k] === "!" || forCheck[k] === "?" || forCheck[k] === "%") {
                special = true;
            }
        }
        if(special) {
            $(".specialCharacters").html('<i class="fas fa-check"></i> Special caracthers (@, #, $, !, ? etc )');
            $(".specialCharacters").css("color", "#104FAC");
        } else {
            $(".specialCharacters").html('<i class="fas fa-times"></i> Special caracthers (@, #, $, !, ? etc )');
            $(".specialCharacters").css("color", "#B3B3B3");
        }

        //check for number
        for(var j in forCheck) {
            var numb = Number(forCheck[j]);
            if(Number.isInteger(numb)) {
                nr = true;
            }
        }
        if(nr) {
            $(".atLeastOnEnR").html('<i class="fas fa-check"></i> At least one number');
            $(".atLeastOnEnR").css("color", "#104FAC");
        } else {
            $(".atLeastOnEnR").html('<i class="fas fa-times"></i>  At least one number');
            $(".atLeastOnEnR").css("color", "#B3B3B3");
        }

        //checking for bar 

        if(special && nr && upper) {
            $(".loadedThing").css("width", "327.59px");
        } else if(special && nr || special && upper || nr && upper) {
            $(".loadedThing").css("width", "200px");
        } else if(special || nr || upper) {
            $(".loadedThing").css("width", "100px");
        } else {
            $(".loadedThing").css("width", "0px");
        }

    });
    $(".eye").on("click", function(){
        var x = document.getElementById("pwdSee");
        var xy = document.getElementById("pwdSee2");
        if (x.type === "password" && xy.type === "password") {
            $(".eye").html('<i class="fas fa-eye-slash fa-2x"></i>');
            x.type = "text";
            xy.type = "text";
        } else {
            $(".eye").html('<i class="fas fa-eye fa-2x"></i>');
            x.type = "password";
            xy.type = "password";
        }
    });
});