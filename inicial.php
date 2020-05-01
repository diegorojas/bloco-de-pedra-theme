<?php get_header(); /* Template Name: Inicial */ ?>

		<div id="container"><!-- #container -->
			<div id="conteudo-inicial" role="main"><!-- #conteudo inicial -->

<div id="post-highlightao"><?php if(function_exists("insert_post_highlights")) insert_post_highlights(); ?></div>

			</div><!-- #conteudo inicial -->
		</div><!-- #container -->

<?php get_sidebar( inicial ); ?>
<?php get_footer( inicial ); ?>
