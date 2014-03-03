<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<!--[if IE 6]>

<html id="ie6" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 7]>

<html id="ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html id="ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width" />

<title><?php wp_title(''); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<link href="<?php bloginfo( 'template_url' ); ?>/css/slider.css" rel="stylesheet" type="text/css">



<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.4.min.js"></script>	


<script type="text/javascript"  src="<?php bloginfo( 'template_url' ); ?>/js/jquery.dropdownPlain.js"></script>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>

	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/easySlider1.5.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){	

			$("#slider").easySlider({

				auto: true,

				continuous: true 

			});

		});	

	</script>





<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->







<style type="text/css">



.front_page .container span input { height: 25px; }



</style>





<?php

	/* We add some JavaScript to pages with the comment form

	 * to support sites with threaded comments (when in use).

	 */

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );



	/* Always have wp_head() just before the closing </head>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to add elements to <head> such

	 * as styles, scripts, and meta tags.

	 */

	wp_head();

?>



<!--<style> #cboxOverlay{opacity:0 !important;} </style>-->

</head>



<body>





<div id="header">

	

    <div class="container">

    	<a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/gsa-logo.png" alt="" class="logo"></a>	

       	<span>

			<form id="searchform" action="<?php echo home_url('/'); ?>" method="get" role="search">

        	<label>Search</label> <input type="text" name="s" class="front_page_search" id="s"> <input type="submit" class="btn" value="&nbsp;">

            </form>

        

        </span>        

	</div>

    <!--  End Container  -->

</div>

<!--  End Header  -->





<!--  menu  -->

<div id="menu">

	<!--  Container  -->

    <div class="container">

    	

    	<?php wp_nav_menu(array("menu"=>"top_menu"));?>

          

         

    </div>

    <!--  End Container  -->





	

</div>

<!--  End menu  -->