<?php
/**
 * Baseado no tema thriling-pt
 */
 get_header(); ?>
	<div id="container">
		
<?php while ( have_posts() ) : the_post(); ?>
				
    	<div class="box">
			 <div id="superior-post"></div>
<div id="post-single">
        <?php if ( get_post_meta($post->ID,'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->

            <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=195&amp;w=540&amp;zc=1&amp;q=95" alt="<?php the_title(); ?>" /></a>

		<?php } ?>
		
        <h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" class="titulo" ><?php the_title(); ?></a></h2>
        
    
        <div class="entry">
        		<?php if (function_exists('digg_this_button')) { ?><div style="float: left;"><?php digg_this_button(); ?></div><?php } ?>
	    		<?php the_content(); ?>
        </div>
        <div class="date-comments">
            <p class="fl"><span class="comments"><?php comments_popup_link('Nenhum Comentário', '1 Comentário', '% Comentários'); ?></span><?php edit_post_link('Editar este Post!', ' | ', ''); ?></p>    
            <p class="fr"><?php the_category(', ') ?></p>
        </div>
    	</div>
</div>
        
	<?php endwhile; ?>

		<div class="box2 navigation">
			<div class="nav-previous"><?php next_posts_link('← Anterior') ?></div>
			<div class="nav-next"><?php previous_posts_link('Seguinte →') ?></div>
		</div>

		</div><!--/container-->

<?php get_sidebar(blog); ?>

<?php get_footer(blog); ?>