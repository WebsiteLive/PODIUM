$(document).ready(function(){

    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('header').toggleClass('toggle');
    });

    $(window).on('scroll load',function(){

        $('#menu').removeClass('fa0-times');
        $('header').removeClass('toggle');
    });
    $('a[href*="#"]').on('click',function(e){

        e.preventDefault();
    
        $('html, body').animate({
    
          scrollTop : $($(this).attr('href')).offset().top,
    
        },
          500, 
          'linear'
        );
    
      });
    
});

function getImage(imagename){
  var newimg=imagename.replace(/^.*\\/,"");
  $('#display-image').html(newimg);
}

