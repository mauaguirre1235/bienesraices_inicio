<?php 
    //Importar la conexion 
    require __DIR__ . '/../config/database.php'; 
    $db = conectarDB(); 

    // consultar 
    $query = "SELECT * FROM propiedades "; 

    // obtener resultado 
    $resultado = mysqli_query($db, $query); 



?>


<div class="contenedor-anuncios">
    <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
      <div class="anuncio">
        <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp" />
            <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
        </picture>

        <div class="contenido-anuncio">
            <h3>Casa de lujo en el Lago</h3>
            <p>
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
            </p>
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img
                        class="icono"
                        loading="lazy"
                        src="build/img/icono_wc.svg"
                        alt="icono wc" />
                    <p>3</p>
                </li>
                <li>
                    <img
                        class="icono"
                        loading="lazy"
                        src="build/img/icono_estacionamiento.svg"
                        alt="icono estacionamiento" />
                    <p>3</p>
                </li>
                <li>
                    <img
                        class="icono"
                        loading="lazy"
                        src="build/img/icono_dormitorio.svg"
                        alt="icono dormitorio" />
                    <p>4</p>
                </li>
            </ul>
            <a href="anuncios.php" class="boton-amarillo-block">
                Ver Propiedad
            </a>
        </div>
        <!--.CONTENIDO ANUNCIO-->
      
    </div>
    <!--ANUNCIO-->
    <?php endwhile; ?>
</div>
<!--.CONTENEDOR-ANUNCIO-->


<?php 

    // Cerrar la conexion 
 ?>