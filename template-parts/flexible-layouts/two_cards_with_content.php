<?php
$cards_details = get_sub_field('cards_details');
?>

<section class="max-w-7xl grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto my-12 px-4">
    <?php
        if(is_array($cards_details) && count($cards_details) > 0) {
            foreach ($cards_details as $cards_detail) {
    ?>
    <div class="bg-white shadow rounded-lg p-6 text-center">
        <img src="<?= $cards_detail['image'] ?>" alt="<?= $cards_detail['title'] ?>" class="w-16 mx-auto mb-4">
        <h2 class="text-2xl font-semibold text-indigo-600 mb-2"><?= $cards_detail['title'] ?></h2>
        <p class="font-medium text-gray-700 mb-4"><?= $cards_detail['subtitle'] ?></p>
        <p class="text-gray-600 leading-relaxed">
            <?= $cards_detail['description'] ?>
        </p>
    </div>
    <?php } } ?>
</section>
