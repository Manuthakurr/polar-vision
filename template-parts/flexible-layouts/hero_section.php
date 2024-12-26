<?php 
$title = get_sub_field('title');
$description = get_sub_field('description');
$button = get_sub_field('button');
$background_image = get_sub_field('background_image');
?>

<section class="relative h-[500px] bg-cover bg-center" style="background-image: url(<?= $background_image ?>);">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div> <!-- Overlay -->
    <div
        class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center h-full items-center text-center">
        <h1 class="lg:text-6xl xs:text-2xl md:text-4xl lg:text-5xl font-bold text-white mb-4">
            <?= $title ?>
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-6">
           <?= $description ?>
        </p>
        <div>
            <?php if(is_array($button)){ ?>
                <a
                    href="<?= $button['url'] ?>"
                    class="bg-gradient-to-r from-[#6C63FF] to-[#FF73A1] text-black font-semibold py-3 px-6 rounded-lg hover:opacity-90 transition-opacity justify-center md:w-full lg:w-[269px]">
                    <?= $button['title'] ?>
                </a>
            <?php } ?>
        </div>
    </div>
</section>
