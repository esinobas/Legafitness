<script src="./plugins/ImageSlider/ImageSlider.js" type="text/javascript" ></script>
   <?php
     include_once('./php/DirectoryFunctions.php'); 
   ?>
<div id="cuerpocenter_clases_borde_top"></div>
<div id="cuerpocenter_clases">
	
	
<div id="texto_clases">
    <span class="titulo">CLASES COLECTIVAS</span>
    <div style="width:340px; float:left;background-color:white">
    	<p>
			<b>Aerobic-Step:</b> ¡No pierdas el paso! Y únete a la clase más divertida de Leganés. Los pasos más dinámicos para moldear tu cuerpo y quemar calorías te están esperando.
        </p>
        <p>
			<b>GAP:</b> (Glúteos, abdominales y piernas) nuestros asesores trabajarán específicamente estas zonas de tu cuerpo, combinando ejercicios en el suelo con acciones dinámicas. ¡Verás los resultados! 
        </p>
        <p>
        	<b>Ciclo Indoor:</b> ¡Pedalea al ritmo de la música! Desde principiantes hasta expertos disfrutan quemando calorías y mejorando su sistema cardiovascular.
        </p>
    	<p>
       		<b>Yoga:</b> La disciplina justa para liberar, oxigenar y mantener tu cuerpo, mente y espíritu en total armonía. Aquí en LegaFitness y con los mejores asesores de meditación podrás cultivar tu equilibrio, con esta gran clase colectiva.
        </p>
        <p>
			<b>Pilates:</b> Fortalecimiento muscular y estiramientos dirigidos a ejercitar tu cuerpo y mente; mejorar tu equilibrio y flexibilidad, y por supuesto, tu salud.
        </p>
        <p>
        	<b>Tai-Chi</b> La tradición oriental para mejorar y restablecer tu salud. Deja llevarte por la filosofía tradicional china controlando la respiración y equilibrando tu cuerpo.
        </p>
     </div>
     </div>
     
     <div id="clases_slider_image">
        <?php
           $files = getDirectoryFiles('./img/clases');
           for ($i = 0; $i < count($files);$i++){
             printf("<img src=\"%s\" alt=\"\">\n", $files[$i]);
           }
        ?>
        <script type="text/javascript" >
           ImageSlider.init(
           {
              container: "clases_slider_image",
              timeout: 2.5
        
           }   
           );
        </script>
     </div>
     <br>
     <br>
        <div id="reglamento_uso">
        <b>Reglamento de uso:</b>
        
        <ol>
        <li> Es obligatorio el acceso a la sala con calzado deportivo, ropa deportiva y toalla.</li>
        
        <li> No se permite el acceso a clases sin camiseta, en bañador o con zapatillas de baño.</li>
        
        <!-- 
        <li> La asistencia a las clases se hará por riguros orden de inscripción. Las clases colectivas se darán con un mínimo de tres personas</li>
        
        <li> 30 minutos antes del comienzo de cada clase estará disponible en recepción una hoja de inscripción con un número limitado de plazas.</li>
        -->
        
        <li> Una vez completado el aforo de plazas no se podrá asistir a la clase.</li>
        
       <li> Se ruega máxima puntualidad en el inicio de la clase, ya que el calentamiento es esencial para un buen entrenamiento, al igual que es muy importante no abandonar la sesión antes de que ésta finalice.</li>
        
        <li> Si sufre algún tipo de lesión, enfermedad o toma medicación especial que pueda afectarle en la práctica del ejercicio físico, le rogamos se lo comunique al monitor responsable de la clase.

</li>
        
        <li> Asegúrese de que el contenido e intensidad de las sesiones son los adecuados a su nivel actual de condición física.</li>
        
        <li> Por razones de higiene es obligatorio usar toalla en los ejercicios de suelo.</li>
        
        <li> Procure hidratarse antes y después de la práctica del ejercicio físico. Es recomendable beber 200 ml. de agua cada 15 ó 20 minutos.</li>
        
        <li> No se permite el uso del teléfono móvil dentro de la sala.</li>
        
        <li> Para poder acceder a una clase, deberá esperar que finalice la anterior. </li>
        
        
        <li> No se permite fumar, comer e introducir objetos de vidrio en la sala.</li>
        
        
        
        </ol>
        </div>
    
</div>
<div id="cuerpocenter_clases_borde_bottom"></div>
<div style="text-align:center"><img src="img/tu_fitness.jpg" />
</div>
<div style="text-align:center;margin-top:15px">
<img src="img/precio/Precio.png" width="210">
</div>

