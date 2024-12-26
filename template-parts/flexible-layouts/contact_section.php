<?php
$heading = get_sub_field('heading');
$address = get_sub_field('address');
$email = get_sub_field('email');
$phone_number = get_sub_field('phone_number');
$contact_form_heading = get_sub_field('contact_form_heading');


?>

<section class="max-w-7xl mx-auto">
    <div class="px-4 pt-12">
        <!-- Contact Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
            <!-- Contact Info -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800"><?= $heading ?></h2>
                <div class="mt-4">
                    <h3 class="text-xl font-semibold text-gray-700">Address</h3>
                    <p class="text-gray-600">
                        <?= $address ?>
                    </p>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-700">Phone Number</h3>
                    <a href="tel:<?= $phone_number ?>">
                        <span class="text-gray-600">+1<?= $phone_number ?></span>
                    </a>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-700">Email</h3>
                    <a href="mailto:<?= $email ?>" class="text-gray-600 hover:underline"><?= $email ?></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800"><?= $contact_form_heading ?></h2>
                <form id="email-form" class="mt-6 space-y-4">
                    <div id="emailSendMessage" class="p-4 mb-4 text-sm text-black rounded-lg bg-gradient-to-r from-[#6C63FF] to-[#FF73A1] dark:text-black hidden" role="alert">
                        <span class="font-medium">Your email was sent successfully. Thank you for reaching out!</span>
                    </div>
                    <div>
                        <label for="name" class="block text-xl text-gray-700 font-medium">Your Name</label>
                        <input type="text" id="name" name="name" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Your Name">
                    </div>
                    <div>
                        <label for="email" class="block text-xl text-gray-700 font-medium">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Email Address">
                    </div>
                    <div>
                        <label for="phone_number" class="block text-xl text-gray-700 font-medium">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Phone Number">
                    </div>
                    <div>
                        <label for="message" class="block text-xl text-gray-700 font-medium">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Type your message here.."></textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-gradient-to-r from-[#6C63FF] to-[#FF73A1] text-black font-semibold py-3 px-6
                    rounded-lg hover:opacity-90 transition-opacity justify-center font-medium">
                            GIVE US A SHOT
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script>
    jQuery(document).ready(function($) {
        $('#email-form').on('submit', function(e) {
            e.preventDefault();
            $('#formSubmitButton').hide();
            $('#emailSendingSpinner').removeClass('d-none');
            // Prepare form data
            var formData = {
                action: 'send_email',
                name: $('#name').val(),
                email: $('#email').val(),
                phone_number: $('#phone_number').val(),
                message: $('#message').val(),
            };
            $("#email-form")[0].reset();
            $.ajax({
                url:  '<?php echo admin_url('admin-ajax.php'); ?>', // The AJAX URL defined by WordPress
                type: 'POST',
                data: formData,
                success: function(response) {
                    let mailSendingStatus = response.data.status;
                    let mailSendingMessage = response.data.message;
                    if(mailSendingStatus){
                        $('#emailSendingSpinner').addClass('d-none');
                        $('#formSubmitButton').show();
                        $('#emailSendMessage').removeClass('hidden');
                        // $('#emailSendMessage').text(mailSendingMessage);

                        setTimeout(() => {
                            $('#emailSendMessage').addClass('hidden');
                        }, 1200)
                    }
                },
            });
        });
    });

</script>