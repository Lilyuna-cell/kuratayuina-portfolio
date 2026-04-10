<?php
get_header();

if ( file_exists( get_template_directory() . '/home.php' ) ) {
    include( get_template_directory() . '/home.php' );
}

get_footer();
?>