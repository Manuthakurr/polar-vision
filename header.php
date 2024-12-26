<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id , 'full');
$site_url = site_url();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script>
        // Extend Tailwind config to use the Google Font
        tailwind.config = {
            theme: {
                screens: {
                    'xs': '240px',
                    'xsm': '480px',
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1025px',
                    'xl': '1280px',
                    '2xl': '1536px',

                },
                // colors: {
                //     'Pink': '#ff4980',
                // },
                extend: {
                    fontFamily: {
                        roboto: ['Roboto', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <?= wp_head() ?>
</head>

<body class="flex flex-col min-h-screen bg-gray-100">
<header id="header" class="bg-primary text-black py-4 shadow-md">
    <div class="mx-auto max-w-7xl flex justify-between items-center lg:px-0 sm:px-4">
        <a href="<?= $site_url ?>" class="text-2xl font-bold">
            <img src="<?= $logo[0] ?>" class="h-12" alt="Brand Logo">
        </a>
        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="block lg:hidden text-black focus:outline-none">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <!-- Navigation -->
        <nav id="menu"
             class="hidden lg:flex flex-col lg:flex-row lg:space-x-4 fixed inset-0 bg-primary z-50 lg:static lg:bg-transparent space-y-4 lg:space-y-0">
            <button id="close-btn" class="self-end mt-4 mr-4 block lg:hidden">
                <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <?php
            $args = [
                'theme_location' => 'top_menus',
                'container' => false,
                'menu_class' => 'text-black flex flex-col lg:flex-row lg:space-x-4 space-y-4 lg:space-y-0 px-6 py-8 lg:p-0',
            ];
            wp_nav_menu($args);
            ?>

        </nav>
    </div>
</header>