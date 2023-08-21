<?php
//Xóa thẻ <p> xung quanh thẻ <img>
function filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

add_filter('use_block_editor_for_post', '__return_false', 10);

/* pagination - load page*/
function pagination($custom_query = null, $paged = 1)
{
    global $wp_query, $wp_rewrite;
    if ($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $big = 999999999;
    $total = isset($main_query->max_num_pages) ? $main_query->max_num_pages : '';
    if ($total > 1) echo '<div class="c-pagination">';
    echo paginate_links(array(
        'base' => trailingslashit(esc_url(get_pagenum_link())) . "{$wp_rewrite->pagination_base}/%#%/",
        'format'   => '?paged=%#%',
        'current'  => max(1, get_query_var('paged')),
        'total'    => $total,
        'mid_size' => '5',
        'prev_text'    => __('', 'exam'),
        'next_text'    => __('', 'exam'),
    ));
    if ($total > 1) echo '</div>';
}

 // Breadcrumbs
 function custom_breadcrumbs()
 {

    // Settings
    $breadcrums_class   = 'c-breadcrumb';
    $home_title         = 'TOP';

    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';

    // Get the query & post information
    global $post, $wp_query;

    // Do not display on the homepage
    if (!is_front_page()) {
        // Build the breadcrums
        echo '<ul class="' . $breadcrums_class . '">
        ';
    
        // Home page
        echo '<li><a href="' . get_home_url() . '">' . $home_title . '</a></li>';

        if (is_archive() && !is_tax() && !is_category() && !is_tag()) {
        $post_type = get_post_type();
        if ($post_type == 'post') {
            $post_type_object = get_post_type_object($post_type);
            echo '<li>' . $post_type_object->labels->name . '</li>';
        }
        if ($post_type == 'style') {
            $post_type_object = get_post_type_object($post_type);
            echo '<li>灘エリアのご紹介</li>';
        }
        if ($post_type == 'column') {
            $post_type_object = get_post_type_object($post_type);
            echo '<li>コラム</li>';
        }
        if ($post_type == 'faq') {
            $post_type_object = get_post_type_object($post_type);
            echo '<li>賃貸管理トラブル集</li>';
        }
    } else if (is_single()) {

        // If post is a custom post type
        $post_type = get_post_type();
        // If it is a custom post type display name and link
        if ($post_type == 'style') {
            $post_type_object = get_post_type_object($post_type);
            $post_type_archive = get_post_type_archive_link($post_type);
            echo '<li><a href="' . $post_type_archive . '">灘エリアのご紹介</a></li>';
        }
        if ($post_type == 'post') {
            echo '<li><a href="' . get_site_url() . '/information">お知らせ</a></li>';
            $post_type_object = get_post_type_object($post_type);
            $post_type_archive = get_post_type_archive_link($post_type);
        }
        
         // Check if the post is in a category
         if (!empty($last_category)) {
            // echo $cat_display;
            echo '<a href="' . get_site_url() . '/information"お知らせ</a>';
            echo '<li>' . get_the_title() . '</li>';

            // Else if post is in a custom taxonomy
        } else if (!empty($cat_id)) {

            echo '<a href="' . $cat_link . '">' . $cat_name . '</a>';
            echo '<li>' . get_the_title() . '</li>';
        } else {
            echo '<li>' . get_the_title() . '</li>';
        }
    } else if (is_category()) {
        echo '<li><a href="' . get_site_url() . '/information">お知らせ</a></li>';
        // Category page
        echo '<li>ニュース' . single_cat_title('', false) . '</li>';
        } else if (is_page()) {
            // If child page, get parents 
        $anc = get_post_ancestors( $post->ID );
            
        // Get parents in the right order
        $anc = array_reverse($anc);
        
        // Parent page loop
        if ( !isset( $parents ) ) $parents = null;
        foreach ( $anc as $ancestor ) {
            $parents .= '<li><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
        }               
        // Display parent pages
        echo $parents;
        
        // Current pageF
            echo '<li><span>' . get_the_title() . '</span></li>';
        } else if (get_query_var('paged')) {

            // Paginated archives
            echo '<span>' . __('Page') . ' ' . get_query_var('paged') . '</span>';
        } else if (is_search()) {

            // Search results page
            echo '<span>Search results for: ' . get_search_query() . '</span>';
        }
        echo '</ul>';
    }
 }

function custom_post_type()
    {
        register_post_type(
            'Style',
            array(
                'labels'      => array(
                    'name'          => __('Style', 'exam'),
                    'singular_name' => __('Style', 'exam'),
					'taxonomies'    => __('Style Categories','exam')
                ),
                'public'      => true,
                'has_archive' => true,
				'supports' => array( 'title', 'editor', 'custom-fields','thumbnail' ),
                'rewrite'     => array(
                    'slug' => 'style',
                    'with_front' => false
                ), // my custom slug
            )
        );
    }
add_action('init', 'custom_post_type');

function custom_post_column()
    {
        register_post_type(
            'Column',
            array(
                'labels'      => array(
                    'name'          => __('Column', 'exam'),
                    'singular_name' => __('Column', 'exam'),
					'taxonomies'    => __('Column Categories','exam')
                ),
                'public'      => true,
                'has_archive' => true,
				'supports' => array( 'title', 'editor', 'custom-fields','thumbnail' ),
                'rewrite'     => array(
                    'slug' => 'column',
                    'with_front' => false
                ), // my custom slug
            )
        );
    }
add_action('init', 'custom_post_column');

function custom_post_faq()
    {
        register_post_type(
            'FAQ',
            array(
                'labels'      => array(
                    'name'          => __('FAQ', 'daiwa'),
                    'singular_name' => __('FAQ', 'daiwa'),
					'taxonomies'    => __('FAQ Categories','daiwa')
                ),
                'public'      => true,
                'has_archive' => true,
				'supports' => array( 'title', 'editor', 'custom-fields','thumbnail' ),
                'rewrite'     => array(
                    'slug' => 'faq',
                    'with_front' => false
                ), // my custom slug
            )
        );
    }
add_action('init', 'custom_post_faq');

function add_custom_taxonomies()
{
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('style-category', 'style', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => __('Style Categories', 'daiwa'),
            'singular_name' => __('Style Category', 'daiwa')
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => '', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}
add_action('init', 'add_custom_taxonomies', 0);

   /*
/* Set title is required when publishing post
*/
add_action('edit_form_advanced', 'force_post_title');
function force_post_title($post)
{
    // List of post types that we want to require post titles for.
    $post_types = array(
        'post',
        'report',
        'style',
        'column', 
        'faq' 
    );

    // If the current post is not one of the chosen post types, exit this function.
    if (!in_array($post->post_type, $post_types)) {
        return;
    }

?>
    <script type='text/javascript'>
        (function($) {
            $(document).ready(function() {
                //Require post title when adding/editing Project Summaries
                $('body').on('submit.edit-post', '#post', function() {
                    // If the title isn't set
                    if ($("#title").val().replace(/ /g, '').length === 0) {
                        // Show the alert
                        if (!$("#title-required-msj").length) {
                            $("#titlewrap")
                                .append('<div id="title-required-msj"><em>タイトルが必要です。</em></div>')
                                .css({
                                    "padding": "5px",
                                    "margin": "5px 0",
                                    "background": "#ffebe8",
                                    "border": "1px solid #c00"
                                });
                        }
                        // Hide the spinner
                        $('#major-publishing-actions .spinner').hide();
                        // The buttons get "disabled" added to them on submit. Remove that class.
                        $('#major-publishing-actions').find(':button, :submit, a.submitdelete, #post-preview').removeClass('disabled');
                        // Focus on the title field.
                        $("#title").focus();
                        return false;
                    }
                });
            });
        }(jQuery));
    </script>
<?php
}
?>
