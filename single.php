<?php get_header();

if(have_posts()) {

    the_post();

    define('TEMPLATE_BASE', get_stylesheet_directory() . '/templates/');

    class GunaPages {
        protected $category;
        protected $current_page_title;
        protected $template_url;

        public function __construct() {
            $this->category = get_the_category()[0]->name;
            $this->current_page_title = get_the_title();
            $this->template_url = TEMPLATE_BASE . strtolower($this->category). '.php';
            require_once($this->template_url);
        }
    }

    $page = new GunaPages();
}

get_footer(); ?>