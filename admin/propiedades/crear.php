<?php 
require '../../includes/funciones.php';

incluirTemplates('header'); 
?> 
    <main class="contenedor">
        <h1>Crear</h1>
      <a href="/admin" class="boton boton-verde">Volver</a>
      <form class="formulario">
        <fieldset>
          <legend>informacion general</legend>

          <label for="titulo">Titulo:</label>
          <input type="text" id="titulo" placeholder="titulo Propiedad">

          <label for="precio">Precio:</label>
          <input type="number" id="precio" placeholder="Precio Propiedad">

          <label for="imagen">Imagen:</label>
          <input type="file"  id="imagen" accept="image/jpeg, image/png">
          
          <label for="descripcion">Descripcion:</label>
          <textarea id="descipcion"></textarea>

        </fieldset>

        <fieldset>
          <legend> Informacion Propiedad</legend>

          <label for="habitaciones">Habitaciones:</label>
          <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max= "9">


          <label for="WC">Baños:</label>
          <input type="number" id="wc" placeholder="Ej: 3" min="1" max= "9">


          <label for="estacionamiento">Estacionamiento:</label>
          <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1" max= "9">

        </fieldset>

        <fieldset> 
          <legend> Vendedor </legend>
          <select> 
            <option value="1">Mauricio</option>
            <option value="1">Daniela</option>
          </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
      </form>
    </main>

  <?php
    incluirTemplates('footer'); 
  ?>



