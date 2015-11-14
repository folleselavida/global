    
    <div class=" col-xs-12" id="footer">   
   
        <div class="col-xs-12 col-md-2 footer-c1">
            <div class="col-md-12">
              <a href="/"> <img class="img-responsive logo-foot" src="https://s3.amazonaws.com/cannedhead.global/img/logo-global-azul.svg"></a>
            </div>
        </div>

        <div class="col-xs-12 col-md-3 pull-right">
            <div class="col-md-12">
              <br>
              <p class="footer-info">Carrera 7 No. 73-55 Oficina 1001 <br>
              Bogotá, Colombia</p>
            </div>
        </div>


          <div class="col-xs-12 no-padding footer-c3">
              <p>© GLOBAL GROUP. TODOS LOS DERECHOS RESERVADOS</p>
          </div>


      </div>
    </div>  
  </div> 


 
 <!-- producto1  Modal -->
 <div class="modal fade" id="producto1-modal" tabindex="-1", role="dialog", aria-labelledby="myModalLabel", aria-hidden="true">
   
   <div class="col-xs-12 no-padding cont-producto">
       
         
           
             <a class="close-modal" href="#">
               <i class="ion-close va center-block"></i>
             </a>


             <div id="product1" class="col-sm-12 col-md-5 c1-modal">
                 
             </div>

             <div id="product1" class="col-xs-12 col-md-7 c2-modal">
               
                <h2> Construcciones
                      <br><span>Modulares</span>
                </h2>

                <p>Ofrecemos soluciones modulares de todo tipo, ajustándonos a las necesidades del cliente mediante tecnología europea y los
                    mas altos estándares internacionales de calidad</p>

                <div class="col-xs-12 col-sm-6 col-md-6 no-padding">

                  <div class="col-xs-12 ">
                    <div class="col-xs-12 ser-description product-module ">
                    <h3 class="benefit-title">MODULARIDAD</h3>
                      <hr>
                      
                      <p>Nuestro sistema constructivo modular permite diseñar un producto personalizado de acuerdo a las necesidades
                      de cada cliente.</p>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="col-xs-12 ser-description product-module ">
                    <h3 class="benefit-title">RAPIDEZ</h3>
                      <hr>
                      
                      <p>La instalación de nuestros módulos se realiza en horas. Contamos con una red logística que nos permite ofrecer
                      a nuestros clientes la mayor eficiencia en los tiempos de entrega.</p>
                    </div> 
                  </div>

                </div>



                <div class="col-xs-12 col-sm-6 col-md-6 no-padding">

                  <div class="col-xs-12 ">
                    <div class="col-xs-12  ser-description product-module ">
                    <h3 class="benefit-title">MOVILIDAD</h3>
                      <hr>
                      
                      <p>Los módulos pueden ser trasladados,desarmados o armados vía fluvial,
                      terrestre o aérea.Transportándolos desarmados se obtiene un ahorro en costos de flete del 75%.   </p>     
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="col-xs-12  ser-description product-module ">
                    <h3 class="benefit-title">DURABILIDAD</h3>
                      <hr>
                      
                      <p>Están diseñados para resistir condiciones adversas como:
                      Ambientes marítimos, selváticos, terremotos, vientos y fríos extremos.</p>
                    </div>
                  </div>

                </div>



                <div class="col-xs-12 col-md-6 col-md-offset-6 no-padding ">
                  <div class="col-xs-12 col-sm-12  footer-cp">
                    <a data-toggle="modal" data-target="#contact-modal" href="">
                      <div class="col-xs-12  contact-btn visible-lg visible-md">
                        <div class="col-xs-12 contact-btn-3 va">
                          <div class="col-xs-8 va">
                            <p class="solicita">Solicita</p>
                            <p class="cotizacion">Tu Cotización</p>
                          </div>
                          <div class="col-xs-4 no-padding contact-btn-icon va">
                            <i class="fa fa fa-file-o cotiza-icon"></i>
                          </div>
                        </div>
                        
                      </div>
                    </a>
                  </div>

                </div>

             </div>
         
      
   </div>
 </div>




 

 <!-- contact Modal -->
 <div class="modal modal-contacto fade" id="contact-modal" tabindex="-1", role="dialog", aria-labelledby="myModalLabel", aria-hidden="true">
   
   <div class="modal-dialog modal-dialog-con">
       <div class="modal-content modal-content2 modal-reg">
         
           <div class="modal-body">

             
             <div class="col-xs-12">
                 <h4 class="modal-title"> <span> Regístrate </span><br>y nos comunicaremos contigo para realizar la cotización</h4><br>
                 <?php the_block('FORMULARIO CONTACTO-MODAL'); ?>
                 <form class="hidden" id="contact-popup" method="post" action= "mailer-contacto.php")>
                      
                    <input class="css-input col-xs-12" type="text"  name="name" placeholder="Nombre y Apellidos" required />
                    <input class="css-input col-xs-12" type="text"  name="pais" placeholder="País" required />
                    <input class="css-input col-xs-12" type="text"  name="telephone" placeholder="Teléfono" required />
                    <input class="css-input col-xs-12" type="text"  name="email" placeholder="Correo" required />

                    <textarea class="css-input col-xs-12" name="message" rows="2" placeholder="Mensaje" required></textarea>
                    <input class="css-input col-xs-12" type="text"  name="how" placeholder="¿Cómo escuchó de nosotros?" required />
                    <input type="hidden" name="interest" value="Contacto">
              


                    <button class="col-xs-12 send-btn-con btn-block">SOLICITAR COTIZACIÓN</button>
                 </form>
             </div>
           </div>
       </div>
   </div>
 </div>
 </div>


 <!-- Nou  Modal -->
   <div class="modal fade no-padding" id="nou" tabindex="-1", role="dialog", aria-labelledby="myModalLabel", aria-hidden="true">
      <div class="col-xs-12 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0  col-lg-3 col-lg-offset-9 pull-right header-pro ">
               <h1 class="req-propo"><a href="" c data-toggle="modal" data-target="#nou-contact">Solicita una propuesta</a></h1> 
      </div>
              <a class="close-modal close-modal2" href="#">
                 <i class="ion-close va center-block"></i>
               </a>

     <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/back-venta-nou.jpg')" class="col-xs-12 no-padding cont-nou">
       <div  class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 cont-nou-info no-padding">

          <div class="col-xs-12 col-sm-6 nou-gallery no-padding">


            <div id="rg-gallery" class="col-xs-12 no-padding rg-gallery">
              <div class="rg-thumbs">
                <!-- Elastislide Carousel Thumbnail Viewer -->
                <div class="es-carousel-wrapper ">
                  
                  <div class="es-carousel">
                    <ul>
                      <li><a href="#"><img src="https://s3.amazonaws.com/cannedhead.global/img/img-nou/thumb-nou-1.jpg" data-large="https://s3.amazonaws.com/cannedhead.global/img/img-nou/nou-4.jpg" alt="image01" data-description="" /></a></li>
                      <li><a href="#"><img src="https://s3.amazonaws.com/cannedhead.global/img/img-nou/thumb-nou-1.jpg" data-large="https://s3.amazonaws.com/cannedhead.global/img/img-nou/nou-1.jpg" alt="image02" data-description="" /></a></li>
                      <li><a href="#"><img src="https://s3.amazonaws.com/cannedhead.global/img/img-nou/thumb-nou-2.jpg" data-large="https://s3.amazonaws.com/cannedhead.global/img/img-nou/nou-2.jpg" alt="image03" data-description="" /></a></li>
                      <li><a href="#"><img src="https://s3.amazonaws.com/cannedhead.global/img/img-nou/thumb-nou-3.jpg" data-large="https://s3.amazonaws.com/cannedhead.global/img/img-nou/nou-3-1.jpg" alt="image04" data-description="" /></a></li>
                      
                    </ul>
                  </div>
                </div>
                <!-- End Elastislide Carousel Thumbnail Viewer -->
              </div><!-- rg-thumbs -->
            </div><!-- rg-gallery --> 

          </div>

          <div class="col-xs-12 col-sm-6 nou-specs no-padding">
            
            <div class="title-logo col-xs-12">
              <img class="  col-lg-6 col-lg-offset-3 va img-responsive" src="https://s3.amazonaws.com/cannedhead.global/img/logo-nou-blanco.svg">
            </div>

            <div class="title-specs col-xs-12">
              
            <p>NOU es un proyecto Boutique, con gran énfasis en diseño y exclusividad, que busca innovar distanciándose de las tendencias actuales de la arquitectura residencial del sector.
            <br>
            <br>
            El proceso de diseño interior y acabados de los apartamentos es totalmente personalizado, lo cual tendrá como resultante un producto final completamente único.
            
            <h4> CARACTERÍSTICAS</h4>
            
            Espectaculares vistas<br>
            11 Apartamentos<br>
            2 Ascensores<br>
            8 Parqueaderos de visitantes<br>
            Hasta 5 parqueaderos por apartamento<br>
            Ventanería termoacústica<br>
            Lobby con altura libre 3 m<br>
            Piscina<br>
            Gimnasio<br>
            Sauna<br>
            Salón de reuniones<br>
            Sala de conductores<br>
            Caldera<br>
            Planta eléctrica para suplencia total<br>
            Apartamentos con altura libre 2.8 m<br>
            Apartamentos de 204 y 298 mt2<br>

            
            </p>
            </div>
          </div>
          
       </div>
     </div>



   </div>

  
   <!-- contact Modal -->
  <div class="modal modal-contacto fade" id="nou-contact" tabindex="-1", role="dialog", aria-labelledby="myModalLabel", aria-hidden="true">
    
    <div class="modal-dialog modal-dialog-con">
        <div class="modal-content modal-content2 modal-reg">
          
            <div class="modal-body">

              <a class="close-modal close-modal3" href="#">
                 <i class="ion-close va center-block"></i>
               </a>
              
              <div class="col-xs-12">
                  <h4 class="modal-title"> <span> Regístrate</span><br>y nos comunicaremos lo mas pronto posible</h4><br>
                  <?php the_block('formulario-nou'); ?>
                  
              </div>
            </div>
        </div>
    </div>
  </div>
  </div>

  

   <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">  
     <div class="rg-image-wrapper">
       {{if itemsCount > 1}}
         <div class="rg-image-nav">
           <a href="#" class="rg-image-nav-prev pull-left"><i class="ion-chevron-left va center-block"></i></a>
           <a href="#" class="rg-image-nav-next pull-right"><i class="ion-chevron-right va center-block"></i></a>
         </div>
       {{/if}}
       <div class="rg-image"></div>
       <div class="rg-loading"></div>
       <div class="rg-caption-wrapper">
         <div class="rg-caption" style="display:none;">
           <p></p>
         </div>
       </div>
     </div>
   </script>
   
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
   <script type="text/javascript" src="https://s3.amazonaws.com/cannedhead.global/img/img-nou/gallery-nou.js"></script>

   
  <?php wp_footer(); ?>
    <!-- Main js 
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/index.js"></script>

  <script type="text/javascript" src="js/classie.js"></script>
  <script type="text/javascript" src="js/off-canvas.js"></script>
  <script type="text/javascript" src="js/typed.js"></script>
  <script type="text/javascript" src="js/viewportchecker.js"></script>
  <script type="text/javascript" src="js/smooth-scroll.js"></script>
  <script type="text/javascript" src="js/fluidvids.js"></script>
  <script type="text/javascript" src="js/jquery.tooltipster.js"></script>
  <script type="text/javascript" src="js/slider.js"></script>
  <script type="text/javascript" src="js/gallery.js"></script>
  <script type="text/javascript" src="js/bootsrap.min.js"></script>


  <script type="text/javascript" src="js/jquery.easings.min.js"></script>
  <script type="text/javascript" src="js/jquery.slimscroll.js"></script>
  <script type="text/javascript" src="js/jquery.fullPage.js"></script>
  <script type="text/javascript" src="js/unslider.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  <script src="js/jquery.vide.js"></script>
  -->
  



 

  <script type="text/javascript">
   





    $(document).ready(function() {
      smoothScroll.init();


      /*Carousel*/

      var $item = $('.carousel .item');
      var $wHeight = $(window).height();

      $item.height($wHeight); 
      $item.addClass('full-screen-carousel');

      var $numberofSlides = $('.item').length;
      var $currentSlide = Math.floor((Math.random() * $numberofSlides));

      $('.carousel-indicators li').each(function(){
        var $slideValue = $(this).attr('data-slide-to');
        if($currentSlide == $slideValue) {
          $(this).addClass('active');
          $item.eq($slideValue).addClass('active');
        } else {
          $(this).removeClass('active');
          $item.eq($slideValue).removeClass('active');
        }
      });

      $('.back-banner').each(function() {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
          'background-image' : 'url(' + $src + ')',
          'background-color' : $color
        });
        $(this).remove();
      });

      $(window).on('resize', function (){
        $wHeight = $(window).height();
        $item.height($wHeight);
      });

      $('.carousel').carousel({
        interval: 3000,
        pause: "false"
      });


   
      //Forms

      $('#home-form').ajaxForm(function() { 
        alert("¡Pronto nos comunicaremos contigo!"); 
        $('#home-form')[0].reset();
      });  

      $('#info-free').ajaxForm(function() { 
        alert("¡Pronto nos comunicaremos contigo!"); 
        $('#info-free')[0].reset();
      }); 

       $('#contacto-form').ajaxForm(function() { 
        alert("¡Pronto nos comunicaremos contigo!"); 
        $('#contacto-form')[0].reset();
      }); 

      $('#vacante-form').ajaxForm(function() { 
        alert("¡Pronto nos comunicaremos contigo!"); 
        $('#vacante-form')[0].reset();
      });  

       $('#contact-popup').ajaxForm(function() { 
        alert("¡Pronto nos comunicaremos contigo!"); 
        $('#contact-popup')[0].reset();
      });  


      

      //gallery-proyecto
      $('.banner-proyecto').unslider({
        speed: 500,               //  The speed to animate each slide (in milliseconds)
        delay: 3000,              //  The delay between slide animations (in milliseconds)
        complete: function() {},  //  A function that gets called after every slide animation
        keys: false,               //  Enable keyboard (left, right) arrow shortcuts
        dots: true,               //  Display dot navigation
        fluid: false              //  Support responsive design. May break non-responsive designs
      });

        
      
      
      //MEnu
      $(".serLink").hover(
         function() {
            $(".dropSer").addClass("hover-link animated fadeIn");
         }
      );

       $(".serLink2").hover(
         function() {
            $(".dropSer2").addClass("hover-link animated fadeIn");
         }
      );

      $(".serLink3").hover(
         function() {
            $(".dropSer3").addClass("hover-link animated fadeIn");
         }
      );


     



      $(".navbar-smart").hover(
         function() {
            
         },
         function() {
            $(".dropSer").removeClass("hover-link animated slideInUp");
         }
      );

      $(".navbar-smart").hover(
         function() {
            
         },
         function() {
            $(".dropSer2").removeClass("hover-link animated slideInUp");
         }
      );

      $(".navbar-smart").hover(
         function() {
            
         },
         function() {
            $(".dropSer3").removeClass("hover-link animated slideInUp");
         }
      );












      $(".dropSer").hover(
         function() {
            
         },
         function() {
            $(".dropSer").removeClass("hover-link animated slideInUp");
         }
      );


      $(".dropSer2").hover(
         function() {
            
         },
         function() {
            $(".dropSer2").removeClass("hover-link animated slideInUp");
         }
      );


      $(".dropSer3").hover(
         function() {
            
         },
         function() {
            $(".dropSer3").removeClass("hover-link animated slideInUp");
         }
      );








      $(".link-menu").hover(
         function() {
           $(".dropSer").removeClass("hover-link animated slideInUp"); 
         },
         function() {
            
         }
      );

      $(".link-menu").hover(
         function() {
           $(".dropSer2").removeClass("hover-link animated slideInUp"); 
         },
         function() {
            
         }
      );

      $(".link-menu").hover(
         function() {
           $(".dropSer3").removeClass("hover-link animated slideInUp"); 
         },
         function() {
            
         }
      );









      $(".link-menu2").hover(
         function() {
           $(".dropSer2").removeClass("hover-link animated slideInUp"); 
         },
         function() {
            
         }
      );


      $(".link-menu2").hover(
         function() {
           $(".dropSer3").removeClass("hover-link animated slideInUp"); 
         },
         function() {
            
         }
      );





      $(".link-menu3").hover(
          function() {
            $(".dropSer").removeClass("hover-link animated slideInUp"); 
          },
          function() {
             
          }
       );

      






      $(".serLink-h").hover(
         function() {
          $(".dropSer-h").addClass("hover-link animated fadeIn");
         }
      );

      $(".home-lg-nav").hover(
         function() {
            
         },
         function() {
          $(".dropSer-h").removeClass("hover-link animated slideInUp");
         }
      );

      $(".dropSer-h").hover(
         function() {
            
         },
         function() {
            $(".dropSer-h").removeClass("hover-link animated slideInUp");
         }
      );

      $(".link-menu-h").hover(
         function() {
           $(".dropSer-h").removeClass("hover-link animated slideInUp"); 
         },
         function() {
            
         }
      );

      // portfolio
      $('.gallery ul li a').click(function() {
          var itemID = $(this).attr('href');
          $('.gallery ul').addClass('item_open');
          $(itemID).addClass('item_open');
          return false;
      });
      $('.close-gallery2').click(function() {
          $('.port, .gallery ul').removeClass('item_open');
          return false;
      });

      $(".gallery ul li a").click(function() {
          $('html, body').animate({
              scrollTop: parseInt($("#top").offset().top)
          }, 400);
      });


      

      

      
   
      //gallery
      jQuery('.grid-gallery').magnificPopup({
        
          delegate: 'a',
          type: 'image',
          mainClass: 'mfp-img-mobile',
          gallery: {
           enabled: true,
           navigateByImgClick: true,
           preload: [0,1]
          }
      });

      //MENU-MOBILE
      $("#open-button").click(function(){
          if($(this).hasClass("open")){
            $('#open-button').removeClass("active").removeClass("open");

          }else
          {$("#close-button").addClass("open").addClass("active");};
      });

      $("#close-button").click(function(){
          if($(this).hasClass("open")){$('#open-button').removeClass("active").removeClass("open");
          }else{$("#close-button").addClass("open").addClass("active");};
      });

      //Animations
        
      //Show Navbar Desktop
      if($('.menu-wrap').css('display') === 'none'){
          //HOVER ARTICLE
          $('.post-module').hover(function() {
              $(this).find('.description').stop().animate({height: "toggle", opacity: "toggle"}, 300);
            });
      }



      //full page per site
      $( ".down-slide" ).click(function() {
        $.fn.fullpage.moveSectionDown();
         
      });

      //full page per site
      $( ".close-modal" ).click(function() {
            
             $('#producto1-modal').modal('hide');
         
      });




       //full page per site
      $( ".close-modal2  " ).click(function() {
            
             $('#institucional, #nou, #comercial-hotelero, #oficinas, #residencial, #condominios').modal('hide');
         
      });


       //full page per site
      $( ".close-modal3  " ).click(function() {
            
             $('#nou-contact, #nou').modal('hide');
         
      });















      if (document.documentElement.clientWidth < 768) {

        $(window).scroll(function() {
            $('.close-gallery2').css('top', $(this).scrollTop() + "px");
        });

      }
 

        
      if (document.documentElement.clientWidth > 1200) {
        // scripts
        

        $('#fullpage').fullpage({
           //Navigation
           menu: false,
           lockAnchors: false,
           anchors:['section','section','section','section','section'],
           navigation: false,
           navigationPosition: 'right',
           navigationTooltips: ['firstSlide', 'secondSlide' ,'thirdSlide', 'fourthSlide','fifthPage'],
           showActiveTooltip: false,
           slidesNavigation: false,
           slidesNavPosition: 'bottom',

           //Scrolling
           css3: true,
           scrollingSpeed: 700,
           autoScrolling: true,
           fitToSection: true,
           fitToSectionDelay: 1000,
           scrollBar: false,
           easing: 'easeInOutCubic',
           easingcss3: 'ease',
           loopBottom: false,
           loopTop: false,
           loopHorizontal: true,
           continuousVertical: false,
           normalScrollElements: '#element1, .element2',
           scrollOverflow: false,
           touchSensitivity: 15,
           normalScrollElementTouchThreshold: 5,

           //Accessibility
           keyboardScrolling: true,
           animateAnchor: true,
           recordHistory: true,

           //Design
           controlArrows: true,
           verticalCentered: true,
           resize : false,
           sectionsColor : ['#ccc', '#fff'],
           paddingTop: '3em',
           paddingBottom: '10px',
           fixedElements: '#header, .footer',
           responsiveWidth: 0,
           responsiveHeight: 0,

           //Custom selectors
           sectionSelector: '.section',
           slideSelector: '.slide',

           //events
           onLeave: function(index, nextIndex, direction){},
           afterLoad: function(anchorLink, index){},
           afterRender: function(){},
           afterResize: function(){},
           afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
           onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
        });


         if (window.location.href.indexOf("mision2") > -1) {

            setTimeout(
              function() 
              {
                //window.history.pushState('', 'New Page Title', "#section");
                $.fn.fullpage.moveTo(2);
              }, 500);
           
         }

         if (window.location.href.indexOf("politicas2") > -1) {

            setTimeout(
              function() 
              {
                //window.history.pushState('', 'New Page Title', "#section");
                $.fn.fullpage.moveTo(3);
              }, 500);
           
         }

         if (window.location.href.indexOf("hseq") > -1) {

            setTimeout(
              function() 
              {
                //window.history.pushState('', 'New Page Title', "#section");
                $.fn.fullpage.moveTo(4);
              }, 500);
           
         }


         if (window.location.href.indexOf("faq") > -1) {

            setTimeout(
              function() 
              {
                //window.history.pushState('', 'New Page Title', "#section");
                $.fn.fullpage.moveTo(2);
              }, 500);
           
         }

         if (window.location.href.indexOf("beneficios") > -1) {

            setTimeout(
              function() 
              {
                //window.history.pushState('', 'New Page Title', "#section");
                $.fn.fullpage.moveTo(2);
              }, 500);
           
         }

         if (window.location.href.indexOf("nosotros") > -1) {


            $( ".menu2-list a:nth-child(1)" ).attr("href", "#").click(function() {
                    $.fn.fullpage.moveTo(1);
                  });
            $( ".menu2-list a:nth-child(2)" ).attr("href", "#").click(function() {
                    $.fn.fullpage.moveTo(2);
                  });
            $( ".menu2-list a:nth-child(3)" ).attr("href", "#").click(function() {
                    $.fn.fullpage.moveTo(3);
                  });
            $( ".menu2-list a:nth-child(4)" ).attr("href", "#").click(function() {
                    $.fn.fullpage.moveTo(4);
                  });

          
            
           
         }


         if (window.location.href.indexOf("productos") > -1) {

          
            $( ".menu-producto a:nth-child(3)" ).attr("href", "#").click(function() {
                    $.fn.fullpage.moveTo(2);
                  });
      
           
         }

          if (window.location.href.indexOf("faq") > -1) {

          
            $( ".menu-producto a:nth-child(2)" ).attr("href", "#").click(function() {
                    $.fn.fullpage.moveTo(2);
                  });
      
           
         }





        



      }
            
      

      /*parallax effect*/ 
      jQuery("#banner-para").mousemove(
        function(e){
          
          var offset = jQuery(this).offset();
          var xPos = e.pageX - offset.left;
          var yPos = e.pageY - offset.top;

          var mouseXPercent = Math.round(xPos / jQuery(this).width() * 100);
          var mouseYPercent = Math.round(yPos / jQuery(this).height() * 100);

          jQuery(this).children('img').each(
            function(){
              var diffX = jQuery('#Parallax').width() - jQuery(this).width();
              var diffY = jQuery('#Parallax').height() - jQuery(this).height();

              var myX = diffX * (mouseXPercent / 2500);

              var myY = diffY * (mouseYPercent / 2500);


              var cssObj = {
                'left': myX + 'px',
                'top': myY + 'px'
              }
              
              jQuery(this).animate({left: myX, top: myY},{duration: 50, queue: false, easing: 'linear'});
            }
          );
        }
      );

      jQuery("#banner-para-contact").mousemove(
        function(e){
          
          var offset = jQuery(this).offset();
          var xPos = e.pageX - offset.left;
          var yPos = e.pageY - offset.top;

          var mouseXPercent = Math.round(xPos / jQuery(this).width() * 100);
          var mouseYPercent = Math.round(yPos / jQuery(this).height() * 100);

          jQuery(this).children('img').each(
            function(){
              var diffX = jQuery('#Parallax').width() - jQuery(this).width();
              var diffY = jQuery('#Parallax').height() - jQuery(this).height();

              var myX = diffX * (mouseXPercent / 2500);

              var myY = diffY * (mouseYPercent / 2500);


              var cssObj = {
                'left': myX + 'px',
                'top': myY + 'px'
              }
              
              jQuery(this).animate({left: myX, top: myY},{duration: 50, queue: false, easing: 'linear'});

            }
          );

        }
      );

      /*analytics*/
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-57378308-1', 'auto');
      ga('send', 'pageview');

      //slider
      $.fn.slider = function (options){
        "use strict";

        var _$dom = this,
          _$next,
          _$prev,
          _$sliderWrap,
          _$sliderItems,
          _itemCount,
          _itemWidth,
          _wrapWidth,
          _activeClass,
          _position;

        /**
         * DEFAULT OPTIONS
         */
        var defaults = {
          autoPlay : true,
          autoPlayDelay : 5000,
          duration : 350,
          controls : true,
          prevButton : 'js-slider__prev',
          nextButton : 'js-slider__next'
        };

        var _settings = $.extend(defaults, options);

        /**
         * INITIALIZE
         */
        var init = function () {
          _$sliderWrap = $('.js-slider__wrap');
          _$sliderItems = $('.js-slider__item');
          _itemCount = _$sliderItems.length;
          _activeClass = 'slider__item--active';

          configureControls();

          updateSize();
          updateSize();

          autoPlay();

          bindEventlisteners();
        };

        /**
         * BIND EVENT LISTENERS
         */
        var bindEventlisteners = function () {
          _$next.on( 'click', function () {
              nextSlide();
          });

          _$prev.on( 'click', function () {
              prevSlide();
          });
        };

        /**
         * CONFIGURE CONTROLS
         *
         * when controls true select prev/next button
         */
        var configureControls = function () {
          if (!_settings.controls) {
              return;
          }

          _$next =  $('.' +  _settings.nextButton);
          _$prev =  $('.' +  _settings.prevButton);
        };

        /**
         * NEXT SLIDE
         *
         * set active class to next slide
         *
         * if position is  greater than/equal to the amount if Items go to next slide
         * else set margin-left of ul to next slide
         */
        var nextSlide = function () {
          var _position = getActivateSlide() + 1;

          if (_position >= _itemCount) {
              resetSlider();
          } else {
              slideTo(_position);
          }
        };

        /**
         * PREVIOUS SLIDE
         *
         * set active class to previous slide
         * set position down by 1
         *
         * if position is less than to 0 go to last slide
         * else set margin-left of ul down to prev slide
         */
        var prevSlide = function () {
          var _position = getActivateSlide() - 1;

          if (_position < 0) {
              lastSlide();
          } else {
              slideTo(_position);
          }
        };

        /**
         * SLIDE TO
         *
         * slide to next/prev slide
         * @param position
         */
        var slideTo = function (position) {
            _$sliderWrap.animate({
                marginLeft: - (_itemWidth * position)
            }, _settings.duration );

            _$sliderItems.eq(getActivateSlide()).removeClass(_activeClass);
            _$sliderItems.eq(position).addClass(_activeClass);
        };

        /**
         * RESET SLIDER
         *
         * set ul margin-left to 0
         * and add active class to the first slide item
         */
        var resetSlider = function () {
            slideTo(0);
        };

        /**
         * LAST SLIDE
         *
         * set ul margin-left to the value of last slide
         * and add active class to the last slide item
         */
        var lastSlide = function () {
          slideTo(_itemCount -1);
        };

        /**
         * GET ACTIVE SLIDE
         *
         * set the index of active slide to position
         * and remove active class from current active slide
         */
        var getActivateSlide = function () {
          var _$activeItem =  $('.' + _activeClass);
          return _$activeItem.index();
        };

        /**
         * UPDATE SIZE
         *
         * get slider width
         * calculate slideWrap width
         *
         * set sliderItem width
         * set sliderWrap width
         */
        var updateSize = function () {
          _itemWidth = _$dom.outerWidth();
          _wrapWidth = _itemCount * _itemWidth;

          _$sliderItems.css('width', _itemWidth);
          _$sliderWrap.css('width', _wrapWidth);
        };

        /**
         * AUTOPLAY
         */
        var autoPlay = function () {
          if(!_settings.autoPlay) {
              return;
          }

          setInterval(function () {
              nextSlide();
          }, _settings.autoPlayDelay);
        };

        /**
         * RESIZE
         *
         * update size on resize
         */
        $( window ).resize(function () {
            updateSize();
        });

        init();
      };

      $(function(){
          $('.js-slider').slider({
            autoPlay : false,
            autoPlayDelay : 2000,
            duration : 500,
            controls: true
          });
      });


      // full page

           




                          

     
    });

    /* docuemnt ready end*/
    /*Fluid vids*/
    fluidvids.init({
      selector: ['iframe'],
      players: ['www.youtube.com', 'player.vimeo.com']
    });    

    document.querySelector( ".nav-toggle" )
      .addEventListener( "click", function() {
        this.classList.toggle( "active" );
    });
  </script>   


</body>
</html>

