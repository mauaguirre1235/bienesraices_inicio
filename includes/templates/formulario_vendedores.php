
<fieldset>
      <legend>informacion general</legend>

      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre Vendedor" value="<?php echo s($vendedor->nombre); ?>">

      
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="vendedor[apellido]" placeholder="Apellido Vendedor(a)" value="<?php echo s($vendedor->apellido); ?>">

  

    </fieldset>

    <fieldset>
      <legend>Informacion Extra</legend>
      <label for="apellido">Telefono:</label>
      <input type="text" id="telefono" name="vendedor[telefono]" placeholder="Telefono Vendedor(a)" value="<?php echo s($vendedor->telefono); ?>" maxlength="10" pattern="\d{10}" title="El teléfono debe tener exactamente 10 dígitos">

    </fieldset>