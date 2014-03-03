<?php
/**
 * Template Name:Dashboard

 */

// Enqueue showcase script for the slider

get_header(); ?>

		<!--  Body Container  -->
<div id="body_contnainer">
	<!--  Container  -->
    <div class="container">
  			
        
        
        
        
     <div class="cont_lft fltlft">
        <div class="my_account">
          <h1>Dashboard</h1>
          	<ul>
            	<li><a href="<?php echo bp_loggedin_user_domain() ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/acc_01.jpg" width="113" height="93" alt=""></a> 
           	    <p>My account</p></li>
                <li><a href="/category/documents/"><img src="<?php bloginfo( 'template_url' ); ?>/images/acc_02.jpg" width="88" height="93" alt=""></a>
                <p>Documents</p></li>
				<li><a href="/category/presentations/"><img src="<?php bloginfo( 'template_url' ); ?>/images/presentation.jpg" width="81" height="93" alt=""></a>
                <p>Presentations</p></li>
                <li><a href="/category/videos/"><img src="<?php bloginfo( 'template_url' ); ?>/images/acc_03.jpg" width="88" height="93" alt=""></a>
                <p>Videos</p></li>
                <li><a href="/report-of-injury/"><img src="<?php bloginfo( 'template_url' ); ?>/images/acc_04.jpg" width="88" height="93" alt=""></a>
                <p>Report of Injury</p></li>
                <li><a href="/become-a-speaker"><img src="<?php bloginfo( 'template_url' ); ?>/images/acc_05.jpg" width="83" height="78" alt=""></a>
                <p>Become a Speaker</p></li>
                <li><a href="<?php echo bp_loggedin_user_domain() ?>messages/"><img src="<?php bloginfo( 'template_url' ); ?>/images/acc_06.jpg" width="99" height="78" alt=""></a>
                <p>Messages</p></li>
				<li><a href="/groups/"><img src="<?php bloginfo( 'template_url' ); ?>/images/acc_07.jpg" width="88" height="78" alt=""></a>
                <p>Groups</p></li>
                <li><a href="/members/"><img src="<?php bloginfo( 'template_url' ); ?>/images/members.png" width="88" height="78" alt=""></a>
                <p>Members</p></li>
                <li><a href="/contact-us/"><img src="<?php bloginfo( 'template_url' ); ?>/images/acc_08.jpg" width="88" height="78" alt=""></a>
                <p>Support</p></li>
            </ul>
            
            <div class="clear">&nbsp;</div>
            
        </div> <!--  my_account  --> 

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