
<?php
/* features images */
 add_theme_support('post-thumbnails');


    function portfolio_script_enqueue(){
		wp_enqueue_style('style',get_template_directory_uri().'/css/portfolio-cv.css',array(),'1.0.0','all');
        wp_enqueue_script( 'javascript', get_template_directory_uri().'/js/portfolio-cv.js', array(),'1.0.0',true);
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array(),'1.0.0',true);

        /*  wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), '1.9.1', true); // we need the jquery library for bootsrap js to function
          wp_enqueue_style('jquery');*/
        //wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css',array(),'1.0.0','all');
	}

//enqueues external font awesome stylesheet
function enqueue_fontawesome_stylesheets(){
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_fontawesome_stylesheets');

function load_js(){
        wp_deregister_script('jquery');
        wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), '1.9.1', true); // we need the jquery library for bootsrap js to function
        wp_enqueue_style('jquery');
    }

    add_action('wp_enqueue_scripts','load_js');

    add_action('wp_enqueue_scripts','portfolio_script_enqueue');

        /* Custom Post Type CV */

 /***** create a post type for posts */
function yresume_post_register(){
    $labels = array(
        'name' => _x('Y Resume', 'post type general name'),
        'singular_name' => _x('CV Item', 'post type singular name'),
        'add_new' => _x('Add New', 'CV item'),
        'add_new_item' => __('Add New CV Item'),
        'edit_item' => __('Edit CV Item'),
        'new_item' => __('New CV Item'),
        'view_item' => __('View CV Item'),
        'search_items' => __('Search CV'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => 'Parent Item');
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions')
    );
    register_post_type('yresume', $args);
}

add_action('init', 'yresume_post_register');


/***** create a post type for skills */
function skills_post_register(){
    $labels = array(
        'name' => _x('Skills', 'post type general name'),
        'singular_name' => _x('Skills Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Skills item'),
        'add_new_item' => __('Add New Skills Item'),
        'edit_item' => __('Edit Skills Item'),
        'new_item' => __('New Skills Item'),
        'view_item' => __('View Skills Item'),
        'search_items' => __('Search Skills'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions')
    );

    register_post_type('skills', $args);
}

add_action('init', 'skills_post_register');


/***** create a post type for portfolio */
function My_portfolio_post_register(){
    $labels = array(
        'name' => _x('Portfolio', 'post type general name'),
        'singular_name' => _x('Portfolio Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Portfolio item'),
        'add_new_item' => __('Add New Portfolio Item'),
        'edit_item' => __('Edit Portfolio Item'),
        'new_item' => __('New Portfolio Item'),
        'view_item' => __('View Portfolio Item'),
        'search_items' => __('Search Portfolio'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => 'Parent Item');
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions'));
    register_post_type('my_portfolio', $args);
}
add_action('init', 'my_portfolio_post_register');


/* Ajout de Taxonomie */

register_taxonomy('Types',
    array('yresume'),
    array('hierarchical' => true,
        'label' => 'Categories',
        "singular_label" => "Resume Item Type",
        "rewrite" => true));

register_taxonomy('Skills',
    array('skills'),
    array('hierarchical' => true,
        'label' => 'Categories',
        "singular_label" => "Skills Item",
        "rewrite" => true));

/* Ajouter la taxonomie portfolio */
register_taxonomy('My_portfolio',
    array('my_portfolio'),
    array('hierarchical' => true,
        'label' => 'Categories',
        "singular_label" => "Portfolio Item",
        "rewrite" => true));

/*  Add and Edit post page */

function meta_post(){
    global $post;
    $custom = get_post_custom($post->ID);
    $year_start = $custom["year_start"][0];
    $year_completed = $custom["year_completed"][0];
    $local_post = $custom["local_post"][0];
  ?>
    <p><label><h4>Year start:</h4></label></p>
       <p> <textarea cols="50" rows="5" name="year_start"><?php echo $year_start; ?></textarea></p>
    <p><label><h4>Year complet:</h4></label></p>
       <p> <textarea cols="50" rows="5" name="year_completed"><?php echo $year_completed; ?></textarea></p>
    <p><label><h4>local:</h4></label></p>
        <p><textarea cols="50" rows="5" name="local_post"><?php echo $local_post; ?></textarea></p>
    <?php
}

function admin_init(){
    add_meta_box("meta_post", "Employement ou Education", "meta_post", "yresume", "normal", "low");
}
add_action("admin_init", "admin_init");


/* sauvegarder les valeurs ajoutées */

function save_post(){
    global $post;
    update_post_meta($post->ID, "year_start", $_POST["year_start"]);
    update_post_meta($post->ID, "year_completed", $_POST["year_completed"]);
    update_post_meta($post->ID, "local_post", $_POST["local_post"]);
}
add_action('save_post', 'save_post');

/*  Add and Edit skills */
function meta_skills(){
    global $post;
    $custom = get_post_custom($post->ID);
    $skills_degree = $custom["skills_degree"][0];
    $skills_color = $custom["skills_color"][0];

    ?>
    <p><label><h4>Skills degree:</h4></label></p>
    <p> <input cols="50" rows="5" name="skills_degree" value="<?php echo $skills_degree; ?>"></p>
    </p>
    <p><label><h4>Skills color:</h4></label></p>
    <p> <input cols="50" rows="5" name="skills_color" value="<?php echo $skills_color; ?>"></p>
    </p>
    <?php
}
function admin_init_skills(){
    add_meta_box("meta_skills", "Competence", "meta_skills", "skills", "normal", "low");
}
add_action("admin_init", "admin_init_skills");

/* ** sauvegarder les valeurs ajoutées */

function save_skills(){
    global $post;
    update_post_meta($post->ID, "skills_degree", $_POST["skills_degree"]);
    update_post_meta($post->ID, "skills_color", $_POST["skills_color"]);
}
add_action('save_post', 'save_skills');



/*  Add and Edit portfolio item */
function meta_portfolio(){
    global $post;
    $custom = get_post_custom($post->ID);
    $id = $post -> ID;
    $portfolio_description = $custom["portfolio_description"][0];
    $portfolio_date = $custom["portfolio_date"][0];
    $portfolio_lieu = $custom["portfolio_lieu"][0];

    ?>
    <p><label><h4>ID :</h4></label></p>
    <p> <input cols="50" rows="5" name="portfolio_id" value="<?php echo $id; ?>"></p>
    <p><label><h4>Description:</h4></label></p>
    <p> <textarea cols="50" rows="5" name="portfolio_description"><?php echo $portfolio_description; ?></textarea></p>
    <p><label><h4>Date:</h4></label></p>
    <p> <input cols="50" rows="5" name="portfolio_date" value="<?php echo $portfolio_date; ?>"></p>
    </p>
    <p><label><h4>Lieu:</h4></label></p>
    <p> <input cols="50" rows="5" name="portfolio_lieu" value="<?php echo $portfolio_lieu; ?>"></p>
    </p>

    <?php
}
function admin_init_portfolio(){
    add_meta_box("meta_portfolio", "Information", "meta_portfolio", "my_portfolio", "normal", "low");
}
add_action("admin_init", "admin_init_portfolio");

/* ** sauvegarder les valeurs ajoutées */

function save_portfolio()
{
    global $post;
    update_post_meta($post->ID, "portfolio_id", $_POST["portfolio_id"]);
    update_post_meta($post->ID, "portfolio_description", $_POST["portfolio_description"]);
    update_post_meta($post->ID, "portfolio_date", $_POST["portfolio_date"]);
    update_post_meta($post->ID, "portfolio_lieu", $_POST["portfolio_lieu"]);
}
add_action('save_post', 'save_portfolio');