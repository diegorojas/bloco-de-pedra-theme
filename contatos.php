<?php get_header( blocodepedra ); /* Template Name: Contatos */ ?>

		<div id="container"><!-- #container -->
			<div id="conteudo-contatos" role="main"><!-- #conteudo-contatos -->
				<div id="box-branco"><!-- #box-branco -->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<div class="entry-content-contato">
						<?php the_content(); ?>
					</div><!-- .entry-content-contato -->
				</div><!-- #post-## -->

<?php endwhile; ?>
				</div><!-- #box-branco -->
			</div><!-- #conteudo-contatos -->
		</div><!-- #container -->

<?php get_footer( blocodepedra ); ?>
