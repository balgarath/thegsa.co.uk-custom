<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>


		<div id="banner">
	<!--  Container  -->
    <div class="container">
	
  		<div class="lft_banner fltlft">
			<div class="annual_conference">
				<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: ', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header>

					
						<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
						<?php //get_search_form(); ?>
					</div>
					

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->
			</div>	
        </div> <!--  End lft_banner  -->
        
      <div class="rht_banner fltrht">
        	<?php // sidebarlogin();
		  
		  	dynamic_sidebar("Footer Area One");
		  
		   ?>
      </div>  <!--  End lft_banner  -->	
        
  	</div>
    <!--  End Container  -->
</div>
<!--  End Banner  -->











<!--  Body Container  -->
<div id="body_contnainer">
	<!--  Container  -->
    <div class="container">
  		
   <!--  cont_lft  -->  
    <!-------------------- Side bar start here ---------------------------------------------->
	 
     <?php get_sidebar(); ?>
        
	<!-------------------- Side bar end here ---------------------------------------------->
        
        
     <div class="clear">&nbsp;</div>   
  	</div>
    <!--  End Container  -->
</div>


<?php get_footer(); ?>