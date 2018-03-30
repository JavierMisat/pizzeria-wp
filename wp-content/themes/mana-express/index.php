<?php

while ( have_posts() ):
	the_post();

	the_date();

	the_title( '<h1>', '</h1>' );

	the_content();

endwhile;