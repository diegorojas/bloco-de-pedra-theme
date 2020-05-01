<?php get_header( 'calonamao' ); /* Template Name: Calo na Mao */ ?>

		<div id="container"><!-- #container -->
        
            <div id="superior-post"></div>
		
        	<div id="conteudo-calonamao" role="main"><!-- #conteudo calonamao -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php the_post_thumbnail(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( is_front_page() ) { ?>

						<h2 class="entry-title"><?php the_title(); ?></h2><?php edit_post_link( __( 'Editar', 'twentyten' ) ); ?>
						
					<?php } else if ( is_page( 'projeto-calo-na-mao' ) ) { ?>
					<?php } else { ?>

						<h1 class="entry-title"><?php the_title(); ?></h1><?php edit_post_link( __( 'Editar', 'twentyten' ) ); ?>

					<?php } ?>

					<div class="entry-content">

						<?php the_content(); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>

					</div><!-- .entry-content -->

				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #conteudo calonamao -->

		<div id="inferior-post"></div>
		
        </div><!-- #container -->

<?php get_sidebar( 'calonamao' ); ?>

<?php get_footer( 'calonamao' ); ?>