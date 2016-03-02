<?php
		echo "<div class='widget_carousel'><h3 class='widgettitle'>Tiêu điểm</h3>";
		echo "<hr/></div>";
		echo do_shortcode('[sc_carousel_by_cat cat_id="11"]');
        if ( is_active_sidebar('main-sidebar') ) {
                dynamic_sidebar( 'main-sidebar' );
        } else {
                _e('This is widget area. Go to Appearance -> Widgets to add some widgets.', 'cswd');
        }
?>
