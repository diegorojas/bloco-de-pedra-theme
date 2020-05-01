<?php get_header(); ?>

<div id="container">
		 <div id="superior-post"></div>
	<div id="post-single">
		<?php if (have_posts()) : ?>
	
    		<div class="box">

                   	<?php if ( get_post_meta($post->ID,'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->

		            <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=195&amp;w=540&amp;zc=1&amp;q=95" alt="<?php the_title(); ?>" /></a>
			
					<?php } ?>
		     	
                <h2><?php the_title(); ?></h2><?php edit_post_link('Editar!', '', '<br style="margin-bottom: 10px;" />'); ?>
        
                <?php while (have_posts()) : the_post(); ?>		
    
                    <div class="post" id="post-<?php the_ID(); ?>">
                    
                        <div class="entry">
                            <?php the_content('<span class="continue">Continuar a Ler</span>'); ?> 
                        </div>
                    
                    </div><!--/post-->
    
                <?php endwhile; ?>
            
            </div>
	
		<?php endif; ?>							
			<div class="clear"></div>
	</div><!--post-single-->
</div><!--/container-->
<?php get_sidebar(); ?>

<?php get_footer(blog); ?>