<div id="sidebar-calonamao">

<div id="sidebar-como-chegar"><!-- SIDEBAR COMO CHEGAR BLOCO -->
<a id="a-sidebar-como-chegar" href="<?php echo home_url( '/' ); ?>mapa"></a>
<h2>Veja como chegar</h2>
<p>nas atividades do projeto</p>
</div><!-- SIDEBAR COMO CHEGAR -->

<div id="sidebar-videos"><!-- SIDEBAR VIDEOS -->
<a id="a-sidebar-videos" href="<?php echo home_url( '/' ); ?>nossos-videos"></a>
<h2>Nossos<br />Videos</h2>
</div><!-- SIDEBAR VIDEOS -->

<?php 	/* Widgetized footer, if you have the plugin installed. */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Calo na Mao') ) : ?>
 
	<?php wp_meta(); ?>
 
<?php endif; ?>

<div id="sidebar-facebook"><!-- SIDEBAR FACEBOOK -->
<h2>Calo na Mão<br />no Facebook</h2>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Projeto-Calo-na-M%C3%A3o/357279090957903" data-width="238" data-height="285" data-show-faces="true" data-stream="false" data-header="false" style="background-color: #fff; margin:105px 0 0 18px;"></div>
</div><!-- SIDEBAR FACEBOOK -->

</div>