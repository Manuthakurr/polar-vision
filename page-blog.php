<?php
get_header();
include_once('custom_theme_functions/flexible-content.php');
include_once('custom_theme_functions/custom_theme_functions.php');
$posts = getBlogPosts();
?>
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <!-- Blog Title -->
            <div class="flex items-center justify-between py-4  mb-5 ">
                <!-- Blog Title Section -->
                <div>
                    <h2 class="md:text-2xl xs:text-lg font-bold text-black">On the Blog</h2>
                    <div class="mt-1 w-10 h-0.5 bg-red-500"></div>
                </div>

                <!-- Search and Subscribe Section -->
                <div class="flex items-center space-x-4">
                    <!-- Search Box -->
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="Search topic or keyword"
                            class="pl-10 pr-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-gray-300"
                        />
                        <svg
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 w-5 h-5"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-4.35-4.35m-3.15.35a7 7 0 1 0-7-7 7 7 0 0 0 7 7z"
                            />
                        </svg>
                    </div>

                    <!-- Subscribe Button -->

                </div>
            </div>

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 xs:grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if ($posts->have_posts()) {
                    while ($posts->have_posts()) {
                        $posts->the_post();
                        $content = wp_trim_words(get_the_content(), 18, '...');
                ?>
                    <div class="bg-white shadow-md rounded overflow-hidden">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Advertising.webp" alt="Blog Image" class="w-full h-72 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            <?= the_title(); ?>
                        </h2>
                        <p class="text-sm text-gray-500 mb-4"> <?= date("F j, Y", strtotime(get_the_date())) ?></p>
                        <div class="text-gray-700 mb-4">
                            <?= $content ?>
                        </div>
                        <a href="<?= get_the_permalink() ?>" class="text-blue-500 font-medium hover:underline">Read More →</a>
                    </div>
                </div>
                <?php } } ?>
            </div>

        </div>
    </section>

<?php get_footer(); ?>