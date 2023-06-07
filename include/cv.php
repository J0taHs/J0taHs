<!-- SECCION CURRICULUM -->
<!-- CORREGIR-->
<section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
        <h2><?php the_field("titulo",264) ?></h2>
            <div class="fila">
                <div class="col izquierda">
                    <div class="item izq">
                    <?php
                        $estudios = get_field('estudios', 290);
                        ?>
                        <h4><?php echo $estudios['primaria']; ?></h4>
                        <span class="casa"><?php echo $estudios['colegio']; ?></span>
                        <span class="fecha"><?php echo $estudios['ano']; ?></span>
                        <P><?php echo $estudios['completo']; ?></P>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                    <?php
                        $estudios = get_field('estudios', 317);
                        ?>
                        
                        <h4><?php echo $estudios['secundaria']; ?></h4>
                        <span class="casa"><?php echo $estudios['colegio']; ?></span>
                        <span class="fecha"><?php echo $estudios['ano']; ?></span>
                        <p><?php echo $estudios['completo']; ?></p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                    <?php
                        $superior = get_field('superior', 326);
                        ?>
                        <h4><?php echo $superior['insti']; ?></h4>
                        <span class="casa"><?php echo $superior['lugar']; ?></span>
                        <span class="fecha"><?php echo $superior['ano']; ?></span>
                        <p><?php echo $superior['proceso']; ?></p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                </div>

                <div class="col derecha">
                    <div class="item der">
                    <?php
                        $practica = get_field('practica', 352);
                        ?>
                        <h4><?php echo $practica['especialidad']; ?></h4>
                        <span class="casa"><?php echo $practica['empresa']; ?></span>
                        <span class="fecha"><?php echo $practica['ano']; ?></span>
                        <p><?php echo $practica['tiempo']; ?></p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                    <?php
                        $analisis = get_field('analisis', 362);
                        ?>
                        <h4><?php echo $analisis['evolutivos']; ?></h4>
                        <span class="casa"><?php echo $analisis['empresa']; ?></span>
                        <span class="fecha"><?php echo $analisis['ano']; ?></span>
                        <p><?php echo $analisis['tiempo']; ?></p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                    <?php
                        $analisis = get_field('analisis', 362);
                        ?>
                        <h4><?php echo $analisis['evolutivos2']; ?></h4>
                        <span class="casa"><?php echo $analisis['empresa']; ?></span>
                        <span class="fecha"><?php echo $analisis['ano']; ?></span>
                        <p><?php echo $analisis['tiempo']; ?></p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>