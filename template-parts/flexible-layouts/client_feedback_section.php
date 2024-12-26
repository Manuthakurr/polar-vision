<?php 
$client_feedback = get_sub_field('client_feedback');
$section_heading = get_sub_field('section_heading');
$section_description = get_sub_field('section_description');
?>


<section class=" max-w-7xl mx-auto lg:mt-20">
    <div class="max-w-7xl mx-auto text-center mb-10">
        <h2 class="text-5xl font-bold mb-4 font-roboto"><?= $section_heading ?></h2>
        <p class="text-gray-600 text-2xl font-roboto"><?= $section_description ?></p>
    </div>

    <div class="testimonial-slider px-4 py-6 space-y-6 mb-8 max-w-7xl "> <!-- Added margin-bottom here -->
        <!-- Testimonial 1 -->
        <?php if(count($client_feedback) > 0 && is_array($client_feedback)) {
            foreach ($client_feedback as $key => $feedback) { $key++ ?>
                <div class="text-center bg-white p-8 shadow-lg rounded-lg h-[450px] w-[300px] m-[10px]">
                    <p class="text-gray-600 italic mb-6 leading-relaxed text-xl font-roboto">"<?= $feedback['client_review'] ?>"</p>
                    <p class="font-bold text-gray-800 text-xl font-roboto"><?= $feedback['title'] ?></p>
                </div>
        <?php } } ?>
    </div>
</section>
