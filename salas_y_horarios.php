<!--<div id="cuerpocenter_sala_borde_top"></div>-->
<div id="cuerpocenter_sala">
	<script src="./plugins/ImageSlider/ImageSlider.js" type="text/javascript" ></script>
	<script src="./plugins/Lightbox/Lightbox.js" type="text/javascript" ></script>
 
</script>
   <?php
     include_once('./php/DirectoryFunctions.php'); 
   ?>
   <div id="texto_sala">
   	<span class="titulo">SALAS Y HORARIOS</span>
      <ul>
        	<li>Mas de 1000 m2 repartidos en 3 salas.</li>
            <br />
            <span class="v1">
            	<b>- Sala de Fitness:</b><br />
            	De alta calidad y tecnologías. Con las últimas tendencias en equipamiento cardiovascular y de tonificación. Con asesores de fitness especializados en el seguimiento de tu perfeccionamiento muscular y físico.<br /><br />
           		<b>- 2 salas de Clases Colectivas: </b><br />
				Disfruta de las últimas tendencias: Aerobic-Step, Ciclo Indoor, GAP, Pilates, Yoga y Tai-chi.
             </span>
             <br />
            
			<li>Más de 200 máquinas diferentes.</li>
			<li>Máquinas de Musculación y Cardio de última generación.</li>
			<li>Sauna para relax</li>
			<li>Espaciosas área de vestuarios, duchas y taquillas para tu mayor comodidad.</li>
       </ul>
       
   
       
  </div>
  
  <div id="cuerpocenter_sala_slider1">
  <?php
      $files = getDirectoryFiles('./img/salas/salas1');
      for ($i = 0; $i < count($files);$i++){
         printf("<img src=\"%s\" alt=\"\">\n", $files[$i]);
      }
   ?>
  </div>
  
  <div id="cuerpocenter_sala_slider2">
  <?php
      $files = getDirectoryFiles('./img/salas/salas2');
      for ($i = 0; $i < count($files);$i++){
         printf("<img src=\"%s\" alt=\"\">\n", $files[$i]);
      }
   ?>
  </div> 
  <script type="text/javascript" >
      ImageSlider.init(
      {
         container: "cuerpocenter_sala_slider1",
         timeout: 2.5
        
      }   
      );
  </script>
  <script type="text/javascript" >
      ImageSlider.init(
      {
         container: "cuerpocenter_sala_slider2",
         timeout: 3
        
      }   
      );
  </script> 
  
     <div id="horarios_sala">
     <span id="titulo_horarios">Horarios:</span><br>
     
	  Horario Clases Ciclo <a href="javascript:void(0)"><img src="img/sala1.jpg" width="100"  title="Pulsa para ampliar" onclick="Lightbox.show({image:'img/sala1.jpg',width: 727, height: 719, label:{position:'up',text:'Horario Clases Ciclo'}});"/></a>
	  
	  
    Horario Clases Colectivas <a href="javascript:void(0)"><img src="img/sala2.jpg" width="100" title="Pulsa para ampliar" onclick="Lightbox.show({image:'img/sala2.jpg',width: 732, height: 732, label:{position:'up',text:'Horario Clases Colectivas'}});"/></a>
    <br><br>    
    Pulsar en las imagenes para ampliar los horarios.    
    <br><br>
     <a href="img/horarios.pdf" target="_blank">
       <img src="img/pdf.png" width="32" height="32" align="absmiddle" />Descargar Horarios</a>
    
   		<p><b>*La dirección se reserva el derecho a modificar horarios y clases sin previo aviso</b></p>
   </div>
    
</div>
<!--<div id="cuerpocenter_sala_borde_bottom"></div>-->
<div style="text-align:center"><img src="img/tu_fitness.jpg" />
</div>
<div style="text-align:center;margin-top:15px">
<img src="img/precio/Precio_3.png" width="210">
</div>