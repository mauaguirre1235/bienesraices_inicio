<?php 
require 'includes/funciones.php';

incluirTemplates('header', $inicio = true ); 
?> 

    <main class="contenedor seccion">
      <h1>Mas sobre nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="Icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque
            natus, minus earum pariatur dolore fugiat voluptatum nemo eligendi
            magni eveniet quibusdam beatae recusandae cupiditate laborum soluta
            in delectus sint vero! Earum enim rerum saepe doloribus natus.
            Aspernatur nemo voluptatem hic, ratione, doloribus iusto accusantium
            corrupti tenetur itaque et minima? Inventore repellat aspernatur
            eveniet voluptatem ut? Corporis assumenda cum porro sapiente?
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque
            natus, minus earum pariatur dolore fugiat voluptatum nemo eligendi
            magni eveniet quibusdam beatae recusandae cupiditate laborum soluta
            in delectus sint vero! Earum enim rerum saepe doloribus natus.
            Aspernatur nemo voluptatem hic, ratione, doloribus iusto accusantium
            corrupti tenetur itaque et minima? Inventore repellat aspernatur
            eveniet voluptatem ut? Corporis assumenda cum porro sapiente?
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
          <h3>Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque
            natus, minus earum pariatur dolore fugiat voluptatum nemo eligendi
            magni eveniet quibusdam beatae recusandae cupiditate laborum soluta
            in delectus sint vero! Earum enim rerum saepe doloribus natus.
            Aspernatur nemo voluptatem hic, ratione, doloribus iusto accusantium
            corrupti tenetur itaque et minima? Inventore repellat aspernatur
            eveniet voluptatem ut? Corporis assumenda cum porro sapiente?
          </p>
        </div>
      </div>
    </main>

    <section class="seccion contenedor">
      <h2>Casas y Depas en Venta</h2>
      <div class="contenedor-anuncios">
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
                  alt="icono wc"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  loading="lazy"
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  loading="lazy"
                  src="build/img/icono_dormitorio.svg"
                  alt="icono dormitorio"
                />
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

        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio2.webp" type="image/webp" />
            <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio" />
          </picture>

          <div class="contenido-anuncio">
            <h3>Casa terminados de lujo</h3>
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
                  alt="icono wc"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  loading="lazy"
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  loading="lazy"
                  src="build/img/icono_dormitorio.svg"
                  alt="icono dormitorio"
                />
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

        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio3.webp" type="image/webp" />
            <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio" />
          </picture>

          <div class="contenido-anuncio">
            <h3>Casa con alberca</h3>
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
                  alt="icono wc"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  loading="lazy"
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  loading="lazy"
                  src="build/img/icono_dormitorio.svg"
                  alt="icono dormitorio"
                />
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
      </div>
      <!--.CONTENEDOR-ANUNCIO-->

      <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
      </div>
    </section>

    <section class="imagen-contacto">
      <h2>Encuentra la casa de tus sueños</h2>
      <p>
        Lorem lit. Cumque ut tempora maxime omnis esse pariatur dicta non quos
        corporis eligendi! Voluptas, nisi inventore? Cupiditate necessitatibus
        rem quibusdam, similique mollitia illum?
      </p>
      <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog1.webp" type="image/webp" />
              <source srcset="build/img/blog1.jpg" type="image/jpeg" />
              <img
                loading="lazy"
                src="build/img/blog1.jpg"
                alt="Texto entrada blog"
              />
            </picture>
          </div>

          <div class="texto-entrada">
            <a href="entrada.php">
              <h4>Terraza en el techo de tu casa</h4>
              <p class="informacion-meta">
                Escrito el: <span>20/10/2025</span> por: <samp>Admin</samp>
              </p>
              <p>
                Consejos para construir una terraza en el techo de tu casa con
                los mejores materiales y ahorrando dinero
              </p>
            </a>
          </div>
        </article>
        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog2.webp" type="image/webp" />
              <source srcset="build/img/blog2.jpg" type="image/jpeg" />
              <img
                loading="lazy"
                src="build/img/blog2.jpg"
                alt="Texto entrada blog"
              />
            </picture>
          </div>

          <div class="texto-entrada">
            <a href="entrada.php">
              <h4>Guia para la decoracion de tu hogar</h4>
              <p class="informacion-meta">
                Escrito el: <span>20/10/2025</span> por: <samp>Admin</samp>
              </p>
              <p>
                Maximizar el espacio en tu hogar con esta guia, aprende a
                combinar muebles y colores par darle vida a tu espacio
              </p>
            </a>
          </div>
        </article>
      </section>

      <section class="testimoniales">
        <h3>testimoniales</h3>

        <div class="testimonial">
          <blockquote>
            El personal se comporto de una excelente forma, muy buena atencion y
            la casa que me ofrecieron cumple con todas mis expectativas.
          </blockquote>
          <p>-Mauricio Aguirre Aguirre</p>
        </div>
      </section>
    </div>

 <?php 
 incluirTemplates('footer'); 
 ?>
