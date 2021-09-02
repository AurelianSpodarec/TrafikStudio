<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    
    <meta name="google-site-verification" content="Pl7-DPy9hmh0AfFcpMgfrd_XAgTdwrtZG7DSAOrhSG8" />
     
<!-- 
    <meta content="Discord - Free Voice and Text Chat" property="og:title">
    <meta content="" property="og:description">
    <meta content="Discord" property="og:site_name">
    <meta content='https://discordapp.com/assets/ba74954dde74ff40a32ff58069e78c36.png' property='og:image'>

 -->

</head>

<body <?php body_class('js-offcanvas-container offcanvas-container relative'); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
        <?php echo \Roots\view(\Roots\app('sage.view'), \Roots\app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>

<?php
    function is_localhost() {
		// set the array for testing the local environment
		$whitelist = array( '127.0.0.1', '::1' );
		// check if the server is in the array
		if ( in_array( $_SERVER['REMOTE_ADDR'], $whitelist ) ) {
			return true;
		}
		
	}
    ?>

    <?php if(!is_localhost()) { ?>
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/612cd38b649e0a0a5cd3a5fa/1febhkn15';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <?php } ?>

    <?php wp_footer(); ?>
</body>
</html>
