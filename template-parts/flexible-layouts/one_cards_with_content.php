<?php
$heading = get_sub_field('title');
$description = get_sub_field('description');
$list_content = array_column($description, 'list_content');
?>

<section class=" max-w-7xl mx-auto bg-white py-12 px-4 shadow">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-semibold text-pink-500 mb-6"><?= $heading ?></h2>
        <ul class="space-y-4 text-left text-gray-700">
            <?php
                if(is_array($list_content) && count($list_content) > 0) {
                foreach ($list_content as $content) {
            ?>
                <li>✔ <?= $content ?></li>
            <?php } } ?>
        </ul>
    </div>
</section>
