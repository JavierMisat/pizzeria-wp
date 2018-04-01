<?php

/**
 * Template Name: Especialidades
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="hero" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)">
        <div class="contenido-hero">
            <div class="texto-hero">
				<?php the_title( '<h1>', '</h1>' ); ?>
            </div>
        </div>
    </div>

    <div class="principal contenedor">
        <main class="text-centrado contenido-paginas">
			<?php the_content(); ?>
        </main>
    </div>

<?php endwhile; ?>

    <div class="nuestras-especialidades">
        <h3 class="">Pizzas</h3>

        <div class="contenedor-grid">


			<?php
			$args   =
				[
					'post_type'     => 'especialidades',
					'post_per_page' => - 1,
					'orderby'       => 'ASC',
					'category_name' => 'pizzas'
				];
			$pizzas = new WP_Query( $args );
			while ( $pizzas->have_posts() ): $pizzas->the_post();
				?>

                <div class="">
                    <?php the_post_thumbnail('especialidades'); ?>
                   <div class="texto-especialidades">
                       <h4><?php the_title(); ?> <span class="precio">$<?php the_field('precio'); ?></span></h4>
                        <?php the_content(); ?>
                   </div> <!--.texto-especialidades -->
                </div>


				<?php endwhile; wp_reset_postdata(); ?>
        </div>

    </div>


<?php get_footer(); ?>