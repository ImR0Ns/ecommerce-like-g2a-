$(document).ready(function(){

    $(".singupbutt").click(function(){
        $(".first_checkk").hide();
        $(".secound_chh").show();
    });
    $(".continueButt").click(function(){
        $(".secound_chh").hide();
        $(".last_scs").show();
        $(".butonuAla").show();
    });


    //for hovering
    $(".sellers").hover(function(){
        $(".imgAiaBlana").hide();
        $(".forS").show();
        $(".buyss").css("color", "#104FAC");
        $(".buysss").css("color", "#104FAC");
        $(".sellers").css("border-color", "#104fac");
    }, function(){
        $(".imgAiaBlana").show();
        $(".forS").hide();
        $(".buyss").css("color", "rgba(179, 179, 179, 0.85)");
        $(".buysss").css("color", "rgba(179, 179, 179, 0.85)");
        $(".sellers").css("border-color", "rgba(179, 179, 179, 0.85)");
    });
    $(".buyer").hover(function(){
        $(".imgAiaBlana2").hide();
        $(".forB").show();
        $(".buyss1").css("color", "#104FAC");
        $(".buysss2").css("color", "#104FAC");
        $(".buyer").css("border-color", "#104fac");
    }, function(){
        $(".imgAiaBlana2").show();
        $(".forB").hide();
        $(".buyss1").css("color", "rgba(179, 179, 179, 0.85)");
        $(".buysss2").css("color", "rgba(179, 179, 179, 0.85)");
        $(".buyer").css("border-color", "rgba(179, 179, 179, 0.85)");
    });

    //for clicking
    $(".sellers").click(function(){
        $(this).hide();
        $(".forS2").show();
        $(".tils").show();
        $(".buyer").show();
        $(".buyer2").hide();
        $(".bbb").text("Buyer");
        $(".bb").text("seller");
    })
    $(".buyer").click(function(){
        $(this).hide();
        $(".buyer2").show();
        $(".tils").show();
        $(".sellers").show();
        $(".forS2").hide();
        $(".bbb").text("Seller");
        $(".bb").text("buyer");
    });
});