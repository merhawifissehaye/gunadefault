<section id="footer" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-3">
                <h2 class="footer-brand"><a href="#footer">Guna</a></h2>
                <!-- @todo: decouple the id from the category -->
                <p><?php echo category_description(7) ?></p>
                <p class="text-primary text-upper"><strong>Addresses</strong></p>
                <address>
                <?php
                    $about_footer_post = new WP_Query();
                    $about_footer_post->query('category_name=footer-about');
                    if($about_footer_post->have_posts()) :
                        while($about_footer_post->have_posts()) :
                            $about_footer_post->the_post();
                            echo the_content();
                        endwhile;
                    endif;
                ?>
                </address>

                <p class="text-upper text-primary"><strong>Find us at:</strong></p>
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="https://www.facebook.com/gthplc/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li role="presentation" class="disabled"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li role="presentation" class="disabled"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li role="presentation" class="disabled"><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 links-list">
                <h2 class="column-heading"><a href="#footer" class="text-upper">Twitter Feed</a></h2>
            </div>
            <div class="col-md-3">
                <h2 class="footer-brand"><a href="#footer">Branch <small><sub class="text-lowercase">offices</sub></small></a></h2>
                <!-- @todo: decouple the id from the category -->
                <p><?php echo category_description(6); ?></p>
                <?php
                $branches_footer_post = new WP_Query();
                $branches_footer_post->query('category_name=footer-branch');
                if($branches_footer_post->have_posts()) :
                    while($branches_footer_post->have_posts()) :
                        $branches_footer_post->the_post(); ?>
                        <div class="branch-details">
                            <p class="text-upper"><strong><a class="text-success" href="#"><?php echo the_title(); ?></a></strong></p>
                            <address><?php the_content(); ?></address>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="col-md-3">
                <h2 class="column-heading"><a href="#footer" class="text-upper">Contact Us</a></h2>

                <form action="#">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="text" id="email" class="form-control" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" class="form-control" placeholder="Your Message" cols="30" rows="4" required aria-required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2015, All rights reserved</p>
                <p>Guna Trading House PLC</p>
                <p><a href="http://www.gunatradinghouse.com" class="text-primary">www.gunatradinghouse.com</a></p>
            </div>
            <div class="col-md-offset-4 col-md-2 text-right">Designed and Developed by<br><a class="text-primary" href="http://merhawifissehaye.github.io/works" target="_blank">ZewdWebs Digital Advertising</a></div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="<?php echo blog_info('template_directory', 'show') . '/lib/js/jquery.js'; ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo blog_info('template_directory', 'show') . '/lib/js/bootstrap.min.js'; ?>"></script>

</div>
</body>

</html>