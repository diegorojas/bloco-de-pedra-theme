<div id="sidebar-blocodepedra">
<div id="sidebar-orelhao"><!-- SIDEBAR ORELH�O BLOCO -->
<a id="a-sidebar-orelhao" href="<?php echo home_url( '/' ); ?>contatos"></a>
<h2>Entre em<br />contato</h2>
<p>para informa&ccedil;&otilde;es<br />sobre o grupo e<br />atividades do projeto</p>
</div><!-- SIDEBAR ORELH�O -->

<div id="sidebar-toadas"><!-- SIDEBAR TOADAS -->
<a id="a-sidebar-orelhao" href="<?php echo home_url( '/' ); ?>nossas-toadas"></a>
<h2>Nossas<br />Toadas</h2>
<p>Confira o nosso<br />repert&oacute;rio!</p>
</div><!-- SIDEBAR TOADAS -->

<div id="sidebar-calonamao">

<?php 	/* Widgetized footer, if you have the plugin installed. */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Bloco de Pedra') ) : ?>
 
	<?php wp_meta(); ?>
 
<?php endif; ?>

</div>

</div>