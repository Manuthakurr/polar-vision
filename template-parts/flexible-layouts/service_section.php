<?php 
$heading = get_sub_field('heading');
$description = get_sub_field('description');
$services = get_sub_field('services');
$imageHeight = count($services) > 5 ? '550px' : "450px";
function getClass($index){
    return $index == 1
        ? 'tab-button font-roboto  font-semibold text-gray-900 text-left border-l-4 border-[#6C63FF] pl-4 focus:outline-none lg:text-3xl'
        : 'lg:text-2xl font-roboto  tab-button text-gray-600 text-left border-l-4 border-transparent hover:text-[#FF73A1] hover:border-[#6C63FF] pl-4 focus:outline-none';
}


?>


<section class="lg:max-w-7xl lg:mx-auto lg:mt-20">

    <div>
        <h1
            class="lg:text-5xl xs:text-2xl md:text-4xl  font-bold text-black mb-4 text-center font-bold font-roboto">
            <?= $heading ?>

        </h1>
        <p class="text-center font-roboto lg:text-xl">
            <?= $description ?>
        </p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 items-start  gap-8 lg:mt-20">


        <!-- Left Column: Tab Buttons -->
        <div class="flex flex-col space-y-8 border-r pr-4">
            <?php if(count($services) > 0 && is_array($services)) {
                foreach ($services as $key => $title) { $key++ ?>
            <button
                class="<?= getClass($key) ?>"
                data-target="tab<?= $key ?>">
                <?= $title['service_name'] ?>
            </button>
            <?php } } ?>
        </div>

        <!-- Right Column: Tab Content -->
        <div>
            <?php if(count($services) > 0 && is_array($services)) {
            foreach ($services as $key => $service_detail) { $key++ ?>
                <div id="tab<?= $key ?>" class="tab-content <?= $key > 1 ?  'hidden' : '' ?>">
                <div class="relative text-white">
                    <img src="<?= $service_detail['service_image'] ?>" class="h-[<?= $imageHeight ?>] w-full rounded-lg shadow-lg" alt="<?= $service_detail['service_name'] ?>">
                    <div class="lg:bg-gray-500 opacity-85 p-4 text-white">
                        <p class="text-white mb-6 font-roboto font-bold text-lg ">
                            <?= $service_detail['service_description']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</section>