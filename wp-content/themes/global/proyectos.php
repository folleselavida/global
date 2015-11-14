<?php 
/*
Template Name: proyectos
*/
?>

<?php get_header();?>


 <!--  <header class="col-xs-12 header-pro ">
      <h1 class="">PROYECTOS<br></h1>
  </header>
 -->

 <style>

  @media (min-width: 320px) { 

.accordion-proy {
  margin-top: 65px;
  width: 100%;
  height: auto;
  overflow: hidden;
}

.accordion-proy ul {
  width: 100%;
  height:100%;
  display: table;
  table-layout: fixed;
  margin: 0;
  padding: 0;
}

.accordion-proy ul li {
  display: table-cell;
  vertical-align: bottom;
  position: relative;
  width: 100%;
  height: 400px;
  float:left;
  background-position: center center;
  transition: all 500ms ease;
  margin: 0em;
}

.accordion-proy ul li div {
  display: block;
  overflow: hidden;
  width: 100%;
  height:100%;
}

.accordion-proy ul li div a {
  display: block;
  height:100%;
  width: 100%;
  position: relative;
  z-index: 3;
  vertical-align: bottom;
  padding: 15px 20px;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.4);
  color: #fff;
  text-decoration: none;
  font-family: Open Sans, sans-serif;
  transition: all 200ms ease;
}

.accordion-proy ul li div a * {
  opacity: 0;
  margin: 0;
  width: 100%;
  text-overflow: ellipsis;
  position: relative;
  z-index: 5;
  white-space: nowrap;
  overflow: hidden;
  -webkit-transform: translateX(-20px);
  transform: translateX(-20px);
  -webkit-transition: all 400ms ease;
  transition: all 400ms ease;
}

.accordion-proy ul li div a h2 {
  font-family: Montserrat, sans-serif;
  text-overflow: clip;
  font-size: 20px;
  text-transform: uppercase;
  margin-bottom: 2px;
  top: 160px;
  opacity:1 !important;
  text-align: center;

  /*center vertical*/
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
}

.accordion-proy ul li div a p {
  top: 160px;
  font-size: 13.5px;
}

.accordion-proy ul li:nth-child(1) { background-size: auto 180%;}

.accordion-proy ul li:nth-child(2) { background-size: auto 180%;}

.accordion-proy ul li:nth-child(3) { background-size: auto 180%;}

.accordion-proy ul li:nth-child(4) { background-size: auto 180%;}

.accordion-proy ul li:nth-child(5) { background-size: auto 180%;}

.accordion-proy ul li:nth-child(6) { background-size: auto 180%;}

.accordion-proy ul:hover li { width: 100%; }

.accordion-proy ul:hover li:hover { width: 100%; }

.accordion-proy ul:hover li:hover a { background: rgba(0, 0, 0, 0.4); }

.accordion-proy ul:hover li:hover a * {
  opacity: 1;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

}



@media (min-width: 520px) { 

    .accordion-proy ul li:nth-child(1) { background-size: 100% auto;}

    .accordion-proy ul li:nth-child(2) { background-size: 100% auto;}

    .accordion-proy ul li:nth-child(3) { background-size: 100% auto;}

    .accordion-proy ul li:nth-child(4) { background-size: 100% auto;}

    .accordion-proy ul li:nth-child(5) { background-size: 100% auto;}

    .accordion-proy ul li:nth-child(6) { background-size: 100% auto;}


  }


  @media (min-width: 992px) { 

.accordion-proy {
  margin-top: 0px;
  width: 100% !important;
  height: 100% !important;
  overflow: hidden !important;
}

.accordion-proy ul {
  width: 100%;
  height:100%;
  display: table;
  table-layout: fixed;
  margin: 0;
  padding: 0;
}

.accordion-proy ul li {
  display: table-cell;
  vertical-align: bottom;
  position: relative;
  width: 16.666%;
  height: 100%;
  float: none;
  background-position: center center;
  transition: all 500ms ease;
}

.accordion-proy ul li div {
  display: block;
  overflow: hidden;
  width: 100%;
  height:100%;
}

.accordion-proy ul li div a {
  display: block;
  height:100%;
  width: 100%;
  position: relative;
  z-index: 3;
  vertical-align: bottom;
  padding: 15px 20px;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.4);
  color: #fff;
  text-decoration: none;
  font-family: Open Sans, sans-serif;
  transition: all 200ms ease;
}

