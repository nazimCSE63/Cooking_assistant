$(document).ready(function(){
    
    $(".header_part .overlay_part .container #addClassID").on("click",function(){
        $(".header_part .overlay_part .container #box_part").addClass("hide_class");
    });
    
    
    $(".header_part .overlay_part .container #removeClassID").on("click",function(){
        $(".header_part .overlay_part .container #box_part").removeClass("hide_class");
    });

    
    $(".header_part .overlay_part .container .removeClassID2").on("click",function(){
    $(".header_part .overlay_part .container #box_part2").removeClass("hide_class");
    });
    
    $(".header_part .overlay_part .container .addClassID2").on("click",function(){
    $(".header_part .overlay_part .container #box_part2").addClass("hide_class");
    });
});