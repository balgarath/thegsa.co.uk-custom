<?php

/**
 *
 * Template Name: Homepage
 *
 * This is the template that displays homepage.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */



get_header(); ?>



<!--  Banner  -->

<div id="banner">

	<!--  Container  -->

    <div id="content">

	

  		<div class="lft_banner fltlft">

				 <?php 

				$cat= "Slider";

				$cat_id=get_cat_id($cat);												

				$qry = query_posts("showposts=5&cat_id=".$cat_id);									

				?>

				

				

				<?php $temp = get_post_custom_values("slider_images",39);?>

				<?php $temp1 = get_post_custom_values("slider_text",57);?>

				

        	<div id="slider">

                <ul>				

                    <li><div class="slider_img"><a href="#"><img src="<?php echo $temp[0];?>" width="705" height="282" alt=""></a> <span><?php echo $temp1[0];?></span></div></li>

                    <li><div class="slider_img"><a href="#"><img src="<?php echo $temp[1];?>" width="705" height="282" alt=""></a> <span><?php echo $temp1[1];?></span></div></li>

					<li><div class="slider_img"><a href="#"><img src="<?php echo $temp[2];?>" width="705" height="282" alt=""></a> <span><?php echo $temp1[2];?></span></div></li>

                </ul>

			</div>

				

        </div> <!--  End lft_banner  -->

        

       <!--<div class="rht_banner fltrht">

        	<h1>Members’ login</h1>

            <label>Username</label> <input type="text">

            <div class="clear">&nbsp;</div>

            <label>Password</label> <input type="text">

            <div class="clear">&nbsp;</div>

        	<input type="button" class="btn" value="Login">

       	  <div class="clear">&nbsp;</div>

            <p><a href="#">Forgot username</a>?</p>

            <p><a href="#">Forgot password</a>?</p>

            <a href="#" class="join_now"><img src="<?php bloginfo( 'template_url' ); ?>/images/join_now.jpg" width="131" height="34" alt=""></a>

      </div> -->

		<div class="rht_banner fltrht">

        	  <?php // sidebarlogin();

		  

		  	dynamic_sidebar("Footer Area One");

		  

		   ?>

		</div>

	

      <!--  End lft_banner  -->	

        

  	</div>

    <!--  End Container  -->

</div>

<!--  End Banner  -->



<!--  Body Container  -->

<div id="body_contnainer">

	<!--  Container  -->

    <div class="container">

  		

     <div class="cont_lft fltlft">

	 

     	<div class="cont_panel fltlft" style="padding-bottom:20px;">

        	<?php dynamic_sidebar('Main Sidebar'); ?>

			<!--  join  -->

        </div> <!--  cont_panel  -->

		

		<div class="new_panel fltrht">

		<?php wp_reset_query(); ?>

				<?php 

				$cat2= "News";

				$cat2_id=get_cat_id($cat2);												

				$qry = query_posts("category_name='News'&showposts=3");	

				?>

				

				

         <h1><?php echo $cat2; ?></h1>

			<?php if(have_posts()):while(have_posts()):the_post();?>

				<?php   $key = 'News_images';
		
						$themeta = get_post_meta($post->ID, $key, TRUE);
						
						if($themeta != '') {
										
							$temp3	=  get_post_custom_values($key);
					    
					    		$img	= '<span><img src="'.$temp3[0].'" width="" height="" alt="" align="right"></span>'.get_the_excerpt();
						
							
						}
						else
						{
							$img = get_the_excerpt();;
							
						
			
						}
				?>

				  <a href="<?php the_permalink(); ?>"> <h2><?php the_title(); ?></h2></a>
				  	
				  	<?php echo $img?>
				  	
				  	

          

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

<!--  End Body Container  -->	



<?php get_footer(); ?>