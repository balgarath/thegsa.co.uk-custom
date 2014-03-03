<?php
/**
 * Template Name: who_we_are
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

		<!--  Body Container  -->
<div id="body_contnainer">
	<!--  Container  -->
    <div class="container">
  			
        
				<?php 
				$cat3= "Who we are";
				$cat3_id=get_cat_id($cat3);												
				$qry = query_posts("category_name='Who we are'&showposts=4");	
				?>
        
        
     <div class="cont_lft fltlft">
        <div class="news">
         <h1><?php echo $cat3; ?></h1>
          <p><?php echo category_description( $cat3_id ); ?></p> </div> <!--  news  --> 
       
        
		
		<div class="we_are">
				
			 <?php
				
				$g = 1;

			if(have_posts()):
		 
			$list = '';	
		 
		 
			while(have_posts()):the_post();
		 
			$temp = get_post_custom_values("who_images");
			
			$temp2 = get_post_custom_values("designation");
			
			if($g ==1)
			  $class = 'fltlft';
			else if($g ==2)
			  $class = 'fltrht';
			else if($g ==3)
			  $class = 'fltlft pad';
			else if($g ==4)
			  $class = 'fltrht pad';
			
			$list .= '<div class="comment '.$class.'"><h1><a href="'.get_permalink().'">'.get_the_title().'</a></h1><h2>'.$temp2[0].'</h2><span><a href="'.get_permalink().'"><img src="'.$temp[0].'" width="73" height="109" alt=""></a></span>'.get_the_excerpt().'<div class="clear">&nbsp;</div></div> <!--  comment  -->';
			if($g%2 == 0)
			  $list .= '<div class="clear">&nbsp;</div>';
			
			if($g==4)
			  $list .= '';
					
			$g++;
		 
		 
		 endwhile; 
				 
		 endif; 
		 
		 echo $list;
		 
		 ?>  
          
		</div>  	
       
     	
        
        
        
        
        
   	    
     
    </div>  <!--  cont_lft  -->  
     <div class="cont_rht fltrht">
     
     <div class="rht_banner pad ">
        	<?php // sidebarlogin();
		  
		  	dynamic_sidebar("Footer Area One");
		  
		   ?>
       <div class="clear">&nbsp;</div>     
      </div>  <!--  End lft_banner  -->
     
   	      <!-------------------- Side bar start here ---------------------------------------------->
	 
     <?php get_sidebar(); ?>
        
	<!-------------------- Side bar end here ---------------------------------------------->
     
     </div>  
        
        
     <div class="clear">&nbsp;</div>   
  	</div>
    <!--  End Container  -->
</div>
<!--  End Body Container  -->
<?php get_footer(); ?>