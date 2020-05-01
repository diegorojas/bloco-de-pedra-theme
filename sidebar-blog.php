<?php get_sidebar( inicial ); ?>
<div id="sidebar-blocodepedra">
<div id="sidebar-facebook"><!-- SIDEBAR FACEBOOK -->
<h2>Bloco<br />no Facebook</h2>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Maracatu-Bloco-de-Pedra/154844654575434" data-width="238" data-height="285" data-show-faces="true" data-stream="false" data-header="false" style="background-color: #fff; margin:105px 0 0 18px;"></div>
</div><!-- SIDEBAR FACEBOOK -->
<!--<div class="widget">-->

<!-- SIDEBAR TWITTER -->
<div id="sidebar-twitter">
<?php 	/* Widgetized footer, if you have the plugin installed. */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Barra Lateral 1') ) : ?>
 
	<?php wp_meta(); ?>
 
<?php endif; ?>

</div>

<!-- SIDEBAR TWITTER -->

</div>