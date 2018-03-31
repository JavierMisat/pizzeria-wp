<footer>
	<?php

	$args =
		[
			'theme_location' => 'footer-menu',
			'container'      => 'nav',
			'after'          => '<span class="separador">| </span>'
		];

    wp_nav_menu($args);
	?>
    <div class="ubicacion">
        <p>Calle 152, Cra. 116 #152 - 69, Bogotá </p>
        <p>Teléfono: (1) 6971829</p>
    </div>
    <p class="copyright">Todos los derechos reservados &copy;  <?= date('Y'); ?> by <a href="https://nnovamos.co"><img src="<?= get_template_directory_uri(); ?>/img/innovamos-black.png" alt="Innovamos"></inm></a> </p>
</footer>

<?php wp_footer(); ?>


</body>
</html>