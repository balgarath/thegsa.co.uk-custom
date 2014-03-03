<?php
/**
 * The Template for displaying all single posts.
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
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'single' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
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
  		
      
    <!-------------------- Side bar start here ---------------------------------------------->
	 
     <?php get_sidebar(); ?>
        
	<!-------------------- Side bar end here ---------------------------------------------->
        
        
     <div class="clear">&nbsp;</div>   
  	</div>
    <!--  End Container  -->
</div>

<?php get_footer(); ?>

