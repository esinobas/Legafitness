<div id="cuerpocenter_lowcost">
   <script src="./plugins/ImageSlider/ImageSlider.js" type="text/javascript" ></script>
   <?php
     include_once('./php/DirectoryFunctions.php'); 
   ?>
	<div id="cuerpocenter_lowcost_cuerpo1">
	<?php
      $files = getDirectoryFiles('./img/lowcost/lowcost1');
      for ($i = 0; $i < count($files);$i++){
         printf("<img src=\"%s\" alt=\"\">\n", $files[$i]);
      }
   ?>
	
	</div>
	
	<script type="text/javascript" >
      ImageSlider.init(
      {
         container: "cuerpocenter_lowcost_cuerpo1",
         timeout: 3
        
      }   
      );
  </script>
	
	
   
   <div id="texto_lowcost">
   <span class="titulo">CONCEPTO <b>LOW COST</b></span>
      <p class="tp">
        No tienes excusa para no estar en forma y pasarlo fenomenal. Todo, pero todo el gimnasio destinado para ti, por sólo 26&euro;/mes. <b>Y ese es el precio final. </b>
        </p>
        <p class="tp">
        Así es la filosofía low cost que hemos querido ofrecerte para que todo Leganés disfrute de un mundo de ejercicios, máquinas de última generación, clases colectivas y asesores de fitness, sólo para ti. <b>Sólo por 26&euro;/mes.</b>
        </p>
   	
    </div>
    
    <div id="cuerpocenter_lowcost_cuerpo2">
       <?php
      $files = getDirectoryFiles('./img/lowcost/lowcost2');
      for ($i = 0; $i < count($files);$i++){
         printf("<img src=\"%s\" alt=\"\">\n", $files[$i]);
      }
      ?>

	</div>
	<script type="text/javascript" >
      ImageSlider.init(
      {
         container: "cuerpocenter_lowcost_cuerpo2",
         timeout: 2
        
      }   
      );
  </script>
</div>
