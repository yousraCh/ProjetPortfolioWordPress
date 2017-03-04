
<?php get_header();  ?>

    <div id="error-page" class="container" style="position: absolute" style="margin: auto">
        <main id="main" class="site-main" role="main">
            <section class=""error-404 not-foun">
                <header class=""page-header">
                    <h1 clas"page-title"> 404 ERROR! Sorry, page not found!</h1>
                </header>
            </section>
            <div class="page-content">
                <h3> it looks like nothing was found at this location, maybe try one of the links blow or a search ?</h3>
              <?php get_search_form(); ?>
                <!--<form role="search" method="get" action="<?php /*echo home_url('#');*/?>">
                    <input type="search" class="form-control" placeholder="Search" value="<?php /*echo get_search_query() */?>" name="s" title="Search"/>
                </form>-->
                <?php /*the_widget('WP_Widget_Recent_Posts');*/ ?>
                <div id="image-404">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/IMG-20150323-WA0028.jpg" alt="error 404" href="#">
                </div>
                <p><h3> here are some useful links :</h3></p>
                <p><a href="#">Click Here!</a></p>
               <!-- <div class="widfet widget_categories">
                    <h3>Check the most used categories</h3>
                    <ul>
                        <?php
/*                        wp_list_categories(array(
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'show_count' => 1,
                            'title_li'=>'',
                            'number' => 5,
                        )); */?>
                    </ul>
                </div>-->
            </div>

        </main>
    </div>

<?php get_footer(); ?>



