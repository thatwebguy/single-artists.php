<?php

remove_action('genesis_loop','genesis_do_loop');

function amcs_artists_featuredimg() { ?><div id="artist-img"><?php
	if ( has_post_thumbnail() )
            the_post_thumbnail( 'full size' ); ?></div>
<?php }

function amcs_artists_about() { ?>
	<div id="artist-about"><?php
	the_excerpt();
	 ?></div>
<?php }

function amcs_artists_content() { ?>
	<div id="artists-text">
			<?php the_content(); ?>
	</div>
<?php }

add_action('genesis_loop','amcs_artists_featuredimg');
add_action('genesis_loop','amcs_artists_about');
add_action('genesis_loop','amcs_artists_content');

genesis();