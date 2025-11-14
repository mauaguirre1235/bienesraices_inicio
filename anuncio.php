<?php 
require 'includes/funciones.php';

incluirTemplates('header'); 
?> 
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture> 
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">3,000,000</p>
               <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>

                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, sed odio inventore fugit maiores, quas exercitationem temporibus omnis deserunt blanditiis facilis vero repellat nam quasi. Autem harum quidem perferendis nostrum!
                    Numquam non aspernatur, fugiat natus aliquid rem aut quam tempora, omnis iure modi facere maxime repudiandae quasi illo officiis corrupti sint cumque voluptatum culpa ratione fugit aperiam soluta? Excepturi, sint.
                    Expedita suscipit pariatur unde amet, aliquid iure, laborum voluptatibus velit illum dolorem ipsum aliquam repellendus corrupti consequuntur numquam voluptate nam ipsa, provident iste itaque perspiciatis. Quia tempore excepturi maxime ad.</p>

                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident neque eaque commodi porro error perferendis nobis expedita rerum, quisquam libero, omnis itaque nihil similique, officiis quia cum. Reprehenderit, fugiat atque.
                    Commodi vero laborum tempora eos, molestias porro laudantium assumenda reiciendis optio aut delectus aliquid dolorem animi nostrum! Dolorem fugit cumque aliquam magni quasi quam. Explicabo vel tenetur similique veniam quis.
                    Deserunt odit cumque ea! Rem incidunt nihil amet ducimus, optio illo, fuga doloribus beatae quia iure, quas tempora! Odio iusto voluptate mollitia quisquam porro quibusdam dolorum quasi illo quas architecto.
                    Laborum, beatae perspiciatis minima eveniet tenetur blanditiis rem voluptatem obcaecati expedita neque fugit dignissimos molestiae numquam explicabo magnam. Ullam maxime tenetur distinctio. Et ab voluptates a blanditiis fugit reiciendis recusandae.
                    </p> 
        </div>

    </main>

 <?php 

incluirTemplates('footer'); 
?>
