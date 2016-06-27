<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */


$twitter_link = get_field('twitter_link'); 
$link_name = get_field('link_name');

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
	<div class="site-content">
		<h4>Featured Work</h4>
		
		
			<ul class="homepage-features">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<!-- start the loop -->
				<?php while ( have_posts() ) : the_post(); 
					$image1 = get_field('image_1');
					$size = "medium"; 
				?>
				
				<li class="individual-featured-work">
				
					<figure>
						<?php echo wp_get_attachment_image( $image1, $size ); ?>  
					</figure>
						
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						
				</li>

				<?php endwhile; ?> <!-- end the loop -->
				<?php wp_reset_query(); ?><!-- reset the query -->
				
				</ul>
	
	</div><!-- .site-content -->
</section><!-- .featured-work --> 


<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4>From the Blog</h4>
			
				<?php query_posts('posts_per_page=1'); ?>
				<!-- start the loop -->
				<?php while ( have_posts() ) : the_post(); ?>
				
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="read-more-link">Read more <span>&rsaquo;</span></a>
				
				<?php endwhile; ?> <!-- end the loop -->
				<?php wp_reset_query(); ?><!-- reset the query -->
		
		</div><!-- .blog-post -->
		
        
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <div id="secondary" class="widget-area" role="complementary">
                
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
                        
                <a href="https://twitter.com/<?php echo $twitter_link ?>" class="recent-tweets-handle" target="_blank"><?php echo $link_name; ?><span> &rsaquo;</span></a>
        
            </div><!-- .widget-area -->
            
            
        <?php endif; ?>


	</div><!-- .site-content -->
</section><!-- .recent-posts -> 

<?php get_footer(); ?>