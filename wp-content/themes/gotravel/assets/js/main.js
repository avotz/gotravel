(function($){
	
	var menu = $('.menu'),
		body = $('body');
		
  $('.header-btn-menu').on('click', function (e) {
    
      menu.toggle();

  });
	$('select').select2();
   $('.datepicker').pickadate({
   		closeOnSelect: true,
   });

   $(".owl-carousel").owlCarousel({
      center:true,
      items : 3,
      autoplay : false,
      loop : true,
      nav : true,
      navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
          margin: 30,
          responsiveClass:true,
          responsive:{
              0:{
                  items:1,
                  nav:true
              },
              /*480:{
                  items:2,
                  nav:true
              },*/
              640:{
                  items:2,
                  nav:true
              },
              1024:{
                  items:3,
                  nav:true
              }
              
            }
     
  });

   $('.request-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
    $('.book-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

    $('.shuttle-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
   $('.coupon-request').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

   fillSelectTours();

   function fillSelectTours(){
         
          
         $.ajax({
            type: 'GET',
            url: '/wp-json/wp/v2/tour',//'/api/get_post/?id='+ post_id +'&post_type=tour',
            
            success: function(data){
                var items = [];
                   
                      var select = $('select[name="tours[]"]').empty();
                      $.each(data, function(i,item) {
                        select.append( '<option value="'
                                             + $.trim(item.title.rendered) + '">'
                                             + item.title.rendered
                                             + '</option>' ); 
                      });

            },
            error:function(){
                console.log(e);
            }
        });
  

  }

  $(window).scroll(function () {
          if ($(this).scrollTop() > 80) {
              $('.book').addClass("fixed");
              
          } else {
              $('.book').removeClass("fixed");
              
          }
          /*if ($(this).scrollTop() > 300) {
              
              $('.scroll-top').addClass("on");
          } else {
             
              $('.scroll-top').removeClass("on");
          }*/
      });

 $('.book-popup-link').on('click',function (e) {
      
      
      //console.log($(this).data('activitie'))
      $('#book-tour-popup').find('select[name="tours[]"] option[value="'+ $(this).attr('data-title') +'"]').attr("selected",true).change();


      

      });

 $('.shuttle-popup-link').on('click',function (e) {
      
      
      //console.log($(this).data('activitie'))
      $('#book-shuttle-popup').find('select[name="shuttle"] option[value="'+ $(this).attr('data-title') +'"]').attr("selected",true).change();


      

      });
   

   ///wp-json/wp/v2/tour

})(jQuery);
	
