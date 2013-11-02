<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
	$seccion = "";
	$sec = array("","lowcost","salas","clases","inscripcion","contacto");
	$secciones = array("Home","Low Cost","Salas y horarios","Clases colectivas","Preinscripcion","Contacto");
	for($i=0;$i<count($sec);$i++)
	{
		if($sec[$i] == @$_GET['p'])	$seccion = $secciones[$i];
	}
?>
<title>:: LegaFitness - <?=$seccion?> :: </title>
<?php
if($_GET['p'] == 'clases' || $_GET['p'] == 'salas')
{
	echo '<link href="style2.css" rel="stylesheet" type="text/css" />
';	
}
else
{
	 echo '<link href="style.css" rel="stylesheet" type="text/css" />
';
}
?>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery-1.4.2.js" type="text/javascript"></script>
<script>
function popu(txt)
{
	document.getElementById('popupTXT').innerHTML = txt;
	$('#popup').fadeIn('slow');
}
</script>
</head>

<body>
<div id="content">
	<div id="cuerpo">	
    	<div id="cabecera">
        	<div id="logo" onclick="parent.location.href='index.php'"></div>
            <div id="botonera">
            	<div class="boton"><?php if(!@$_GET['p']){ ?><span class="bizq"></span><a class="activo" href="index.php">HOME</a><span class="bder"></span><?php } else{ ?> <span class=""></span><a href="home.php">HOME</a><span class=""></span><?php }?></div><div class="boton"><?php if(@$_GET['p'] == 'lowcost'){ ?> <span class="bizq"></span><a class="activo" href="?p=lowcost">LOW COST</a><span class="bder"></span><?php }else { ?><span class=""></span><a href="?p=lowcost">LOW COST</a><span class=""></span><?php }?></div><div class="boton"><?php if(@$_GET['p'] == 'salas'){ ?> <span class="bizq"></span><a class="activo" href="?p=salas">SALAS Y HORARIOS</a><span class="bder"></span><?php }else { ?><span class=""></span><a href="?p=salas">SALAS Y HORARIOS</a><span class=""></span><?php }?></div><div
class="boton"><?php if(@$_GET['p'] == 'clases'){ ?> <span class="bizq"></span><a class="activo" href="?p=clases">CLASES COLECTIVAS</a><span class="bder"></span><?php }else { ?><span class=""></span><a href="?p=clases">CLASES COLECTIVAS</a><span class=""></span><?php }?></div><div class="boton"><?php if(@$_GET['p'] == 'contacto'){ ?> <span class="bizq"></span><a class="activo" href="?p=contacto">CONTACTO</a><span class="bder"></span><?php }else { ?><span class=""></span><a href="?p=contacto">CONTACTO</a><span class=""></span><?php }?></div>
            </div>
        </div>
        <div id="centro">
            <div id="cuerpoizq">
            	<div id="cuerpoizq_1">
                	<img style="cursor:pointer" onclick="popu('Las incripciones desde la web están agotadas, para nuevas inscripciones en el gimnasio.')" border="0" src="img/inscribete.png" /><br /> 
                	
                </div>            
                <div id="cuerpoizq_2">
                	
                    <p>
                    	<b>¡Libertad de horarios!</b><br />
                        Lun. a Vie.: 7.30 /23.00<br />
                        Sab.: 8.30 /21.00<br />
                        Dom. Fes.: 9.00 /15.00<br />
                    
                    </p>
                </div>
                <div id="cuerpoizq_3"></div>
            </div>
            <div id="cuerpocenter">
            	<div id="cuadro">
            	<?php
					if(@$_GET['p'])
					include_once("contenidos.php");
					else
					{
					?>
					      <script src="./plugins/ImageSlider/ImageSlider.js" type="text/javascript" ></script>
                    	<div id="cuerpocenter_home">
                    	   <?php
                    	      include_once('./php/DirectoryFunctions.php'); 
                    	   ?>
                        <div id="cuerpocenter_cuerpo1">
                           <?php
                              $files = getDirectoryFiles('./img/cuerpo/cuerpo1');
                              for ($i = 0; $i < count($files);$i++){
                                 printf("<img src=\"%s\" alt=\"\">\n", $files[$i]);
                              }
                           ?>
                        </div>
                        

                       <script type="text/javascript" >
                          ImageSlider.init(
                          {
                             container: "cuerpocenter_cuerpo1",
                             timeout: 3
                          }   
                          );
                      </script>
                        
                        <div id="cuerpocenter_cuerpo2">
                           <?php
                              $files = getDirectoryFiles('./img/cuerpo/cuerpo2');
                              for ($i = 0; $i < count($files);$i++){
                                 printf("<img src=\"%s\" alt=\"\">\n", $files[$i]);
                              }
                           ?>                        
                        </div>
                        
                        <script type="text/javascript" >
                          ImageSlider.init(
                          {
                             container: "cuerpocenter_cuerpo2",
                             timeout: 3.5
                          }   
                          );
                      </script>
                        
                      
                        <div id="cuerpocenter_cuerpo3">
                           <?php
                              $files = getDirectoryFiles('./img/cuerpo/cuerpo3');
                              for ($i = 0; $i < count($files);$i++){
                                 printf("<img src=\"%s\" alt=\"\">\n", $files[$i]);
                              }
                           ?>
                        </div>
                        <script type="text/javascript" >
                          ImageSlider.init(
                          {
                             container: "cuerpocenter_cuerpo3",
                             timeout: 4
                          }   
                          );
                      </script>                        
                        
                    	</div>
                    <?php	
					}
					
				?>
            	</div>
              <div id="frasecenter">
                	
               		<div id="flash">
                      <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="300">
                        <param name="movie" value="img/flash.swf" />
                        <param name="quality" value="high" />
                        <param name="wmode" value="transparent" />
                        <param name="swfversion" value="6.0.65.0" />
                        <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
                        <param name="expressinstall" value="Scripts/expressInstall.swf" />
                        <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="img/flash.swf" width="300" height="300">
                          <!--<![endif]-->
                          <param name="quality" value="high" />
                          <param name="wmode" value="transparent" />
                          <param name="swfversion" value="6.0.65.0" />
                          <param name="expressinstall" value="Scripts/expressInstall.swf" />
                          <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                          <div>
                            <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                          </div>
                          <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                      </object>
               		</div>
              </div>
            </div>
            <div id="cuerpoder">
            	<div id="cuerpoder_1"></div>
            	<div id="cuerpoder_2"></div>
                <div id="cuerpoder_3"></div>
               
            </div>
        </div>
	</div>
    <div id="abajo">
   LEGAFITNESS 
C/ El Charco, Nº 13, 28911 <br />
Leganés, Madrid
 Mail: info@legafitness.es<br />
 <img src="img/transportes.png" />


    </div>
</div>
<div class="popup" id="popup" style="display:none">
	 <span id="cierre" onClick="document.getElementById('popup').style.display = 'none'">x</span>
     <span id="popupTXT"></span>
</div>
<iframe allowtransparency="0" frameborder="0" width="0" height="0" id="oculto" name="oculto"></iframe>

<div>
Me cago en to
</div>

</body>
</html>