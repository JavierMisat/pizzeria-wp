<!doctype html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= the_title() ?></title>
	<?php wp_head(); ?>
</head>
<body>

<header class="encabezado-sitio">
    <div class="contenedor">
        <div class="logo">
            <a href="<?= esc_url( home_url( '/' ) ); ?>">
                <img src="<?= get_template_directory_uri() ?>/img/logo.svg" class="logotipo" alt="">
            </a>
        </div>  <!--.logo -->

        <div class="informacion-encabezado">
            <div class="redes-sociales">
				<?php
				$args =
					[
						'theme_location'  => 'social-menu',
						'container'       => 'nav',
						'container_class' => 'sociales',
						'container_id'    => 'sociales',
						'link_before'     => '<span class="screen-reader-text">',
						'link_after'      => '</span>',
						'',
					];

				wp_nav_menu( $args );
				?>
            </div><!--.redes-sociales -->

            <div class="direccion">
                <p>Calle 152, Cra. 116 #152 - 69, Bogotá </p>
                <p>Teléfono: (1) 6971829</p>
            </div>

        </div> <!--.informacion-encabezado-->

    </div>  <!--.contenedor -->
</header>

<div class="menu-principal">

    <div class="mobile-menu">
        <a href="#" class="mobile"><i class="fas fa-bars"></i> Menu</a>
    </div>

    <div class="contenedor navegacion">
		<?php
		$args =
			[
				'theme_location'  => 'header-menu',
				'container'       => 'nav',
				'container_class' => 'menu-sitio',
			];

		wp_nav_menu( $args );
		?>
    </div>
</div>

