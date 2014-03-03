<?php
/**
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
<div class="vik">
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



				