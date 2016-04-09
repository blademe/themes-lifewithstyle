
<div class="container" style="margin-top:60px;">
	<div class="row">
		<div class="span8" style="background:#fff;">

		    <h1><?php the_title(); ?></h1>
		    <?php the_content(); ?>
            <?php if (is_page("contact")) { ?> 
				<div class="span12" style="background:#F00;">
                	Thank you, this is the modified contact page
                </div>
			<?php } ?> 
            <?php if (is_page("blog")) { ?> 
				<?php if (have_posts()) : ?>  
					<?php while (have_posts()) : the_post(); ?>    
                    	<div class="post" id="post-<?php the_ID(); ?>">       
                        	<h2>
                            	<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_title(); ?>
                                </a>
                            </h2>      
							<?php echo get_post_meta($post->ID, 'PostThumb', true); ?>      
                            <p class="meta">        
                            	<span>Posted on</span> 
								<?php the_time('F jS, Y'); ?> 
                                <span>by</span> 
								<?php the_author(); ?>      
                                </p>      
								<?php the_content('Read Full Article'); ?>      
                                <p>
								<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', '); ?>        
								<?php comments_popup_link('No Comments;', '1 Comment', '% Comments'); ?>
                                </p>    
                                </div>  
								<?php endwhile; ?>  
								<?php next_posts_link('Older Entries'); ?>  
								<?php previous_posts_link('Newer Entries'); ?>    
								<?php else : ?>  
                                <h2>Nothing Found</h2> 
								<?php endif; ?>
			<?php } ?> 


		</div>

		<div class="span4" style="background:blue;">

	        <?php get_sidebar(); ?>

		</div>
	</div>
</div>




