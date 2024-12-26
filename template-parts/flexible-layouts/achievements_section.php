<?php
$pageId = get_the_ID();
$pageSlug = get_post_field( 'post_name', $pageId );
$class = ($pageSlug == 'services') ? 'bg-black lg:mt-20 border-t-[20px] border-image: linear-gradient(90deg, #6C63FF, #FF73A1) ;' : 'bg-black lg:mt-20 border-t-[20px] border-orange-300';
?>

<section class="<?= $class ?>">
    <div class="max-w-screen-xl mx-auto py-10">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8 text-center items-center lg:pt-8 lg:pb-8">

            <!-- Rating Section -->
            <div>
                <div class="flex justify-center mb-2">
                    <span class="text-yellow-500 text-4xl h-24 flex items-center justify-center">★★★★★</span>
                </div>

                <h3 class="text-white font-bold mt-4 text-3xl font-bold md:mt-5 lg:text-[50px] lg:leading-[1.2]">4.8</h3>
                <p class="text-white mx-auto mt-1 max-w-50 text-lg font-medium leading-5 md:mt-3 font-roboto">Average rating from<br>350+ reviews on Clutch</p>
            </div>

            <!-- Clients Section -->
            <div>
                <div class="flex justify-center mb-2">
                    <img class="h-24" src="<?= get_template_directory_uri() ?>/assets/images/Clients-Icon.webp" alt="" srcset="">
                </div>
                <h3 class="mt-4 text-3xl font-bold md:mt-5 lg:text-[50px] lg:leading-[1.2] text-white font-roboto">90+</h3>
                <p class="text-white mx-auto mt-1 max-w-50 text-xl font-medium leading-5 md:mt-3">Clients with us for<br>4 years or more</p>
            </div>

            <!-- Employees Section -->
            <div>
                <div class="flex justify-center mb-2">
                    <img class="h-24" src="<?= get_template_directory_uri() ?>/assets/images/Employees-Icon.webp" alt="" srcset="">
                </div>
                <h3 class="mt-4 text-3xl font-bold md:mt-5 lg:text-[50px] lg:leading-[1.2] text-white font-roboto">160+</h3>
                <p class="text-white mx-auto mt-1 max-w-50 text-xl font-medium leading-5 md:mt-3 font-roboto">Employees aligned<br>with our mission</p>
            </div>

            <!-- Inc 500 Section -->
            <div>
                <div class="flex justify-center mb-2">
                    <img class="h-24" src="<?= get_template_directory_uri() ?>/assets/images/Inc-500.webp" alt="" srcset="">
                </div>
                <h3 class="mt-4 text-3xl font-bold md:mt-5 lg:text-[50px] lg:leading-[1.2] text-white font-roboto" >#145</h3>
                <p class="text-white mx-auto mt-1 max-w-50 text-xl font-medium leading-5 md:mt-3 font-roboto">On the Inc. 500</p>
            </div>

            <!-- Ad Spend Section -->
            <div>
                <div class="flex justify-center mb-2">
                    <img class="h-24" src="<?= get_template_directory_uri() ?>/assets/images/Ad-Spend-Icon.webp" alt="" srcset="">
                </div>
                <h3 class="mt-4 text-3xl font-bold md:mt-5 lg:text-[50px] lg:leading-[1.2] text-white font-roboto">$450M+</h3>
                <p class="text-white mx-auto mt-1 max-w-50 text-xl font-medium leading-5 md:mt-3 font-roboto">In annual ad-spend<br>managed for clients</p>
            </div>

        </div>
    </div>
</section>
