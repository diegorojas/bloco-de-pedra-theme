</div><!-- FINAL MAIN -->

<div id="tags-blog"><!-- INÍCIO TAGS BLOG -->

<?php if ( function_exists('wp_tag_cloud') ) : ?>
<?php wp_tag_cloud('smallest=8&largest=18'); ?>
<?php endif; ?>

</div><!-- FINAL TAGS BLOG -->

<div id="rodape-calonamao"><!-- INÍCIO RODAPÉ CALO NA MÃO -->

<div id="rodape-inicial-redes">
<div id="rede-facebook"><a id="a-facebook" href="http://pt-br.facebook.com/people/Bloco-de-Pedra/100001283132879" target="_blank"></a></div>
		<div id="rede-twitter"><a id="a-twitter" href="http://twitter.com/BlocodePedra" target="_blank"></a></div>
    		<!-- <div id="rede-myspace"><a id="a-myspace" href="http://www.myspace.com/562975241" target="_blank"></a></div> -->
            	<div id="rede-vodpod"><a id="a-vodpod" href="http://vodpod.com/watch/1482971-maracatu-bloco-de-pedra" target="_blank"></a></div>
                	<!-- <div id="rede-flickr"><a id="a-flickr" href=""></a></div> -->
                    	<div id="rede-maracatu"><a id="a-maracatu" href="http://www.maracatu.org.br" target="_blank"></a></div>


</div>

<div id="licenca">
<p>
Desenvolvido com <a href="http://br.wordpress.org/" target="_blank">WordPress</a><br />
Sob uma <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.pt" target="_blank">Licença Creative Commons</a>
<a href="<?php echo home_url( '/' ); ?>creditos">Créditos</a>
</p>
</div>

<div id="rodape-calonamao-logo-bloco"><a id="a-rodape-calonamao-logo-bloco" href="<?php echo home_url( '/' ); ?>"></a></div>

</div><!-- FINAL RODAPÉ CALO NA MÃO -->

<?php wp_footer(); ?>

</body>

</html>