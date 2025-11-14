<?php 
require 'includes/funciones.php';

incluirTemplates('header'); 
?> 
    <main class="contenedor">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2> LLene el Formulario de Contacto </h2>

        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre"> Nombre:</label>
                <input id="nombre" type="text" placeholder="Tu nombre">

                 <label for="email">E-mail:</label>
                <input id="email" type="email" placeholder="Tu email">

                
                 <label for="telefono">Telefono:</label>
                <input id="telefono" type="tel" placeholder="Telefono">

                
                 <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje"> </textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Sobre la propiedad</legend>
                <label for="opciones">Vente o Compra:</label>
                <select id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                 <label for="presupuesto">Precio o Presupuesto:</label>
                <input id="presupuesto" type="number" placeholder="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contactado</legend>
                
                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" id="contactar-telefono" type="radio" value="telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" id="contactar-email" type="radio" value="email">
                </div>

                <p>Si eligio telefono, elija la fecha y la hora para ser contactado</p>
                <label for="fecha">Fecha:</label>
                <input id="fecha" type="date" >

                <label for="hora">Hora:</label>
                <input id="hora" type="time" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>
    </main>

 <?php 
 incluirTemplates('footer'); 
 ?>
