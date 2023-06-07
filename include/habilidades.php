<!-- SECCION SKILLS -->
<section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2><?php the_field('titulo1',434) ?></h2>
            <div class="fila">
                <!-- Technical Skill -->
                <div class="col">
                    <div class="skill">
                        <?php
                        $word = get_field('word', 434);
                        ?>

                        <span><?php echo $word['titulo1']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span><?php echo $word['titulo2']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje2']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span><?php echo $word['titulo3']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje3']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span><?php echo $word['titulo4']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje4']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                    <span><?php echo $word['titulo5']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje5']?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Professional Skills -->
                <div class="col">
                    <div class="skill">
                    <span><?php echo $word['titulo6']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje6']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                    <span><?php echo $word['titulo7']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje7']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                    <span><?php echo $word['titulo8']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje8']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                    <span><?php echo $word['titulo9']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje9']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                    <span><?php echo $word['titulo10']; ?></span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span><?php echo $word['porcentaje10']?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>