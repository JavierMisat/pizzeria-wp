<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>

<article>
	<h1> <?= the_title(); ?></h1>
	<p>Fecha: <?= the_date(); ?></p>
	<p>Autor: <?= the_author(); ?></p>

	<p class="content-area">
		<?= the_content(); ?>
	</p>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>