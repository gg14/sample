<h1><?php htmlout($pageTitle); ?></h1>

<form action="?<?php htmlout($action); ?>" method="post">
  <fieldset>	
  <label>Nombre:</label><input type="text" name="nombre" id="nombre" value="<?php htmlout($nombre); ?>" maxlength="50" autofocus><br>
  <label>Rif:</label><input type="text" name="rif" id="rif" value="<?php htmlout($rif); ?>" maxlength="11" autofocus><br>
  <label>Dirección:</label><input type="text" name="direccion1" id="direccion1" value="<?php htmlout($direccion1); ?>" maxlength="45" autofocus><br>
  <label>Dirección:</label><input type="text" name="direccion2" id="direccion2" value="<?php htmlout($direccion2); ?>" maxlength="45" autofocus><br>
  <label>Ciudad:</label><input type="text" name="ciudad" id="ciudad" value="<?php htmlout($ciudad); ?>" autofocus><br>
  <label>Estado:</label><input type="text" name="estado" id="estado" value="<?php htmlout($estado); ?>"autofocus><br>
  <label>Teléfono:</label><input type="text" name="tlf" id="tlf" value="<?php htmlout($tlf); ?>"autofocus><br>
  <input type="hidden" name="id" value="<?php htmlout($id); ?>">
  <input type="submit" value="<?php htmlout($boton); ?>">
  </fieldset>
</form> 