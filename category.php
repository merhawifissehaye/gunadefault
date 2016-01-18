<?php get_header(); ?>
    <section id="news">
        <div><h1 class="section-title text-center"><a href="#news"><?php single_cat_title(); ?></a></h1></div>
        <?php if(have_posts()) : ?>
        <div class="row">
            <?php while(have_posts()) : the_post(); ?>
            <div class="col-md-4">
                <div class="news-block text-center">
                    <div class="news-image"><?php the_post_thumbnail(); ?></div>
                    <?php $post_date = get_the_date(); ?>
                    <span class="news-date"><?php echo mysql2date('d', $post_date); ?></span>
                    <span class="news-month"><?php echo mysql2date('M', $post_date); ?></span>
                    <h4 class="news-title text-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p class="news-content text-left"><?php echo get_the_excerpt(); ?></p>
                    <div class="news-footer">
                        <?php $tags = get_the_tags(); foreach($tags as $tag) : ?>
                            <a href="#" class="label label-primary label-sm"><?php echo $tag->name; ?></a>
                        <?php endforeach; ?>
                        <a href="#"><?php comments_number(0); ?> <i class="fa fa-comments"></i></a>
                        <?php if(is_user_logged_in()): edit_post_link("Edit", '', '', 0, 'label label-warning'); endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </section>
<?php get_footer(); ?>