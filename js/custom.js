jQuery(document).ready(function($) {


  var pageURL = $(location).attr("href");

  if(pageURL.search("co-investors.php") > -1 || pageURL.search("404page.php") > -1) {
    $(".form_side_bar").hide();
  }

 
    
})

function horizontal_tabs(){
const horizontalAccordions = jQuery(".accordion.width");
var width = jQuery(window).width();
  if (width > 768) {
    horizontalAccordions.each((index, element) => {
        const accordion = jQuery(element);
        const collapse = accordion.find(".collapse");
        const bodies = collapse.find("> *");
        accordion.height(accordion.height(814));
        bodies.width(bodies.eq(0).width());
        collapse.not(".show").each((index, element) => {
            jQuery(element).parent().find("[data-toggle='collapse']").addClass("collapsed");
        });
    });
  }
}

jQuery(function($) {
  remove_horizontal_tabs();
  horizontal_tabs();
});
jQuery(window).resize(function(){
  remove_horizontal_tabs();
  horizontal_tabs();
});

function remove_horizontal_tabs(){
  var width = jQuery(window).width();

   if (width < 768) {
    jQuery(".accrodian_main_col .accordion").removeClass('width');
    jQuery(".accrodian_main_col .accordion").addClass('mobilewidth');
    jQuery(".accrodian_main_col .collapse").removeClass("width")
  }else{
    jQuery(".accrodian_main_col .accordion").addClass('width');
  }

}

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

jQuery(document).ready(function($){
 
  $(document).on('click','.business_owner_form',function(){
    setTimeout(function(){ 
  $(".brk-theme-options__panel.panel-open").trigger("click");
  clickbtn();
  }, 100);
    
  });


  $(document).on('click','.business_owner_form_2',function(){
    setTimeout(function(){ 
  $(".brk-theme-options__panel.panel-open").trigger("click");
  clickbtn_2();
  }, 100); 
   
  });
  
  
});

function clickbtn(){
  jQuery("#info2").trigger("click");
}

function clickbtn_2(){
  jQuery("#info4").trigger("click");
}


// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();