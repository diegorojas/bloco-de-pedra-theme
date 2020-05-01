<?php get_header(); ?>

<div id="container">
		 <div id="superior-post"></div>
	<div id="post-single">
				<?php if (have_posts()) : ?>
			
					<?php while (have_posts()) : the_post(); ?>										

				<div class="post box" id="post-<?php the_ID(); ?>">
							
							<?php if ( get_post_meta($post->ID,'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->

								<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=195&amp;w=540&amp;zc=1&amp;q=95" alt="<?php the_title(); ?>" /></a>
					
							<?php } ?>
						
							<h2><?php the_title(); ?></h2>

							
							<div class="clear"></div>      
				
							<div class="entry">
								<?php if (function_exists('digg_this_button')) { ?><div style="float: left;"><?php digg_this_button(); ?></div><?php } ?>
								<?php the_content('<span class="continue">Continuar a Ler</span>'); ?>
								<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
							</div>
							
							<div class="date-comments">
								<p class="fl">Escrito por <?php the_author_link(); ?><?php edit_post_link('Editar este Post!', ' | ', ''); ?></p>    
								<p class="fr">Categorias: <?php the_category(', ') ?></p>		                                          
							</div>

			<div class="post_meta">
			
				<p><em>Publicado em <?php the_time('d F Y'); ?></em></p>
				<p><?php the_tags('Tags: <span>', ', ', '</span>'); ?></p>
				

				<?php if (function_exists('wp_related_posts')) { ?>
					<h3 class="nomargin">Artigos Relacionados</h3>
					<div class="entry">
						<ul>
							<?php wp_related_posts(); ?>
						</ul>
					</div>
				<?php } ?>


				<?php if (get_option('thrill_author') != "") { ?>
					<h3 class="nomargin">Sobre o Autor</h3>
							<div>
								<p><em><?php the_author_description(); ?></em></p>
							</div>
				<?php } ?>
			</div>
			</div><!-- post-box -->	
			<div class="clear"></div>
	</div><!-- post-single -->		

				<div id="comments" class="box2">
						<?php comments_template('', true); ?>
				</div>

			<div class="box2 navigation">
				<div class="alignright"><?php next_post_link('%link→') ?></div>
				<div class="alignleft"><?php previous_post_link('←%link') ?></div>
			</div>	
			<?php endwhile; ?>

		<?php endif; ?>				

</div><!--/container-->
<?php get_sidebar( 'blog' ); ?>

<?php get_footer( 'blog' ); ?>