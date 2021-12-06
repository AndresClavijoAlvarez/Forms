<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORMS - Iniciar Sesión</title>
<link href="css/general.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000000" alink="#000000">
<table width="100%" border="0" align="center" id="tabla_inicio_sesion">
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
    <td colspan="2"><h2 class="general_titulo_2">Iniciar Sesión</h2></td>
  </tr>
  <tr>
    <td colspan="2" class="general_etiqueta_formulario" style="text-align: center"><form id="iniciar_sesion" name="iniciar_sesion" method="post" action="usuarios.php">
      <table border="0" align="center">
        <tr>
          <td class="general_etiqueta_formulario" style="text-align: right"><span class="general_etiqueta_formulario" style="text-align: right">Usuario:</span></td>
          <td><span class="general_campos_formulario" style="text-align: center">
            <input name="sesion_usuario" type="text" id="sesion_usuario" size="30" maxlength="30" />
          </span></td>
        </tr>
        <tr>
          <td class="general_etiqueta_formulario" style="text-align: right"><span class="general_etiqueta_formulario" style="text-align: right">Contraseña:</span></td>
          <td><span class="general_campos_formulario" style="text-align: center">
            <input name="sesion_contrasena" type="password" id="sesion_contrasena" size="30" maxlength="20" />
          </span></td>
        </tr>
        <tr>
          <td colspan="2"><span class="general_boton_formulario">
            <input type="submit" name="sesion_iniciar" id="sesion_iniciar" value="Iniciar" />
          </span></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<tr>
  <td style="text-align: center"></td>
</tr>
</table>
</body>
</html>