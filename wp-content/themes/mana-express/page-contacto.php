<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="hero" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)">
        <div class="contenido-hero">
            <div class="texto-hero">
				<?php the_title( '<h1>', '</h1>' ); ?>
            </div>
        </div>
    </div>

    <div class="principal contenedor contacto">
        <main class="text-centrado contenido-paginas">
            <h2>Realiza una reservación</h2>

            <form class="reservas-contacto" method="POST">
                <div class="campo">
                    <input type="text" placeholder="Nombre" required/>
                </div>

                <div class="campo">
                    <input type="datetime-local" placeholder="Fecha" required/>
                </div>

                <div class="campo">
                    <input type="email" placeholder="Correo" required/>
                </div>

                <div class="campo">
                    <input type="tel" placeholder="Teléfono" required/>
                </div>


                <div class="campo">
                    <textarea name="mensaje" id="mensaje" placeholder="Mensaje" required></textarea>
                </div>
                <input type="submit" name="enviar" class="button">
            </form>

        </main>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>