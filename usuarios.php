<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORMS - Menú Principal</title>
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
	</td>
  </tr>
  <tr>
    <td colspan="2" class="general_etiqueta_formulario" style="text-align: center">
    <form id="usuarios_boton_informe_prducto" name="usuarios_boton_informe_prducto" method="post" action="informe_producto.php">
      <span class="general_boton_formulario"><span class="general_etiqueta_formulario" style="text-align: center">
        <input name="sesion_usuario" type="hidden" id="sesion_usuario" value="<?php echo $sesion_usuario; ?>" />
        <input name="sesion_contrasena" type="hidden" id="sesion_contrasena" value="<?php echo $sesion_contrasena; ?>" />
        Ciudad:
        <select name="usuarios_lista_ciudad_informe_producto" id="usuarios_lista_ciudad_informe_producto">
</select> 
        - Almacen:<span class="general_etiqueta_formulario" style="text-align: center">
        <select name="usuarios_lista_almacenes_informe_producto2" id="usuarios_lista_almacenes_informe_producto2">
        </select>
        </span> -
        <input type="submit" name="usuarios_boton_informe_producto" id="usuarios_boton_informe_producto" value="DILIGENCIAR INFORME DE PRODUCTO -&gt;" />
      </span> </span>
    </form></td>
  </tr>
  <tr>
    <td colspan="2" class="general_etiqueta_formulario" style="text-align: center">
    <form id="usuarios_boton_salir" name="usuarios_boton_salir" method="post" action="salir.php">
      <span class="general_boton_formulario"><span class="general_etiqueta_formulario" style="text-align: center">
        <input type="submit" name="usuarios_boton_salir" id="usuarios_boton_salir" value="SALIR" />
        </span>
    </form>
    </td>
  </tr>
</table>
<?php
		}
	}
?>
</body>
</html>