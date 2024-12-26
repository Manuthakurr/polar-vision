<?php 
$title = get_sub_field('title');
$description = get_sub_field('description');
$button = get_sub_field('button');
$left_description = get_sub_field('left_description');
?>

<section class="bg-black lg:mt-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Left Side -->
        <div class="lg:w-full">
            <h2 class="lg:text-4xl md:text-3xl text-white font-bold mb-4">
                <?= $title ?>
            </h2>
            <div class="w-20 h-1 bg-red-500 mb-4"></div>
            <div class="text-white lg:text-2xl">
                <?= $left_description ?>
            </div>
        </div>

        <!-- Right Side -->
        <div class="lg:w-full mt-6 lg:mt-0">
            <div class="text-white">
                <?= $description ?>
            </div>
            <?php if(is_array($button)){ ?>
                <button class="mt-6">
                    <a href="<?= $button['url'] ?>" class="bg-gradient-to-r from-[#6C63FF] to-[#FF73A1] text-black font-semibold py-3 px-6
                        rounded-lg hover:opacity-90 transition-opacity justify-center">
                        <?= $button['title'] ?> →
                    </a>
                </button>
            <?php } ?>
        </div>
    </div>
</section>
