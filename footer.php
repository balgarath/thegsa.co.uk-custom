<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content after

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */

?>





<div id="footer">

	<!--  Container  -->

    <div class="container">

   		<ul class="footerlinks">

        	<li>Copyright 2011 </li>

            <li><a href="#">Terms &amp; Conditions </a></li>

            <li class="last"><a href="#">Privacy Policy</a></li>

        </ul>

       

	</div>

    <!--  End Container  -->

</div>

<!--  End Body Container  -->

<script type="text/javascript">
$(window).load(function(){
		setTimeout(function(){
			if($('#cboxOverlay').is(':visible')){
				$("#colorbox").fadeIn();
			}
	},2100);
});	

<?php if(is_user_logged_in()) { ?>

jQuery('.widget').find('.login').replaceWith('<div class="login"><a href="/dashboard">Dashboard</a></div><div class="login"><a href="<?php echo wp_logout_url(); ?>">Logout</a></div>');

<?php } ?>

</script>

<?php wp_footer(); ?>



</body>

</html>