<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
 
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmgp.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?> > <!--Thêm class tượng trưng cho mỗi trang lên <body> để tùy biến-->
        <div id="container" >
        	<header id="header">
        		<div class="container">
        			<?php //cswd_logo(); ?>
        			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        				<a href="/">
        					<img src="http://localhost/danguy/wp-content/uploads/2016/03/LOGO-CHU-NEW.png" class="img-responsive" alt="Đảng Bộ Trường Đại học Thủ Dầu Một">
        				</a>
        			</div>
        			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 anhbannerphu">
        				<img src="http://localhost/danguy/wp-content/uploads/2016/03/anhbaner-TOCHUC.png" class="img-responsive" alt="Đảng Bộ Trường Đại học Thủ Dầu Một">
        			</div>
        		</div>
			        
			             <?php cswd_menu( 'primary-menu' ); ?>
                                
			</header>