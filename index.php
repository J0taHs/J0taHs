<?php get_header(); ?>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
            </div>
           <img src="<?php the_field('fotomio',376); ?>" />
            <h1>Jesús Acuña</h1>
            <h2>Sistemas</h2>
            <div class="redes">
                <a href="https://www.facebook.com/amancayjesus"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://github.com/Amancayjesus136"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.linkedin.com/in/jes%C3%BAs-adri%C3%A1n-amancay-acu%C3%B1a-bb395a26a/"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/megusta.cortarme/"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </section>

    <?php  include get_theme_file_path( 'include/sobremi.php' ); ?>

    <?php  include get_theme_file_path( 'include/habilidades.php' ); ?>

    <?php  include get_theme_file_path( 'include/cv.php' ); ?>

    <?php  include get_theme_file_path( 'include/contacto.php' ); ?>

    <?php get_footer(); ?>