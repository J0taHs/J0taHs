               <!-- Mapa -->
                    <div class="col">
                    <img src="<?php the_field('mapa', 501) ?>" alt="">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <?php
                                $informacion = get_field('informacion', 501) ?>
                                <?php echo $informacion['direccion']; ?>
                            </li>
                            <li>
                                <i class="fa-solid fa-mobile-screen"></i>
                                <?php echo $informacion['numero']; ?> 
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <?php echo $informacion['email']; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- SECCION CONTACTO -->
    
    <!-- footer -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
            <a href="https://www.facebook.com/amancayjesus"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://github.com/Amancayjesus136"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="https://www.linkedin.com/in/jes%C3%BAs-adri%C3%A1n-amancay-acu%C3%B1a-bb395a26a/"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/megusta.cortarme/"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>