.accordion-proy ul li div a * {
  opacity: 0;
  margin: 0;
  width: 100%;
  text-overflow: ellipsis;
  position: relative;
  z-index: 5;
  white-space: nowrap;
  overflow: hidden;
  -webkit-transform: translateX(-20px);
  transform: translateX(-20px);
  -webkit-transition: all 400ms ease;
  transition: all 400ms ease;
}

.accordion-proy ul li div a h2 {
  font-family: Montserrat, sans-serif;
  text-overflow: clip;
  font-size: 20px;
  text-transform: uppercase;
  margin-bottom: 2px;
  top: 160px;
  opacity:1 !important;
  text-align: center;

  /*center vertical*/
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
}

.accordion-proy ul li div a p {
  top: 160px;
  font-size: 13.5px;
}

.accordion-proy ul li:nth-child(1) { background-size: auto 100%; }

.accordion-proy ul li:nth-child(2) { background-size: auto 100%; }

.accordion-proy ul li:nth-child(3) { background-size: auto 100%; }

.accordion-proy ul li:nth-child(4) { background-size: auto 100%; }

.accordion-proy ul li:nth-child(5) { background-size: auto 100%; }

.accordion-proy ul li:nth-child(6) { background-size: auto 100%; }

.accordion-proy ul:hover li { width: 8%; }

.accordion-proy ul:hover li:hover { width: 10%; }

.accordion-proy ul:hover li:hover a { background: rgba(0, 0, 0, 0.4); }

.accordion-proy ul:hover li:hover a * {
  opacity: 1;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}


  }


/*
  @media (min-width: 320px) {  {



.accordion-proy { 
    height: auto !important; 
    margin-top: 65px;
}

.accordion-proy ul li{
    float: left;
    height: 400px;
    margin: 0em 0;
}




.accordion-proy ul li,
.accordion-proy ul li:hover,
.accordion-proy ul:hover li,
.accordion-proy ul:hover li:hover {
  position: relative;
  display: table;
  table-layout: fixed;
  width: 100%;
  -webkit-transition: none;
  transition: none;
}
}*/



</style>
  
<div class="accordion-proy">
  <ul>
    <li style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/realizado-institucional.jpg')">
      <div> <a id="proy-realidado" data-toggle="modal" data-target="#institucional" href="#">
        <h2>INSTITUCIONAL</h2>
        <!-- <p>Description 1</p> -->
        </a> </div>
    </li>


    <li style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/realizado-comercial-hotelero.jpg')">
      <div> <a id="proy-realidado" data-toggle="modal" data-target="#comercial-hotelero" href="#">
        <h2>COMERCIAL <br> HOTELERO</h2>
       <!--  <p>Description 2</p> -->
        </a> </div>
    </li>


    <li style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/realizado-oficinas.jpg')">
      <div> <a id="proy-realidado" data-toggle="modal" data-target="#oficinas" href="#">
        <h2>OFICINAS</h2>
      <!--   <p>Description 3</p> -->
        </a> </div>
    </li>


    <li style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/realizado-residencial.jpg')">
      <div> <a id="proy-realidado" data-toggle="modal" data-target="#residencial" href="#">
        <h2>RESIDENCIAL</h2>
        <!-- <p>Description 4</p> -->
        </a> </div>
    </li>


    <li style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/realizado-condominios.jpg')">
      <div> <a id="proy-realidado" data-toggle="modal" data-target="#condominios" href="#">
        <h2>CONDOMINIOS</h2>
        <!-- <p>Description 5</p> -->
        </a> </div>
    </li>


    <li style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/realizado-modular.jpg')">
      <div> <a href="http://www.smartbrix.com" target="_blank">
     
            <h2>ESPACIOS <br>MODULARES</h2>
            <!-- <p>Description 6</p> -->
            </a> </div>
  
    </li>
  </ul>
</div>





