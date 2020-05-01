<?php get_header( blocodepedra ); /* Template Name: Agenda Dinamica */ ?>

		<div id="container"><!-- #container --><div class="titulo-geral-agenda"><h2>Agenda</h2></div>
			<div id="conteudo-agenda" role="main"><!-- #conteudo-agenda -->
				<h1>Grupo Maracatu<br /> Bloco de Pedra</h1>
                <!-- Loop do CPT Agenda -->
		<?php $newsArgs = array( 'order' => 'ASC','post_type' => 'agenda', 'posts_per_page' => 10);                   
        $newsLoop = new WP_Query( $newsArgs );                  
        while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
      	<?php $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
        
        <div id="evnt-agenda">
        <div id="block-data">
			<span id="dt-agenda">
            	<?php echo $my_meta['ag_data']; ?>
            </span><!-- #dt-agenda -->
            
            <span id="nm-agenda">
            	<?php the_title(); ?>
            </span><!-- #nm-agenda -->
        </div>    
            <div id="desc-agenda">
            	<p><?php echo $my_meta['ag_description']; ?></p>
            </div><!-- #desc-agenda -->
            
            	<p><strong>Hor&aacute;rio:</strong>
                <?php echo $my_meta['ag_hora']; ?></p>

            	<p><strong>Endere&ccedil;o:</strong>
                <?php echo $my_meta['ag_endereco']; ?></p>
            	
                <p><strong>Valor:</strong>
            	<?php echo $my_meta['ag_quanto']; ?></p>
            		<div class="linha-blog"><hr /></div>

		</div><!-- #evnt-agenda -->
		<?php endwhile; ?>
        <!-- Loop do CPT Agenda --><br />
			</div><!-- #conteudo-agenda -->
            <div id="pagina-agenda" role="main"><!-- #pagina-agenda -->
   <?php while (have_posts()) : the_post(); ?>		
    
                    <div class="post" id="post-<?php the_ID(); ?>">
                    
                        <div class="entry">
                            <?php the_content('<span class="continue">Continuar a Ler</span>'); ?> 
                        </div>
                    
                    </div><!--/post-->
    
                <?php endwhile; ?>

			</div><!-- #pagina-agenda -->
		</div><!-- #container -->
                <div id="espaco">&nbsp;</div>
<?php get_sidebar( blocodepedra ); ?>
<?php get_footer( blocodepedra ); ?>		
    
