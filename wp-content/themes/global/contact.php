<?php 
/*
Template Name: contacto
*/
?>

<?php get_header("");?>


<!-- <form class="hidden" id=" contacto-form" method="post" action= "mailer-contacto.php">
      
      <input class="css-input col-xs-12" type="text"  name="name" placeholder="Name" required />
      <input class="css-input col-xs-12" type="text"  name="pais" placeholder="Country" required />
      <input class="css-input col-xs-12" type="text"  name="telephone" placeholder="Phone number" required />
      <input class="css-input col-xs-12" type="text"  name="email" placeholder="E-mail adsdress" required />

      <textarea class="css-input col-xs-12" name="message" rows="2" placeholder="Message" required></textarea>
      <input class="css-input col-xs-12" type="text"  name="how" placeholder="How did you discover us?" required />
      <input type="hidden" name="interest" value="Contacto">
    
    
    <BR>
    <button class="col-xs-12 send-btn-con btn-block">SEND</button>
</form> -->


 <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/back-contacto.jpg')" class="c-section-1">


   
   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-right contact-form">
      
      <h4> CONTÁCTO</h4>

            <?php the_block('formulario-contactenos'); ?>
              
            <!-- <input class="css-input col-xs-12 no-padding" type="text"  name="name" placeholder="Nombre Completo" required />
            <input class="css-input col-xs-12 no-padding" type="text"  name="name" placeholder="Nombre Completo" required /> -->
          
         <!--  
          <BR>
          <button class="col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3 send-btn-con ">SEND</button> -->
  
               
     

   </div>

   


 </div>


    

    



<?php get_footer("");?>
  

