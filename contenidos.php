<?php

if($_GET['p'] == "lowcost")
{	
   include('lowcost.php');

}
elseif($_GET['p'] == "salas")
{
   include('salas_y_horarios.php');
}
elseif($_GET['p'] == 'clases')
{
	include('clases.php');
	
}
elseif($_GET['p'] == 'inscripcion')
{
?>
<div id="cuerpocenter_inscripcion">
	<object id="FlashID4" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="585" height="474">
	  <param name="movie" value="img/inscripcion.swf" />
	  <param name="quality" value="high" />
	  <param name="wmode" value="transparent" />
	  <param name="swfversion" value="6.0.65.0" />
	  <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
	  <param name="expressinstall" value="Scripts/expressInstall.swf" />
	  <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
	  <!--[if !IE]>-->
	  <object type="application/x-shockwave-flash" data="img/inscripcion.swf" width="585" height="474">
	    <!--<![endif]-->
	    <param name="quality" value="high" />
	    <param name="wmode" value="transparent" />
	    <param name="swfversion" value="6.0.65.0" />
	    <param name="expressinstall" value="Scripts/expressInstall.swf" />
	    <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
	    <div>
	      <h4>El contenido de esta p&aacute;gina requiere una versi&oacute;n m&aacute;s reciente de Adobe Flash Player.</h4>
	      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
        </div>
	    <!--[if !IE]>-->
      </object>
	  <!--<![endif]-->
  </object>
<div id="texto_inscripcion">
   	  <span class="titulo">PREINSCRIPCIÓN</span>
      <p class="tp">
        Preinscríbete <b>aquí</b> y que no te quiten tu plaza.
        Luego podrás inscribirte en la recepción de <b>Legafitness</b>, donde una azafata atenderá tu solicitud. </b>
        </p>
        <form action="action/registro.php" method="post" id="registrar" target="oculto">
        <table class="taibol">
        	<tbody>
            	<tr><td height="30px"></td></tr>
           		<tr>
                	<td>Email:</td>
                    <td><input size="25" type="text" name="email" /></td>
                </tr>
            	<tr>
                	<td>Nombre:</td>
                    <td><input size="15" type="text" name="nombre" /></td>
                </tr>
                <tr>
                	<td>Apellidos:</td>
                    <td><input size="25" type="text" name="apellidos" /></td>
                </tr>
                <tr>
                	<td>Provincia:</td>
                    <td><select name="provincia" id="provincia"><option value="0">Elige...</option><option value="1">Álava</option><option value="8">Albacete</option><option value="15">Alicante</option><option value="21">Almería</option><option value="19">Asturias</option><option value="26">Ávila</option><option value="33">Badajoz</option><option value="2">Barcelona</option><option value="9">Burgos</option><option value="16">Cáceres</option><option value="22">Cádiz</option><option value="13">Cantabria</option><option value="27">Castellón</option><option value="46">Ceuta</option><option value="34">Ciudad</option><option value="41">Córdoba</option><option value="3">Cuenca</option><option value="10">Gerona</option><option value="17">Granada</option><option value="23">Guadalajara</option><option value="28">Guipúzcoa</option><option value="35">Huelva</option><option value="42">Huesca</option><option value="40">Islas</option><option value="48">Jaén</option><option value="47">La Coruña</option><option value="18">La Rioja</option><option value="37">Las Palmas</option><option value="4">León</option><option value="11">Lérida</option><option value="29">Lugo</option><option value="36">Madrid</option><option value="43">Málaga</option><option value="52">Melilla</option><option value="49">Murcia</option><option value="5">Navarra</option><option value="12">Orense</option><option value="30">Palencia</option><option value="44">Pontevedra</option><option value="50">Salamanca</option><option value="6">Santa Cruz de Tenerife</option><option value="24">Segovia</option><option value="31">Sevilla</option><option value="38">Soria</option><option value="45">Tarragona</option><option value="51">Teruel</option><option value="7">Toledo</option><option value="14">Valencia</option><option value="20">Valladolid</option><option value="25">Vizcaya</option><option value="32">Zamora</option><option value="39">Zaragoza</option></select></td>
                </tr>
                <tr>
                	<td>Localidad:</td>
                    <td><input size="10" type="text" name="localidad" /></td>
                </tr>
                <tr>
                	<td>Dirección:</td>
                    <td><input size="25" type="text" name="direccion" /></td>
                </tr>
                <tr>
                	<td>CP:</td>
                    <td><input size="5" type="text" name="cp" /></td>
                </tr>
                <tr>
                	<td>Teléfono:</td>
                    <td><input size="10" type="text" name="telefono" /></td>
                </tr>
                <tr>
                	<td>Móvil:</td>
                    <td><input size="10" type="text" name="movil" /></td>
                </tr>
                <tr>
                	<td></td>
                    <td align="right"><input type="submit" value="Enviar"/></td>
                </tr>
            </tbody>
        </table>
        </form>

    </div>
</div>
<?php
}
elseif($_GET['p'] == 'contacto')
{
   include('contacto.php');	
}
elseif($_GET['p'] == 'exito')
{
?>
<div id="cuerpocenter_inscripcion">
	<object id="FlashID4" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="585" height="474">
	  <param name="movie" value="img/inscripcion.swf" />
	  <param name="quality" value="high" />
	  <param name="wmode" value="transparent" />
	  <param name="swfversion" value="6.0.65.0" />
	  <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
	  <param name="expressinstall" value="Scripts/expressInstall.swf" />
	  <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
	  <!--[if !IE]>-->
	  <object type="application/x-shockwave-flash" data="img/inscripcion.swf" width="585" height="474">
	    <!--<![endif]-->
	    <param name="quality" value="high" />
	    <param name="wmode" value="transparent" />
	    <param name="swfversion" value="6.0.65.0" />
	    <param name="expressinstall" value="Scripts/expressInstall.swf" />
	    <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
	    <div>
	      <h4>El contenido de esta p&aacute;gina requiere una versi&oacute;n m&aacute;s reciente de Adobe Flash Player.</h4>
	      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
        </div>
	    <!--[if !IE]>-->
      </object>
	  <!--<![endif]-->
  </object>
<div id="texto_inscripcion">
   	  <span class="titulo">ENVIADO CON ÉXITO</span>
      <p class="tp">
Muchas gracias por su confianza. La pre-inscripcion a Legafitness ha sido realizada con éxito y su plaza está reservada.
<br /> <br />
A partir del próximo 21 de Marzo de 2011 estaremos esperándote paa formalizar la pre-inscripción de tu plaza, en horario ininterrumpido.
<br /><br />
De lunes a viernes de 9:30h hasta las 21:00h. Sábados de 10:00h a 15:00h.
<br /><br />
Le avisaremos para realizar una visita de puertas abiertas previa a la apertura para que pueda conocer las instalaciones.
<br /><br />
Reciba un cordial saludo
        </p>
        <p>
        <a href="?p=inscripcion">Volver</a>
        </p>
        

    </div>
</div>
<?php
}
?>




