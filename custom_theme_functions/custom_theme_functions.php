<?php

add_theme_support('custom-logo');
add_theme_support('menus');


function loadAssets()
{
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/style.css', false, '', '' );
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css', false, '', '' );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css', false, '', '' );


    wp_enqueue_script('tailwind-js', get_template_directory_uri() . '/assets/js/tailwind.min.js', [], '', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', [], '', true);
    wp_enqueue_script('tailwind-config-js', get_template_directory_uri() . '/assets/js/tailwind-config.js', [], '', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', ['jquery'], '', true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], '', true);

}

add_action('wp_enqueue_scripts', 'loadAssets');


$args = [
    'top_menus' => 'Top Menu',
    'footer_menu' => 'Footer Menu',
];

register_nav_menus($args);

 function customLiClass($classes, $item, $args)
 {

     if ($args->theme_location == 'top_menus') {
         $classes[] = 'nav-item';
     }
     return $classes;
 }

 add_action("nav_menu_css_class", 'customLiClass', 1, 3);

 function add_link_atts($atts, $item, $args)
 {
    if ($args->theme_location == 'top_menus') {
        if($item->title != 'Contact'){
            $atts['class'] = 'hover:text[#ff4980]';
        }else{
            $atts['class'] = 'bg-gradient-to-r from-[#6C63FF] to-[#FF73A1] text-black font-semibold py-3 px-6
                        rounded-lg hover:opacity-90 transition-opacity justify-center';
        }
    }

    return $atts;
}

 add_filter('nav_menu_link_attributes', 'add_link_atts', 10, 3);


// // Add options pages
 if (function_exists('acf_add_options_page')) {

     acf_add_options_page(array(
         'page_title' => 'Theme General Settings',
         'menu_title' => 'Theme Settings',
         'menu_slug' => 'theme-general-settings',
         'capability' => 'edit_posts',
         'redirect' => false
     ));

     acf_add_options_sub_page(array(
         'page_title' => 'Theme Header Settings',
         'menu_title' => 'Header',
         'parent_slug' => 'theme-general-settings',
     ));

     acf_add_options_sub_page(array(
         'page_title' => 'Theme Footer Settings',
         'menu_title' => 'Footer',
         'parent_slug' => 'theme-general-settings',
     ));

 }

add_action( 'wp_ajax_send_email', 'send_email_via_ajax' );
add_action( 'wp_ajax_nopriv_send_email', 'send_email_via_ajax' );
function send_email_via_ajax() {
    if ( isset($_POST['email']) ) {
        $response = [
            'status' => true,
            'message' => 'Email send successfully'
        ];
        $to = 'polarvisionmedia@gmail.com';
        $subject = 'New Inquiry from Website Form';
        // Sanitize form fields
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        // Allow phone number characters like +, -, and spaces
        $phone_number = preg_replace('/[^0-9+\-\s]/', '', $_POST['phone_number']);
        $message_content = sanitize_textarea_field($_POST['message']);

        // Create the HTML message
        $message = "
            <html>
            <body>
                <h2>New Inquiry from Website Form</h2>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone Number:</strong> {$phone_number}</p>
                <p><strong>Message:</strong><br>{$message_content}</p>
            </body>
            </html>
            ";
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'From: Polar Vision Marketing <noreply@polarvisionmarketing.com>'
        );

        // Send the email
        $sent = wp_mail($to, $subject, $message, $headers);

        // Check if the email was sent successfully
        if ( $sent ) {
            wp_send_json_success( $response );
        } else {
            $response['status'] = false;
            $response['message'] = 'Email failed to send.';
            wp_send_json_error( $response );
        }
    } else {
        wp_send_json_error( 'Invalid request.' );
    }
}

function getBlogPosts($no=6, $type='DESC', $orderBy='date'){
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $no,
        'orderby' => $orderBy,
        'order' => $type,
    );
    $query = new WP_Query($args);
    return $query;
}


function get_split_value($str) : array
{
    $split_value = explode(':', $str);
    return $split_value;
}