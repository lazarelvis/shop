$(".img1").mouseenter(function(){
    $(".img1").hide();
    $(".img2").show();
});
$(".img2").mouseleave(function(){
    $(".img2").hide();
    $(".img1").show();
});