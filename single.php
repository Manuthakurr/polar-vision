<?php
get_header();
$post_id = get_the_ID();
$getCurrentPost = get_post($post_id);
?>

<section>
    <div class="p-4 max-w-7xl m-auto">
        <!-- Title Section -->
        <div>
            <h1 class="text-3xl font-bold text-center">
                <?= $getCurrentPost->post_title ?>
            </h1>
            <p class="text-gray-600 text-lg mt-1 text-center"><?= get_the_date('F j, Y', $post_id); ?></p>
        </div>

        <!-- Closing Paragraph -->
        <div>
            <div class="text-gray-800 leading-6 md:text-lg xs:text-lg">
                <?= $getCurrentPost->post_content ?>
            </div>
        </div>
    </div>

</section>

<?php
include_once('custom_theme_functions/flexible-content.php');

get_footer(); ?>
