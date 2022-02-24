$(document).ready(function(){
    
    $(".lupaSearch").on("click", function(){
        $(".lupaSearch").hide();
        $(".realSearchBarChestie").show();
    });

    $(".subTitleForCaseT").width(600);

    //for hovering
    $(".fbST").hover(function(){
        $(".fbT").css("color", "#1e90ff");
        $(".fbTT").css("color", "#1e90ff");
    }, function(){
        $(".fbT").css("color", "#104fac");
        $(".fbTT").css("color", "#104fac");
    });

    $(".fbSTS").hover(function(){
        $(".fbT2").css("color", "#1e90ff");
        $(".fbTT2").css("color", "#1e90ff");
    }, function(){
        $(".fbT2").css("color", "#104fac");
        $(".fbTT2").css("color", "#104fac");
    });

    $(".fbSTU").hover(function(){
        $(".fbT3").css("color", "#1e90ff");
        $(".fbTT3").css("color", "#1e90ff");
    }, function(){
        $(".fbT3").css("color", "#104fac");
        $(".fbTT3").css("color", "#104fac");
    });

});