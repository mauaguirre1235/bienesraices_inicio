<?php 
require 'includes/funciones.php';

incluirTemplates('header'); 
?> 

    <main class="contenedor seccion">
    <h1>Conocoe Sobre Nosotro</h1>  

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
              <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe fuga omnis eos. Nisi, autem in eaque veritatis cupiditate laboriosam tempora? Expedita omnis aliquam molestiae, sunt ut non facilis mollitia deserunt.
            Quas quam aliquid eligendi ullam unde in cupiditate optio eveniet accusantium, non maxime reprehenderit ab facere dignissimos. Tenetur vero temporibus ullam a. Debitis eligendi odio nesciunt ullam expedita soluta fuga.</p>
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum libero optio officia magni, rerum voluptatibus culpa voluptates mollitia quos amet necessitatibus debitis tempora. Illum obcaecati, tempore dolor architecto placeat maxime!
            Obcaecati nihil provident repellat eveniet ipsum, minus enim, quo quasi debitis, fugit nisi. Officiis similique excepturi quas illum repellendus, ullam dolores, nisi, nobis suscipit ex nesciunt quam recusandae alias perspiciatis!
            Optio distinctio necessitatibus ab. Neque cumque, repudiandae delectus natus doloribus enim explicabo similique optio minus, beatae harum rem repellat nemo iste perferendis corporis ad iure vitae quae quod eos sed!</p>
        </div> 
    </div>
    </main>

    
    <section class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3> Seguridad</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque natus, minus earum pariatur dolore fugiat voluptatum nemo eligendi magni eveniet quibusdam beatae recusandae cupiditate laborum soluta in delectus sint vero!
                Earum enim rerum saepe doloribus natus. Aspernatur nemo voluptatem hic, ratione, doloribus iusto accusantium corrupti tenetur itaque et minima? Inventore repellat aspernatur eveniet voluptatem ut? Corporis assumenda cum porro sapiente?
                </p> 
            </div>
             <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3> Precio</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque natus, minus earum pariatur dolore fugiat voluptatum nemo eligendi magni eveniet quibusdam beatae recusandae cupiditate laborum soluta in delectus sint vero!
                Earum enim rerum saepe doloribus natus. Aspernatur nemo voluptatem hic, ratione, doloribus iusto accusantium corrupti tenetur itaque et minima? Inventore repellat aspernatur eveniet voluptatem ut? Corporis assumenda cum porro sapiente?
                </p> 
            </div>
             <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque natus, minus earum pariatur dolore fugiat voluptatum nemo eligendi magni eveniet quibusdam beatae recusandae cupiditate laborum soluta in delectus sint vero!
                Earum enim rerum saepe doloribus natus. Aspernatur nemo voluptatem hic, ratione, doloribus iusto accusantium corrupti tenetur itaque et minima? Inventore repellat aspernatur eveniet voluptatem ut? Corporis assumenda cum porro sapiente?
                </p> 
            </div>
        </div>
    </section>

 <?php 
 incluirTemplates('footer');  
 ?>
