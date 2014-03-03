<?php
/**
 * Template Name: page no widgets
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<!--  Banner  -->
<div id="banner">
	<!--  Container  -->
    <div class="container">
	
  		<div class="lft_banner fltlft">
			<div class="annual_conference">
				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php //comments_template( '', true ); ?>
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
	 
     <?php get_sidebar(); ?>
        
	<!-------------------- Side bar end here ---------------------------------------------->
        
        
     <div class="clear">&nbsp;</div>   
  	</div>
    <!--  End Container  -->
</div>

<?php get_footer(); ?>



				