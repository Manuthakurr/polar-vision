<?php
$section_heading = get_sub_field('section_heading');
$section_description  = get_sub_field('section_description');
$section_cards = get_sub_field('section_cards');
?>


<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Paid Advertising Section -->
        <div class="mb-4">
            <h2 class="text-3xl font-bold text-black mb-4"><?= $section_heading ?></h2>
            <p class="text-gray-600 mb-8">
                <?= $section_description ?>
            </p>
            <div class="grid md:grid-cols-3 gap-8">

                <?php
                    if(is_array($section_cards) && count($section_cards) > 0){
                        foreach($section_cards as $section_card){
                            $section_card['price_list'] = array_column($section_card['price_list'], 'list_detail');

                ?>
                    <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-2xl font-bold text-<?= $section_card['select_color'][0] ?>-500 mb-2"><?= $section_card['title'] ?></h3>
                    <p class="text-gray-700 mb-4"><?= $section_card['description'] ?></p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <?php foreach($section_card['price_list'] as $price_list) {
                            $split_value = get_split_value($price_list);
                        ?>
                            <li><?=  $split_value[0] ?>: <strong><?=  $split_value[1] ?></strong> </li>
                        <?php } ?>
                    </ul>
                     <?php if(is_array($section_card['button'])) { ?>
                        <a  href="<?= $section_card['button']['url'] ?>" class="bg-<?= $section_card['select_color'][0] ?>-500 text-white px-6 py-2 rounded hover:bg-<?= $section_card['select_color'][0] ?>-600"><?= $section_card['button']['title'] ?></a>
                     <?php } ?>
                </div>
                <?php } } ?>
            </div>
        </div>
    </div>
</div>
