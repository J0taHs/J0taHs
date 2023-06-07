<section id="contacto" class="contacto">
        <div class="contenido-seccion">
            <h2><?php the_field("contacto",48) ?></h2>
            <div class="fila">
                <!-- Formulario -->
                <div class="col">
                    <input type="text" placeholder="<?php the_field("nombre", 48)?>">
                    <input type="text" placeholder="<?php the_field("telefono", 48)?>">
                    <input type="text" placeholder="<?php the_field("direccion", 48)?>">
                    <input type="text" placeholder="<?php the_field("tema", 48)?>">
                    <textarea name="" id="" cols="30" rows="10" placeholder="<?php the_field("comentario", 48)?>"></textarea>
                    <button><?php the_field("enviar", 48)?> <i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
                </div>