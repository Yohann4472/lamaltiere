$(function() {
    $("#roueDeSecours").hide();
    $("#supportRouesDeSecours").hide();
    
    $("#survolRoues").hover(function(){
       $("#roueDeSecours").show();
    }, function(){
       $("#roueDeSecours").hide();
    });
    
    $("#survolSupport").hover(function(){
       $("#supportRouesDeSecours").show();
    }, function(){
       $("#supportRouesDeSecours").hide();
    });
});


