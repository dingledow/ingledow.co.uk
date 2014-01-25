<!DOCTYPE html>  
<html lang="en"> 
<head>
<link href="http://blog.ingledow.co.uk/wp-content/themes/ingledow/single.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="//use.typekit.net/ilo0oai.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php get_header(); ?>
    <div id="container">
    <div id="content">    
 
    	<div id="blog">
	    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
	    <div class="post">
		    <div class="title-single">
		    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		    </div>
		    
		    <div class="entry">
		    	<?php the_content(); ?>
		    </div>
	    
        </div>
        
		<?php endwhile; ?><?php endif; ?>
		
    	</div>
        
    </div>
    </div>
    
</div>

<div id="footer-container">

	<div class="footer">

		<section class="footer-left">
			<p>+44 77083 61889</p><br />
			<p><a href="mailto:david@ingledow.co.uk">david@ingledow.co.uk</a></p>
		</section>
		<section class="footer-right">
			<p>
			<a href="http://twitter.com/dingledow" target="_blank"><img src="http://ingledow.co.uk/images/social/twitter.png"></a>
			<a href="http://www.linkedin.com/in/dingledow" target="_blank"><img src="http://ingledow.co.uk/images/social/linkedin.png"></a>
			<a href="http://pinterest.com/dingledow/" target="_blank"><img src="http://ingledow.co.uk/images/social/pinterest.png"></a>
			<a href="http://dribbble.com/dingledow" target="_blank"><img src="http://ingledow.co.uk/images/social/dribbble.png"></a>
			<a href="https://vimeo.com/dingledow" target="_blank"><img src="http://ingledow.co.uk/images/social/vimeo.png"></a>
			<a href="http://david.ingledow.co.uk" target="_blank"><img src="http://ingledow.co.uk/images/social/tumblr.png"></a>
			</p>
		</section>
	
	</div>

</div>

<!-- ANALYTICS -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37251060-1']);
  _gaq.push(['_setDomainName', 'ingledow.co.uk']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>