

<?php


echo"<h1>Lista de Hoteles Registrados</h1>";

echo "<form>
<table border='1'><tr><td>ID Hotel<td>Nombre<td>Descripcion<td>Estrellas<td>ciudad<td>Direccion<td>Telefono<td>Email<td>Imagen</tr>";
foreach ($hoteles as $hotel):
echo"<tr><td>$hotel->id</td>
<td>$hotel->nombre</td>
<td>$hotel->descripcion</td>
<td>$hotel->cantidadEstrellas</td>
<td>$hotel->ciudad</td>
<td>$hotel->direccion</td>
<td>$hotel->telefono</td>
<td>$hotel->email</td>
<td><img width='400' height='400' src='$hotel->ubicacionFotografia'</td></tr>";

endforeach;
echo "</table>
		<br>
		<td width='50%'></td></form>";
?>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="vistas/MenuPrincipal.php">MenuPrincipal</a>
    
</ul>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
