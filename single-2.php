<?php get_header(); the_post(); ?>
    <section id="news">
        <div><h1 class="section-title text-center"><a href="#news">Guna News</a></h1></div>
        <div class="row">
            <div class="col-md-10">
                <div class="news-block text-center">
<!--                    <div class="news-image">--><?php //the_post_thumbnail(); ?><!--</div>-->
                    <?php $post_date = get_the_date(); ?>
                    <span class="news-date"><?php echo mysql2date('d', $post_date); ?></span>
                    <span class="news-month"><?php echo mysql2date('M', $post_date); ?></span>
                    <h2 class="news-title text-left"><a href="#/news/1"><?php the_title(); ?></a></h2>
                    <div class="news-content text-left"><?php the_content(); ?></div>
                    <div class="news-footer text-left">
                        <?php $tags = get_the_tags(); foreach($tags as $tag) : ?>
                            <a href="#" class="label label-primary label-sm"><?php echo $tag->name; ?></a>
                        <?php endforeach; ?>
                        <a href="#"><?php comments_number(0); ?> <i class="fa fa-comments"></i></a>
                        <a href="#">Written by: </i> <?php the_author(); ?></a>
                        <?php if(is_user_logged_in()): edit_post_link("Edit", '', '', 0, 'label label-warning'); endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <h2>Latest News</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <form id="news-comment" ng-submit="">
                    <h1 class="text-upper">What do you think?</h1>
                    <div class="form-group">
                        <label for="comment-name" class="text-muted">Your Name</label>
                        <input class="form-control" id="comment-name" type="text" placeholder="Leave blank to comment anonymously" />
                    </div>
                    <div class="form-group">
                        <label for="comment-email" class="text-muted">Your Email</label>
                        <input class="form-control" id="comment-email" type="text" placeholder="Leave blank to comment anonymously" />
                    </div>
                    <div class="form-group">
                        <label for="comment-message" class="text-muted">Your Comment</label>
                        <textarea class="form-control" id="comment-message" rows="6" placeholder="What did you feel about the news?"></textarea>
                    </div>
                    <input class="btn btn-sm btn-success" type="submit" value="SUBMIT COMMENT" />
                </form>
            </div>
        </div>
    </section>
<?php get_footer(); ?>