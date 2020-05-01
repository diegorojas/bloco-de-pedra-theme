<?php get_header( blocodepedra ); /* Template Name: Mapa */ ?>

		<div id="container"><!-- #container -->
			<div id="conteudo-mapa" role="main"><!-- #conteudo-contatos -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content-contato -->
				</div><!-- #post-## -->

<?php endwhile; ?>

			</div><!-- #conteudo-mapa -->
		</div><!-- #container -->

<?php get_footer( blocodepedra ); ?>
