<?php get_header( 'blocodepedra' ); /* Template Name: Videos */ ?>

		<div id="container"><!-- #container -->

			<div id="conteudo-videos" role="main"><!-- #conteudo-videos -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<div class="entry-content-sem-fundo">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div><!-- .entry-content-videos -->

<?php endwhile; ?>

			</div><!-- #conteudo-videos -->
		</div><!-- #container -->
        		
        
        <?php get_sidebar( 'blocodepedra' ); ?>

<?php get_footer( 'blocodepedra' ); ?>
