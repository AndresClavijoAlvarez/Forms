<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORMS - Informe de Producto</title>
<link href="css/general.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if (isset($_REQUEST['sesion_usuario']) or isset($_REQUEST['sesion_contrasena'])) 
	{
		$sesion_usuario = isset($_REQUEST['sesion_usuario']);
		$sesion_contrasena = isset($_REQUEST['sesion_contrasena']);
		if (empty($_REQUEST['sesion_usuario']) or empty($_REQUEST['sesion_contrasena'])) 
		{
?>
<table width="100%" border="0" align="center" id="tabla_menu_principal">
  <tr>
    <td class="general_imagen_encabezado"><img src="img/logo_crisalltex.jpg" alt="Crisalltex S.A." width="374" height="100" align="middle" /></td>
    <td class="general_imagen_encabezado"><img src="img/logo_gino.png" alt="Gino Passcalli" width="350" height="100" align="middle" /></td>
  </tr>
  <tr>
    <td colspan="2" class="general_titulo_1"><h1 class="general_titulo_1">FORMS 1.0</h1></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><h2 class="general_titulo_2">Menú Principal</h2></td>
  </tr>
  <tr>
    <td colspan="2" class="general_etiqueta_formulario" style="text-align: center">
    <?php echo "Usuario y/o contraseña incorrectos, da click en: <a href='index.php'><strong>VOLVER</strong></a> para intentar de nuevo."; ?>
    </td>
  </tr>
</table>
<?php
		} else {
		$sesion_usuario = isset($_REQUEST['sesion_usuario']);
		$sesion_contrasena = isset($_REQUEST['sesion_contrasena']);
?>
<form action="usuarios.php" method="post" id="form_informe_producto">
<table width="100%" border="0" align="center" id="tabla_menu_principal">
  <tr>
    <td class="general_imagen_encabezado"><img src="img/logo_crisalltex.jpg" alt="Crisalltex S.A." width="374" height="100" align="middle" /></td>
    <td class="general_imagen_encabezado"><img src="img/logo_gino.png" alt="Gino Passcalli" width="350" height="100" align="middle" /></td>
  </tr>
  <tr>
    <td colspan="2" class="general_titulo_1"><h1 class="general_titulo_1">FORMS 1.0</h1></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" class="general_etiqueta_formulario" style="text-align: center">
	</td>
  </tr>
  <tr>
    <td colspan="2" class="general_etiqueta_formulario" style="text-align: justify; font-family: Verdana, Geneva, sans-serif;"><table border="1" align="center" cellpadding="1" cellspacing="1">
      <tr align="center" valign="middle">
        <td colspan="4" bgcolor="#CCCCCC" class="general_titulo_2"><span class="general_texto_form">INFORME DE PRODUCTO</span></td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" class="general_form_negrilla">Este formato debe ser diligenciado por los Jefes de Zona dentro de los primeros 5 días hábiles del mes.</td>
        </tr>
      <tr>
        <td width="25%" align="right" valign="middle" class="general_form_negrilla" style="text-align: right">Punto de Venta:</td>
        <td width="25%">&nbsp;</td>
        <td width="25%" class="general_form_negrilla" style="text-align: right"><span class="general_texto_form">Ciudad:</span></td>
        <td width="25%">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" valign="middle" class="general_form_negrilla" style="text-align: right"><span class="general_texto_form">Realizado Por:</span></td>
        <td>&nbsp;</td>
        <td class="general_form_negrilla" style="text-align: right"><span class="general_texto_form">Fecha:</span></td>
        <td>&nbsp;</td>
      </tr>
      <tr align="center" valign="middle">
        <td colspan="4" bgcolor="#CCCCCC"><span class="general_form_negrilla">Análisis y Producto</span></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><span class="general_form_negrilla">Pregunta / Actividad / Registro</span></td>
        <td colspan="2" valign="middle" bgcolor="#CCCCCC"><span class="general_form_negrilla">Observación</span></td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" bgcolor="#CC6600"><span class="general_form_negrilla">TENDENCIAS</span></td>
        </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">Observar las tendencias en las ciudades de su zona que considere se apliquen al estilo y moda propio de la compañía. Especifique en observaciones. Igualmente tome y envié fotos al proceso de diseño y a la dirección comercial.</td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" bgcolor="#339933"><span class="general_form_negrilla"><span class="general_texto_form">LISTA DE PRODUCTOS</span></span></td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" style="text-align: justify"><span class="general_form_texto">De la siguiente lista de productos para hombre, dama y niño determine: </span></td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" style="text-align: justify"><span class="general_form_texto">¿Que esta pidiendo el mercado?, Hablen con su fuerza de ventas sobre comentarios o solicitudes realizadas por los clientes, (Nuevos productos).</span></td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" style="text-align: justify"><span class="general_form_texto">¿Qué productos debemos mejorar o modificar?, especifique la modificación sugerida.</span></td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" style="text-align: justify"><span class="general_form_texto">¿Qué productos no debemos volver a sacar?, Mala rotación.</span></td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" style="text-align: justify"><span class="general_form_texto">¿Qué debemos repetir?, por que fueron productos exitosos.</span></td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" style="text-align: justify"><span class="general_form_texto">O cualquier otro aporte que quieran hacer.</span></td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" bgcolor="#CCCCCC"><span class="general_form_negrilla"><span class="general_texto_form">HOMBRE</span></span></td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CAMISA HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CAMISA DE LINO HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CAMISETA HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">BERMUDA HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">PANTALONETA HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">PANTALON HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">PANTALON DE LINO HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">JEAN HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">BLAZER HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CHALECO HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CHAQUETA HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">BUSO HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">VESTIDO HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">PIJAMA HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CORBATA HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CORREA HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CALZADO HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">VESTIDO LINO HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">ACCESORIOS Y ROPA INTERIOR HOMBRE</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr align="center" valign="middle">
        <td colspan="4" bgcolor="#CCCCCC"><span class="general_form_negrilla"><span class="general_texto_form">DAMA</span></span></td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">BLUSA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CAMISETA DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">SHORT</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">PESCADOR - CAPRI</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">PANTALON DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">JEAN DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>

        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CHALECO DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CHAQUETA DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">BUSO DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">VESTIDO DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CONJUNTO DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">FALDA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">PIJAMA DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CINTURON DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CALZADO DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">BOLSOS DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">ENTERIZO</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">BLUSA LINO</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">SHORT  LINO</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">PANTALON LINO DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">VESTIDO LINO DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">CONJUNTO LINO DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">FALDA LINO</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" valign="middle" bgcolor="#FFFFFF" class="general_form_texto" style="text-align: justify"><span class="general_texto_form">ACCESORIOS Y ROPA INTERIOR DAMA</span></td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr align="center" valign="middle" bgcolor="#CCCCCC">
        <td colspan="4" class="general_form_negrilla">NIÑO</td>
        </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">CAMISA NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">CAMISA DE LINO NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">CAMISETA NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">BERMUDA NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">PANTALONETA NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">PANTALON NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">PANTALON DE LINO NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">JEAN NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">CHAQUETA NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">BUSO NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">CALZADO NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" class="general_form_texto">ACCESORIOS Y ROPA INTERIOR NIÑO</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" align="center" valign="middle"><span class="general_etiqueta_formulario" style="text-align: center">
          <input name="sesion_usuario" type="hidden" id="sesion_usuario" value="<?php echo $sesion_usuario; ?>" />
          <input name="sesion_contrasena" type="hidden" id="sesion_contrasena" value="<?php echo $sesion_contrasena; ?>" />
          <input type="submit" name="informe_producto_boton_enviar" id="informe_producto_boton_enviar" value="ENVIAR" />
          </span></td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="general_etiqueta_formulario" style="text-align: center">&nbsp;</td>
</tr>
<tr>
    <td colspan="2" class="general_etiqueta_formulario" style="text-align: center">
    <form id="menu_boton_salir" name="menu_boton_salir" method="post" action="usuarios.php">
      <span class="general_boton_formulario"><span class="general_etiqueta_formulario" style="text-align: center">
        <span class="general_etiqueta_formulario" style="text-align: center">
        <input name="sesion_usuario" type="hidden" id="sesion_usuario" value="<?php echo $sesion_usuario; ?>" />
        <input name="sesion_contrasena" type="hidden" id="sesion_contrasena" value="<?php echo $sesion_contrasena; ?>" />
        </span>
        <input type="submit" name="informe_producto_boton_volver" id="informe_producto_boton_volver" value="&lt;- VOLVER" />
        </span>
    </form>
    </td>
  </tr>
<?php
		}
	}
?>
</body>
</html>