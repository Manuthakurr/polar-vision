document.addEventListener('DOMContentLoaded', () => {
    // Function to load header and footer dynamically
    function loadHeaderAndFooter() {
        fetch('header.html')
            .then((response) => response.text())
            .then((data) => {
                document.getElementById('header').innerHTML = data;
                addMenuToggleListener(); // Initialize menu toggle functionality after loading header
            })
            .catch((error) => console.error('Error loading header:', error));

        fetch('footer.html')
            .then((response) => response.text())
            .then((data) => {
                const footer = document.getElementById('footer');
                if (footer) {
                    footer.innerHTML = data;
                }
                // document.getElementById('footer').innerHTML = data;
            })
            .catch((error) => console.error('Error loading footer:', error));
    }

    // Function to handle the mobile menu toggle functionality
    function addMenuToggleListener() {
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');
        const menu = document.getElementById('menu');
        // const body = document.body;
        if (menuBtn && closeBtn && menu) {
            // Show menu and hide the menu button when menu-btn is clicked
            menuBtn.addEventListener('click', () => {
                menu.classList.remove('hidden');
                menu.classList.add('flex');
                menuBtn.classList.add('hidden');
                closeBtn.classList.remove('hidden');
                // body.classList.add('bg-white');
            });

            // Hide menu and show the menu button when close-btn is clicked
            closeBtn.addEventListener('click', () => {
                menu.classList.add('hidden');
                menu.classList.remove('flex');
                closeBtn.classList.add('hidden');
                menuBtn.classList.remove('hidden');
                // body.classList.remove('bg-white');
            });
        }
    }

    // Load the header and footer when the DOM content is loaded
    loadHeaderAndFooter();
});


document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', function () {
        // Remove active class from all buttons
        document.querySelectorAll('.tab-button').forEach(btn => {
            btn.classList.remove('border-red-500', 'text-gray-900');
            btn.classList.add('border-transparent', 'text-gray-600');
        });

        // Add active class to clicked button
        this.classList.add('border-red-500', 'text-gray-900');
        this.classList.remove('border-transparent', 'text-gray-600');

        // Hide all tab content
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
        });

        // Show the clicked tab's content
        const targetTab = this.getAttribute('data-target');
        document.getElementById(targetTab).classList.remove('hidden');
    });
});