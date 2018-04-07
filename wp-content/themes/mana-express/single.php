<?php get_header(); ?>

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

    <div class="contenedor comentarios">
		<?php comment_form(); ?>
    </div>

    <div class="contenedor">
        <ul class="lista-comentarios">
			<?php $comentarios = get_comments(
				[
					'post_id' => $post->ID,
					'status'  => 'approve'
				]
			);

			wp_list_comments(
				[
					'per_apeg'          => 10,
					'reverse_top_level' => false,

				], $comentarios
			);

			?>
        </ul>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>