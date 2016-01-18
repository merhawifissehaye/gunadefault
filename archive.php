<?php get_header(); ?>

<?php if(is_day()) : ?>
    <?php printf(__("Daily archives. <span>%s</span>", 'guna'), get_the_time(get_option('date_format'))) ?>
    <h2><?php get_the_time(); ?></h2>
<? endif; ?>

<?php get_footer(); ?>
