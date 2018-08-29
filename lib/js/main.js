$(document).ready(function () {
        
    // Or use this to Open link in same window (similar to target=_blank)
    $(".catCont").click(function(){
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Show URL on Mouse Hover
    $(".catCont").hover(function () {
        window.status = $(this).find("a:first").attr("href");
    }, function () {
        window.status = "";
    });

});