<?php
$heading = get_sub_field('title');
$description = get_sub_field('description');
?>

<section class="max-w-7xl mx-auto text-center my-8 px-4">
    <div>
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4"><?= $heading ?></h1>
    </div>
    <div class="text-lg md:text-xl text-gray-700 leading-relaxed">
        <?= $description ?>
    </div>
</section>
