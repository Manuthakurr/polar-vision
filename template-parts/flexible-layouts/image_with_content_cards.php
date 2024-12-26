<?php
$card_heading = get_sub_field('card_heading');
$cards_details = get_sub_field('card_details');

?>

<section class="max-w-7xl mx-auto">
    <div class=" mx-auto px-4 py-12">
        <h1 class="text-3xl md:text-4xl font-bold text-center mb-12"><?= $cards_details ?> </h1>
        <div class="space-y-12">
            <?php
                if(is_array($cards_details) && count($cards_details) > 0) {
                foreach ($cards_details as $key => $cards_detail) {
                    if(in_array($key, [0,2])){
            ?>
                <div class="grid sm:grid-cols-2 sm:gap-32 group sm:my-20">
                    <div class=" h-56 sm:h-72 rounded-xl w-full overflow-hidden">
                        <img src="<?= $cards_detail['image'] ?>" alt="<?= $cards_detail['title'] ?>" class="group-hover:scale-125 transition-transform duration-[10s] ease-linear" >
                    </div>
                    <div class="flex flex-col justify-center order-2">
                        <h2 class="font-roboto mt-3 sm:mt-0 text-2xl sm:text-3xl font-bold"><?= $cards_detail['title'] ?></h2>
                        <p class="text-xl mt-1 mb-10 sm:mb-0 sm:mt-4 font-roboto">
                            <?= $cards_detail['description'] ?>
                        </p>
                    </div>
                </div>
                <?php }else{ ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                    <div class="order-2 md:order-1">
                        <h2 class="font-roboto mt-3 sm:mt-0 text-2xl sm:text-3xl font-bold"><?= $cards_detail['title'] ?></h2>
                        <p class="text-xl mt-1 mb-10 sm:mb-0 sm:mt-4 font-roboto">
                            <?= $cards_detail['description'] ?>
                        </p>
                    </div>
                    <div class="order-1 md:order-2">
                        <div class=" h-56 sm:h-72 rounded-xl w-full overflow-hidden">
                            <img src="<?= $cards_detail['image'] ?>" alt="<?= $cards_detail['title'] ?>" class="rounded-md shadow-md w-full">
                        </div>

                    </div>
                </div>

            <?php } } } ?>
        </div>
    </div>
</section>
