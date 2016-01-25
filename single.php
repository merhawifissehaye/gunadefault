<?php
get_header();
if(have_posts()) the_post();

if(has_category('News')) {
    require_once('templates/news.php');
}

get_footer(); ?>