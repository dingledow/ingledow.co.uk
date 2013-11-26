<?php get_header(); ?>
    <div id="container">
    <div id="content">
    
        <nav>
        	<ul>
            	<li><a href="http://ingledow.co.uk/">ABOUT ME</a></li>
                <li>WORK</li>
                	<div id="work-nav"><p><a href="http://ingledow.co.uk/veezo">VEEZO</a></p><p><a href="http://ingledow.co.uk/remember-the-person">REMEMBER THE PERSON</a></p><p><a href="http://ingledow.co.uk/orbis">ORBIS</a></p><p><a href="http://ingledow.co.uk/troy-davis-amnesty-international">AMNESTY INTERNATIONAL</a></p><p><a href="http://ingledow.co.uk/semi-precious-magazine">SEMI-PRECIOUS MAGAZINE</a></p><p><a href="http://ingledow.co.uk/jb-heritage-consultancy">JB HERITAGE CONSULTANCY</a></p></div>
                <li><span class="highlight"></span><a href="http://blog.ingledow.co.uk/">BLOG</a></span></li>
                <li><a href="http://ingledow.co.uk/links">LINKS</a></li>
            </ul>
        </nav>
    
    	<article>
 
    	<div id="blog">
    	
        	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        	
        	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      		<?php /* If this is a category archive */ if (is_category()) { ?>
        		<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
      		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        		<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
   		   <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
   		     <h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
   		   <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
   		     <h2>Archive for <?php the_time('F, Y'); ?>:</h2>
   		   <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
   		     <h2>Archive for <?php the_time('Y'); ?>:</h2>
   		   <?php /* If this is an author archive */ } elseif (is_author()) { ?>
   		     <h2>Author Archive</h2>
  		    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
  		      <h2>Blog Archives</h2>
  		  <?php } ?>
 
        	<div class="post">
        	
        		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 
            		<div class="entry">
                	<?php the_post_thumbnail(); ?>
                	<?php the_content(); ?>
 
                	<p class="postmetadata">
                	<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                	<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                	</p>
 
            		</div>
        	</div>


		<?php endwhile; ?>
 
        
 
        <?php endif; ?>
    	</div>
        
        </article>
        
    </div>
    </div>
</body>
</html>