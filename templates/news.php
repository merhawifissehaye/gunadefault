<section id="news">
    <div><h1 class="section-title text-center"><a href="#news">Guna News</a></h1></div>
    <div class="row">
        <div class="col-md-12">
            <div class="news-block text-center">
                <?php $post_date = get_the_date(); ?>
                <span class="news-date"><?php echo mysql2date('d', $post_date); ?></span>
                <span class="news-month"><?php echo mysql2date('M', $post_date); ?></span>
                <h2 class="news-title text-left"><?php the_title(); ?></h2>
                <div class="news-content text-left">
                    <?php the_content(); ?>
                </div>
                <div class="news-footer text-left">
                    <i class="fa fa-tag"></i>
                    <a href="#"><?php echo comments_number(0); ?> Comments</a>
                    <a href="#">Written By <?php the_author()->display_name ?></a>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('comments_form.php'); ?>
</section>