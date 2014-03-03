<?php
/**
 * Template Name: Showcase Template
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * The showcase template in Twenty Eleven consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 *
 * We are creating two queries to fetch the proper posts and a custom widget for the sidebar.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

// Enqueue showcase script for the slider
wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/showcase.js', array( 'jquery' ), '2011-04-28' );

get_header(); ?>

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
  		
     <div class="cont_lft fltlft">
     	<div class="cont_panel fltlft">
        	<?php dynamic_sidebar('Main Sidebar'); ?><!--  join  -->
        </div> <!--  cont_panel  -->
   	  <div class="new_panel fltrht">
		<?php wp_reset_query(); ?>
				<?php 
				$cat2= "News";
				$cat2_id=get_cat_id($cat2);												
				$qry = query_posts("category_name='News'&showposts=3");	
				?>
				<?php  $temp3 = get_post_custom_values("News_images",48);?>
         <h1><?php echo $cat2; ?></h1>
			<?php if(have_posts()):while(have_posts()):the_post();?>
		<?php  $temp3 = get_post_custom_values("News_images");?>
				 <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				  <span><a href="<?php the_permalink(); ?>"><img src="<?php echo $temp3[0]; ?>" width="" height="" alt=""></a></span>
				  <p><?php the_excerpt(); ?></p>
          
          <div class="clear">&nbsp;</div>
			<?php endwhile; endif; ?>  
		
          
         </div> 
     	 <!--  new_panel  -->
     
     </div>  <!--  cont_lft  -->  
    <!-------------------- Side bar start here ---------------------------------------------->
	 
     <?php get_sidebar(); ?>
        
	<!-------------------- Side bar end here ---------------------------------------------->
        
        
     <div class="clear">&nbsp;</div>   
  	</div>
    <!--  End Container  -->
</div>

<?php get_footer(); ?>



				