<!doctype html>
<html lang="es_ES">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>

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

</body>
</html>