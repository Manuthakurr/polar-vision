<?php
$heading = get_sub_field('heading');
$description = get_sub_field('description');
?>

<div class="bg-gray-100 pt-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-2">
            <h1 class="text-4xl font-bold text-black"><?= $heading ?></h1>
            <p class="text-gray-700 mt-4">
                <?= $description ?>
            </p>
        </div>
    </div>
</div>