<!-- producto1  Modal -->
 <div class="modal fade no-padding" id="institucional" tabindex="-1", role="dialog", aria-labelledby="myModalLabel", aria-hidden="true">
   
     <div class="col-xs-12 header-pro ">
              <h1 class="">INSTITUCIONAL<br></h1>
              
            </div>
            <a class="close-modal close-modal2" href="#">
               <i class="ion-close va center-block"></i>
             </a>

   <div class="col-xs-12 no-padding cont-producto">

           

            

    <div class="col-xs-12 no-padding proyectos institucional">


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/institucional-nogal.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> NOGAL</h4>
          <p> Carrera 7 con calle 78 <br>
              45.000 mts2 <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/institucional-elsalitre.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> PROYECTO EL SALITRE</h4>
          <p> Carrera 7 con calle 78 <br>
              250 hectáreas <br>
              Valle del Sopó  </p>
        </div>
       </div>

       

    </div>     
         
   </div>
 </div>

<!-- End Modal -->







<!-- comercial hotelero  Modal -->
 <div class="modal fade no-padding" id="comercial-hotelero" tabindex="-1", role="dialog", aria-labelledby="myModalLabel", aria-hidden="true">
   
     <div class="col-xs-12 header-pro ">
              <h1 class="">COMERCIAL HOTELERO<br></h1>
              
            </div>
            <a class="close-modal close-modal2" href="#">
               <i class="ion-close va center-block"></i>
             </a>

   <div class="col-xs-12 no-padding cont-producto">

           

            

    <div class="col-xs-12 no-padding proyectos institucional">


        
        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/comercia-hotelero-metro127.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> METRO 127</h4>
           <p> Carrera 15 con calle 127 <br>
               17.000 mts2 <br>
               Bogotá, Colombia  </p>
         </div>
        </div>



       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/comercia-hotelero-centro93.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> CENTRO 93</h4>
          <p> Carrera 15 con calle 93 <br>
              40.000 mts2 <br>
              Bogotá, Colombia  </p>
        </div>
       </div>


       

       

    </div>     
         
   </div>
 </div>

<!-- End Modal -->









<!-- Oficinas  Modal -->
 <div class="modal fade no-padding" id="oficinas" tabindex="-1", role="dialog", aria-labelledby="myModalLabel", aria-hidden="true">
   
     <div class="col-xs-12 header-pro ">
              <h1 class="">OFICINAS<br></h1>
              
            </div>
            <a class="close-modal close-modal2" href="#">
               <i class="ion-close va center-block"></i>
             </a>

   <div class="col-xs-12 no-padding cont-producto">

           

            

    <div class="col-xs-12 no-padding proyectos">


        
        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-aseguradora.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> AGURADORA DEL VALLE</h4>
           <p> Calle 26 con carrera 10 <br>
               10.000 mts2<br>
               Bogotá, Colombia   </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-aurora.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> SEGUROS AURORA</h4>
           <p> Carrera 7 con calle 73 <br>
               10.000 mts2<br>
               Bogotá, Colombia   </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-centroempresarial.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> CENTRO EMPRESARIAL CORPORATIVO</h4>
           <p>Carrera 9 con calle 98 <br>
               11.000 mts2<br>
               Bogotá, Colombia   </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-plazuela.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> PLAZUELA</h4>
           <p>Carrera 15 con calle 90 <br>
               4.000 mts2<br>
               Bogotá, Colombia   </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-correcol.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> CORRECOL</h4>
           <p>Calle 93A con carrera 11 <br>
               5.500 mts2<br>
               Bogotá, Colombia   </p>
         </div>
        </div>

        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-interamericana.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> INTERAMERICANA DE SEGUROS</h4>
           <p>Calle 78 con carrera 9 <br>
               10.000 mts2<br>
               Bogotá, Colombia   </p>
         </div>
        </div>

        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-carloerba.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> CARLO ERBA</h4>
           <p>Carrera 13 con calle 38 <br>
              11.500 mts2<br>
               Bogotá, Colombia   </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-calle72.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> CALLE 72</h4>
           <p>Calle 72 con carrera 9 <br>
              5.200 mts2<br>
               Bogotá, Colombia   </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-vision.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> VISIÓN</h4>
           <p>Calle 90 con carrera 13ª <br>
              3.000 mts2<br>
               Bogotá, Colombia   </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/oficinas-cyaramid.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> CYARAMID CHÍA</h4>
           <p>2.400 mts2<br>
               Chía, Colombia   </p>
         </div>
        </div>




       

       

    </div>     
         
   </div>
 </div>

<!-- End Modal -->









