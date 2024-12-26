<?php
$heading = get_sub_field('heading');
$subheading = get_sub_field('subheading');
$service_cards = get_sub_field('service_cards');
?>

<div class="bg-black text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center">
            <h3 class="text-lg font-medium uppercase tracking-wide text-gray-400"><?= $subheading ?></h3>
            <h2 class="text-3xl font-extrabold mt-2"><?= $heading ?></h2>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 cursor-pointer">
            <!-- Service Card 1 -->
            <?php if(is_array($service_cards) && count($service_cards) > 0){
                foreach($service_cards as $key => $service_card){

             ?>
            <div class="bg-white text-black rounded-lg p-6 shadow-lg hover:bg-gradient-to-r from-[#6C63FF] to-[#FF73A1]">
                <div class="flex justify-center items-center mb-4">
                    <div class="w-12 h-12 bg-black text-lime-500 flex items-center justify-center rounded-full">
                        <!-- Icon -->
                        <?php if(!$service_card['image']){ ?>
                            <i class="fas fa-paint-brush"></i>
                        <?php }else{ ?>
                            <img src="<?= $service_card['image'] ?>" alt="<?= $subheading ?>" >
                        <?php } ?>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-center"><?= $service_card['service_heading'] ?></h3>
                <p class="text-sm text-center mt-2">
                    <?= $service_card['service_description'] ?>
                </p>
            </div>
            <?php } } ?>

        </div>
    </div>
</div>
