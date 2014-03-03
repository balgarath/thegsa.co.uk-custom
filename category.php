<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); 

foreach((get_the_category()) as $category) 
{ 
	  //$postcat= $category->cat_ID; 
	  $current_cat =$category->cat_name;
} 

if($current_cat == "Documents") {
?>
<style type="text/css">
.new_panel {
    height: auto;
    margin: 0;
    padding: 0;
     width: 712px;
}


.new_panel a {
    border-bottom: 0px solid #CEE1E5;
    color: #004281;
       display: block;
       float: left;
    font: bold 14px Arial,Helvetica,sans-serif;
    margin: 0 0 18px;
    padding: 0 0 5px;
    text-decoration: none;
        width: 350px;
}


.new_panel h2 {
    /*border-bottom: 1px solid #CEE1E5;*/
    color: #004281;
      display: inline;
    font: bold 14px Arial,Helvetica,sans-serif;
    margin: 0 0 18px;
    padding: 0 0 5px;
}
</style>
<?php } ?>
	<!--  Body Container  -->
<div id="body_contnainer">
	<!--  Container  -->
    <div class="container">
  		
        
        
    <?php if (in_category('6')) { ?>    
       
	<div class="cont_lft fltlft">
        <div class="news">
<?php if(is_category('Who we are')){ ?><h1>Directors</h1><?php } else { ?><h1><?php single_cat_title(); ?></h1> <?php } ?>
         
          <p><?php echo category_description( $cat3_id ); ?></p>
		</div> <!--  news  --> 
       
        
		
		<div class="we_are">
				
			 <?php
				
				$g = 1;

			if(have_posts()):
		 
			$list = '';	
		 
		 
			while(have_posts()):the_post();
		 
			$temp = get_post_custom_values("who_images");
			
			$temp2 = get_post_custom_values("designation");
			
			if($g ==1 || $g ==5 || $g ==9)
			  $class = 'fltlft';
			else if($g ==2 || $g ==6 || $g ==10)
			  $class = 'fltrht';
			else if($g ==3 || $g ==7 || $g ==11)
			  $class = 'fltlft pad';
			else if($g ==4 || $g ==8 || $g ==12)
			  $class = 'fltrht pad';
			
			$list .= '<div class="comment '.$class.'"><h1><a href="'.get_permalink().'">'.get_the_title().'</a></h1>
					  <h2>'.$temp2[0].'</h2>
					  <span><a href="'.get_permalink().'">
					  <img src="'.$temp[0].'" width="73" height="109" alt=""></a></span>'.get_the_excerpt().'<div class="clear">&nbsp;</div></div> <!--  comment  -->';
			if($g%2 == 0)
			  $list .= '<div class="clear">&nbsp;</div>';
		
					
			$g++;
		 
		 
		 endwhile; 
				 
		 endif; 
		 
		 echo $list;
		 
		 ?>  
          
		</div>  	
		
	
	<?php }else { ?>	
     <div class="cont_lft fltlft">
        <div class="news">
		
          <h1><?php single_cat_title() ?></h1>
          <p><?php echo category_description( $cat_id ); ?></p>
       
        </div>
			
         <!-- <div class="clear">&nbsp;</div> -->
     
        
         <?php
				
				$g = 1;

		if(have_posts()):
		 
			$list = '<div class="new_panel fltlft def">';
		 
		 while(have_posts()):the_post();
		 
		 
		 $key = 'News_images';
		
		$themeta = get_post_meta($post->ID, $key, TRUE);
		
		if($themeta != '') {
						
			$i	=  get_post_custom_values($key);
	    
	    		$img	= '<span><img src="'.$i[0].'" width="108" height="77" alt=""></span>';
				
		}
		else
			$img = '';
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
			//$temp = get_post_custom_values("News_images");
		 
			  $gclass = '';	
			  $clear_div = '';
			
			if($g % 1 == 0)
			  $gclass = "fltlft"; 			
	
			if($g % 2 == 0)
			{
			  $gclass = "fltrht";
			  $clear_div = '<div class="clear">&nbsp;</div>';
			}
				
		//echo "<br> :: ".$current_cat;

		/*  OLD EXCERPT CONDITION SCRIPT START

		if($current_cat != "Documents" || $current_cat != "Videos") {
			
			$list .= '<div class="'.$gclass.' abc"><a href="'.get_permalink().'"><h2>'.get_the_title().'</h2>
       	  '.$img.'</a>
          '.get_the_excerpt().'</div>';

			$list .= $clear_div;
		}
		else if($current_cat == "News")
		{
			$list .= '<a href="'.get_permalink().'"><h2>'.get_the_title().'</h2>
       	  '.$img.'</a>
          '.get_the_excerpt();
		}  
		else
		{
			$list .= '<a href="'.get_permalink().'"><h2>'.get_the_title().'</h2>
       	  '.$img.'</a>
          ';
		}  
         
		 OLD EXCERPT CONDITION SCRIPT END */
		        
		 

		if($current_cat == "News" || $current_cat == "Services")
		{
			$list .= '<div class="'.$gclass.' abc"><a href="'.get_permalink().'"><h2>'.get_the_title().'</h2>
       	  '.$img.'</a>
          '.get_the_excerpt().'</div>';

			$list .= $clear_div;
		}  
		else
		{
			$list .= '<div class="'.$gclass.' abc"><a href="'.get_permalink().'"><h2>'.get_the_title().'</h2>
       	  '.$img.'</a></div>';
			$list .= $clear_div;
		} 	
	

				$g++;
		 
		 
		 endwhile; 
		 
		 if($current_cat == "Documents")
			 {
				$list .= ' <!--  new_panel  </div><div class="new_panel fltrht">-->';
			 
			 }



		 $list .= '</div> <!--  new_panel  -->';
		 
		 endif; 
		 
		 echo $list;
		 
		 ?>  
		 
        <?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); };?>
     
		<?php } ?>
     
     
     
     </div>  <!--  cont_lft  -->  
     <div class="cont_rht fltrht">
     
     	<div class="rht_banner pad ">
        	<?php // sidebarlogin();
		  
		  	dynamic_sidebar("Footer Area One");
		  
		   ?>   
      </div>  <!--  End lft_banner  -->	
     <div class="clear">&nbsp;</div>
     
     
   	   <?php get_sidebar(); ?>
        
     
     </div>  
        
        
     <div class="clear">&nbsp;</div>   
  	</div>
    <!--  End Container  -->
<div class="clear">&nbsp;</div>
</div>
<!--  End Body Container  -->

<?php get_footer(); ?>
