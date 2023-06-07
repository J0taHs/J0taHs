<!-- SECCION SOBRE MI -->
<section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
        <h2><?php the_field("titulo",1) ?></h2>
        <p><?php the_field("descripcion",1) ?></p>

            <div class="fila">
                <!-- datos personales -->
                <div class="col">
                    <h3><?php the_field("titulo",111) ?></h3>
                    <ul>
                        <li>
                        <?php
                        $cumpleanos = get_field('cumpleanos', 111);
                        ?>

                        <strong><?php echo $cumpleanos['cumple']; ?></strong>
                        <?php echo $cumpleanos['dia']; ?>
                        </li>
                        <li>
                        <?php
                        $numero = get_field('numero', 111);
                        ?>

                        <strong><?php echo $numero['telefono']; ?></strong>
                        <?php echo $numero['num']; ?>
                        </li>

                        <li>
                        <?php
                        $direccion = get_field('direccion', 111);
                        ?>

                        <strong><?php echo $direccion['domicilio']; ?></strong>
                        <?php echo $direccion['casa']; ?>

                        </li>
                        <li>
                            <?php
                        $email = get_field('email', 111);
                        ?>

                        <strong><?php echo $email['correo']; ?></strong>
                        <?php echo $email['com']; ?>
                        </li>
                    </ul>
                </div>

                <!-- intereses -->
                <div class="col">
                <h3><?php the_field("titulo",84) ?></h3>
                    <div class="contenedor-intereses">
                        <div class="interes">

                        <?php
                            $juegos = get_field('juegos', 92);
                        ?>
                            <span><?php echo $juegos['juego']; ?></span>
                            <?php echo $juegos['icons1']; ?>
                        
                        </div>
                        <div class="interes">

                        <?php
                            $musica = get_field('musica', 92);
                        ?>
                            <span><?php echo $musica['music']; ?></span>
                            <?php echo $musica['icons2']; ?>

                        </div>
                        <div class="interes">

                        <?php
                            $leer = get_field('leer', 92);
                        ?>
                            <span><?php echo $leer['lectura']; ?></span>
                            <?php echo $leer['icons3']; ?>

                        </div>
                        <div class="interes">

                        <?php
                            $tocar = get_field('tocar', 92);
                        ?>
                            <span><?php echo $tocar['instrumento']; ?></span>
                            <?php echo $tocar['icons4']; ?>

                        </div>
                        <div class="interes">

                        <?php
                            $deporte = get_field('deporte', 92);
                        ?>
                            <span><?php echo $deporte['rol']; ?></span>
                            <?php echo $deporte['icons5']; ?>
                            
                        </div>
                        <div class="interes">

                        <?php
                            $adoro = get_field('adoro', 92);
                        ?>
                            <span><?php echo $adoro['animal']; ?></span>
                            <?php echo $adoro['icons6']; ?>

                        </div>
                        <div class="interes">

                        <?php
                            $indagar = get_field('indagar', 92);
                        ?>
                            <span><?php echo $indagar['aprender']; ?></span>
                            <?php echo $indagar['icons7']; ?>

                        </div>
                        <div class="interes">

                            <?php
                            $descansar = get_field('descansar', 92);
                        ?>
                            <span><?php echo $descansar['dormir']; ?></span>
                            <?php echo $descansar['icons8']; ?>

                        </div>
                        
                    </div>
                </div>
            </div>
            <?php
            $file = get_field('file'); ?>
            <a href="<?php the_field('file', 92) ?>" target="_blank" download="CV PDF"><button><?php the_field('cv', 92)?><i class="fa-solid fa-download"></i>
                <span class="overlay"></span>
            </button></a>
        </div>
    </section>