<?php get_sidebar( inicial ); ?>
<div id="sidebar">

    <div class="box2">
           
        <ul class="idTabs">
        	<li><a href="#feat">Destaque</a></li>
			<li><a href="#pop">Popular</a></li>
            <li><a href="#comm">Coment.</a></li>
            <li><a href="#tagcloud">Tags</a></li>
        </ul>
        
        <div class="spacer white">

			<ul class="list1" id="feat">
				<?php 
					include(TEMPLATEPATH . '/includes/version.php');	
					$the_query = new WP_Query('cat=' . $ex_feat  . '&showposts=10&orderby=post_date&order=desc');	
					while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
				?>
				
					<li><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
				
				<?php endwhile; ?>		
			</ul>
            
            <ul class="list1" id="pop">            
                <?php include(TEMPLATEPATH . '/includes/popular.php' ); ?>                    
            </ul>

			<ul class="list1" id="comm">
                <?php include(TEMPLATEPATH . '/includes/comments.php' ); ?>                    
			</ul>	

            <div class="list1" id="tagcloud">
                <?php wp_tag_cloud('smallest=10&largest=22'); ?>
            </div>
			
        </div>               
        <!--/spacer -->
        
    </div>
    <!--/box2 -->
    

    <div class="widget">		
    
		<img border="0" style="float: left; vertical-align: middle; padding: 6px 10px 0 0;" alt="search" src="<?php bloginfo('template_directory'); ?>/images/search-trans.png"/>
    	<h4 style="font-size: 20px; font-weight: bold; letter-spacing: -1px;">Pesquisa:</h4>
    	<form action="<?php echo get_option('home'); ?>" method="get" id="searchform">
			<input type="text" value="" size="" id="s" name="s"/>
			<input type="submit" onmouseover="style.cursor='pointer'" value="Pesquisar" style="cursor: pointer;"/>
		</form>
		
	</div><!--/widget-->

<?php if (get_option('thrill_twit_id') != "") { ?>

	<div class="widget">
		<div class="spacer">

            <h2><img src="<?php bloginfo('template_directory'); ?>/images/twitter-trans.png" style="margin: -5px 5px -5px -5px;" alt="" />Twitter</h2>
    		    		
    		<span class="author_photo" style="float: right; margin: 0 0 0 8px;"><a href="http://twitter.com/<?php echo stripslashes(htmlspecialchars(get_option('thrill_twit_id'))); ?>"><img src="<?php echo stripslashes(htmlspecialchars(get_option('thrill_twit_photo'))); ?>" width="48" height="48" alt="" /></a></span>
    		
    		<?php  
			// Your twitter username.  
			$username = get_option('thrill_twit_id');  
			// (HTML is OK, but be sure to escape quotes with backslashes: for example href=\"link.html\")  
			$prefix = "";  
			// Suffix - some text you want display after your latest tweet. (Same rules as the prefix.)  
			$suffix = "";  
			$feed = "http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=3";  
			function parse_feed($feed) {  
				$stepOne = explode("<content type=\"html\">", $feed);  
				$stepTwo = explode("</content>", $stepOne[1]);  
				$tweet = $stepTwo[0];  
				$tweet = str_replace("&lt;", "<", $tweet);  
				$tweet = str_replace("&gt;", ">", $tweet);  
				$tweet = str_replace("&amp;", "&", $tweet); 
				$tweet = str_replace('&quot;', '"', $tweet);
			return $tweet;  
			}  
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $feed);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$twitterFeed = curl_exec($ch);          
			curl_close($ch);
			echo stripslashes($prefix) . parse_feed($twitterFeed) . stripslashes($suffix);  
			?>    		
    		<br style="clear: both;" />
    		
    		<h3 style="margin-top: 10px;"><a href="http://twitter.com/<?php echo stripslashes(htmlspecialchars(get_option('thrill_twit_id'))); ?>" style="color: #363636;">Siga @<?php echo stripslashes(htmlspecialchars(get_option('thrill_twit_id'))); ?> no Twitter?</a></h3>
    		 
		</div>
	</div>

	<?php } ?>


	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>		
    
	<?php endif; ?>
		
    
   <?php if (get_option('thrill_flickr_id') != "") { ?>
    
    <div class="box2">
        <div class="top"></div>
        <div class="spacer flickr">           
            <h3><a href="http://www.flickr.com/photos/<?php echo stripslashes(htmlspecialchars(get_option('thrill_flickr_id'))); ?>/" title=""><span style="color:#363636">As últimas fotos no </span><span style="color:#0063DC">Flick</span><span style="color:#FF0084">r</span><span style="color:#363636"></span></a></h3>
            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo stripslashes(htmlspecialchars(get_option('thrill_flickr_entries'))); ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo stripslashes(htmlspecialchars(get_option('thrill_flickr_id'))); ?>"></script>		
		</div><!--/spacer -->
        <div class="fix"></div>
        <div class="bot"></div>
    </div>
    <!--/box2 -->
    
    <?php } ?>

</div><!--/sidebar-->

<div class="fix"></div>

