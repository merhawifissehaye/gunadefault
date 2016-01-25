<?php get_header(); ?>
<?php $template_directory = get_bloginfo('template_directory', 'display'); ?>
<section id="slider" style="background: url(<?php echo $template_directory . '/img/stock-exchange.jpg';?>)">
    <div class="carousel row">
        <div class="slide-text text-center">
            <h1 class="slide-title">Agricultural Products</h1>
            <h2 class="slide-description">Natural Oil Seeds, Natural Gum of Olibanium,
                Ethiopian Coffee Arabica, Naturally Cultivated
                Pulses, Spices.</h2>
        </div>
        <div class="slide-btn text-center"><a href="#" class="btn btn-success">Explore</a></div>
    </div>
    <div class="navigation">
        <div class="slide-nav slide-left text-center"><i class="glyphicon glyphicon-menu-left"></i></div>
        <div class="slide-nav slide-right text-center"><i class="glyphicon glyphicon-menu-right"></i></div>
    </div>
</section>

<section id="services">
    <div><h1 class="section-title text-center"><a href="#services">What We Offer</a></h1></div>
    <?php
        query_posts('category_name=Services');
        if(have_posts()) :
    ?>
    <div class="row">
        <?php
            while(have_posts()) :
                the_post();
        ?>
        <div class="col-md-4">
            <div class="service-block text-center">
                <i class="fa fa-2x fa-umbrella"></i>
                <h2 class="block-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="block-content"><?php the_content() ?></p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>
<hr/>
<section id="news">
    <div><h1 class="section-title text-center"><a href="#news">News</a></h1></div>
    <?php
        query_posts('category_name=News');
        if(have_posts()) :
            while(have_posts()) :
                the_post();
    ?>
    <div class="row">
        <div class="col-md-4">
            <div class="news-block text-center">
                <div class="news-image"><?php the_post_thumbnail(array(400, 150)) ?></div>
                <?php $post_date = get_the_date(); ?>
                <span class="news-date"><?php echo mysql2date('d', $post_date); ?></span>
                <span class="news-month"><?php echo mysql2date('M', $post_date); ?></span>
                <h4 class="news-title text-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p class="news-content text-left"><?php echo get_the_excerpt(); ?></p>
                <div class="news-footer">
                    <?php $tags = get_tags(); foreach($tags as $tag): ?>
                    <a href="<?php echo bloginfo('url') . '/?tag=' . $tag->slug ?>" class="label label-default"><?php echo $tag->name; ?></a>
                    <?php endforeach; ?>
                    <a href="#"><?php echo comments_number(0); ?> <i class="fa fa-comments text-success"></i></a>
                    <?php if(is_user_logged_in()): edit_post_link("Edit", '', '', 0, 'label label-warning'); endif; ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>