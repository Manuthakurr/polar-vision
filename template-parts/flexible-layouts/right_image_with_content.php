<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
$image = get_sub_field('image');
?>

<div class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

        <!-- Text Section -->
        <div>
            <h1 class="md:text-3xl xs:2xl font-extrabold text-black leading-tight">
                <?= $title ?>
            </h1>
            <div class="w-16 h-1 bg-[#FF73A1] my-4"></div>
            <div class="text-gray-700 text-lg">
                <?= $description ?>
            </div>
        </div>

        <!-- Image Section -->
        <div>
            <img src="<?= $image ?>" alt="<?= $title ?>" class="h-80 rounded-lg shadow-lg w-full object-cover">
        </div>
    </div>
</div>
