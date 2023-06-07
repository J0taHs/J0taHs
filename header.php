<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php the_field("titulo_principal", 376) ?></title>
    <!-- Llamamos la hoja de estilos style.css -->
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/mi-script.js"></script>
</head>
<body>
    <?php
    //Si hay posts publicados
    if (have_posts()):
        //Ciclo de todos los posts publicados
        while (have_posts()):
            //Llamamos al post
            the_post();
            ?>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <title>Portfolio</title>
                <link rel="stylesheet" href="estilo.css">
            </head>
            <body>
                <!-- MENU ENCABEZADO -->
                <div class="contenedor-header">
                    <header>
                        <div class="logo">
                        <a href="#"><img src="<?php the_field('logo',376); ?>" /></a>
                        </div>
                        <nav id="nav">
                            <ul>
                                <?php
                                $menu = get_field('menu',404);
                                ?>

                                <li><a href="#inicio" onclick="seleccionar()"><?php echo $menu['inicio']; ?></a></li>
                                <li><a href="#sobremi" onclick="seleccionar()"><?php echo $menu['sobremi']; ?></a></li>
                                <li><a href="#skills" onclick="seleccionar()"><?php echo $menu['habilidades']; ?></a></li>
                                <li><a href="#curriculum" onclick="seleccionar()"><?php echo $menu['curriculum']; ?></a></li>
                                <li><a href="#contacto" onclick="seleccionar()"><?php echo $menu['contacto']; ?></a></li>
                            </ul>
                        </nav>
                        <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </header>
                </div>
            </body>
            </html>
    <?php endwhile; endif; ?>
</body>
</html>