<!-- producto1  Modal -->
 <div class="modal fade no-padding" id="residencial" tabindex="-1", role="dialog", aria-labelledby="myModalLabel", aria-hidden="true">
   
     <div class="col-xs-12 header-pro ">
              <h1 class="">RESIDENCIAL<br></h1>
              
            </div>
            <a class="close-modal close-modal2" href="#">
               <i class="ion-close va center-block"></i>
             </a>

   <div class="col-xs-12 no-padding cont-producto">

           

            

    <div class="col-xs-12 no-padding proyectos">


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-fundadores.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> FUNDADORES</h4>
          <p> Calle 76 con carrera 9 <br>
              8.000 mts2 <br>
              Bogotá, Colombia </p>
        </div>
       </div>

       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-alameda94.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> ALAMEDA</h4>
          <p> Calle 94 con carrera 12 <br>
              6.200 mts2 <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-parquecentral.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> PARQUE CENTRAL</h4>
          <p> Avenida 15 con calle 129 <br>
              5 torres de 20 pisos, 165 apartamentos <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-calle86.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> CALLE 86</h4>
          <p> Calle 86 con carrera 9 <br>
              7.400 mts2 <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-callepiedra.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> CALLE PIEDRA</h4>
          <p> Diagonal 76 con carrera 2  <br>
              3.200 mts2 <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-nogark.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> NOGARK </h4>
          <p> Calle 71 con carrera3  <br>
              5.800 mts2 <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-cerros.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> CERROS </h4>
          <p> Calle 74 con carrera 3  <br>
              5.800 mts2 <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-cerros.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> CERROS </h4>
          <p> Calle 74 con carrera 3  <br>
              5.800 mts2 <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-parquesantapaula.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> PORQUE SANTA PAULA</h4>
          <p> Calle 111 con carrera 12A  <br>
             100 apartamentos, 5 torres  <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-americano.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> AMERICANO</h4>
          <p> Carrera 13 con calle 38  <br>
              Bogotá, Colombia </p>
        </div>
       </div>



       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-bosquecomuneros.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> BOSQUE COMUNEROS</h4>
          <p> 850 apartamentos  <br>
              Bogotá, Colombia </p>
        </div>
       </div>


       <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/residencial-primavera.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
        <div  class=" proy-realizado-label">
          <h4> PRIMAVERA</h4>
          <p> Calle 48 Bis con carrera 40C <br>
          1.200 apartamentos<br>
              Bogotá, Colombia </p>
        </div>
       </div>


    </div>     
         
   </div>
 </div>

<!-- End Modal -->


<!-- comercial hotelero  Modal -->
 <div class="modal fade no-padding" id="condominios" tabindex="-1", role="dialog", aria-labelledby="myModalLabel", aria-hidden="true">
   
     <div class="col-xs-12 header-pro ">
              <h1 class="">CONDOMINIOS<br></h1>
              
            </div>
            <a class="close-modal close-modal2" href="#">
               <i class="ion-close va center-block"></i>
             </a>

   <div class="col-xs-12 no-padding cont-producto">

           

            

    <div class="col-xs-12 no-padding proyectos ">


        
        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/condominios-balcones.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> BALCONES DE BUENAVISTA</h4>
           <p> 70 casas<br>
               Bogotá, Colombia  </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/condominios-terrazaalta.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> TERRAZA ALTA</h4>
           <p> 14 casas<br>
               Bogotá, Colombia  </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/condominios-bosquesdecedros.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> BOSQUES DE CEDROS</h4>
           <p> 14 casas<br>
               Bogotá, Colombia  </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/condominios-lamorea.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> BOSQUES DE MOREA</h4>
           <p> 16 casas<br>
               Bogotá, Colombia  </p>
         </div>
        </div>


        <div style="background-image: url('https://s3.amazonaws.com/cannedhead.global/img/proyectos/condominios-riofrio.jpg');" class="col-sm-3 col-md-3 img-proyecto-realizado">
         <div  class=" proy-realizado-label">
           <h4> RIOS FRIO CLUB CAMPESTRE</h4>
           <p> 200 casas<br>
               Bogotá, Colombia  </p>
         </div>
        </div>





       

       

    </div>     
         
   </div>
 </div>

<!-- End Modal -->




<?php get_footer();?>






   

