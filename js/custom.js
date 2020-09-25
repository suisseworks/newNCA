jQuery(document).ready(function($) {


  var pageURL = $(location). attr("href");

  if(pageURL.search("co-investors.php") > -1) {
    $(".form_side_bar").hide();
  }
 
    const horizontalAccordions = $(".accordion.width");

    horizontalAccordions.each((index, element) => {
        const accordion = $(element);
        const collapse = accordion.find(".collapse");
        const bodies = collapse.find("> *");
        accordion.height(accordion.height(814));
        bodies.width(bodies.eq(0).width());
        collapse.not(".show").each((index, element) => {
            $(element).parent().find("[data-toggle='collapse']").addClass("collapsed");
        });
    });
})


// jQuery(function($) {
//   remove_horizontal_tabs();
// });
// jQuery(window).resize(function(){
//   remove_horizontal_tabs();
// });

// function remove_horizontal_tabs(){
//   var width = jQuery(window).width();
//    if (width < 768) {
//     jQuery(".accordion").removeClass('width');
//     jQuery(".accordion").addClass('mobilewidth');
//   }else{
//     jQuery(".accordion").addClass('width');
//   }
// }

// header active js

jQuery(function($) {
    var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $(".brk-nav ul li").each(function() {
        if ($(this).children().attr("href") == pgurl || $(this).children().attr("href") == '#') {
            $(this).addClass("active");
        } else if (pgurl == '') {
            $('.brk-nav ul li.home-menu').addClass("active");
        }

    });
});




jQuery(document).ready(function($){

$(".function_btn").click(function(){
  $(".functon_div").removeClass("current"); 
  $(this).addClass("current");
  $('#infocontent>.functon_div').hide();

    var tmp = this.id;
  $('#'+tmp+'content').fadeIn();
});
                  
});

jQuery(document).ready(function($){
            var vid = $('#my_video').RTOP_VideoPlayer({
                showFullScreen: true,
                showTimer: true,
                showSoundControl: true
            });
        });
      

jQuery(document).ready(function($) {

  var mouseX = 0, mouseY = 0;
  var xp = 0, yp = 0;
   
  $(document).mousemove(function(e){
    mouseX = e.pageX - 30;
    mouseY = e.pageY - 30; 
  });
    
  setInterval(function(){
    xp += ((mouseX - xp)/6);
    yp += ((mouseY - yp)/6);
    $("#circle").css({left: xp +'px', top: yp +'px'});
  }, 20);

});              

