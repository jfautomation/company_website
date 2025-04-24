        <!-- Optional footer content -->
        <footer class="text-center py-4">
            <p>&copy; <?php echo date("Y"); ?> JF Automation Inc.</p>
        </footer>

        <?php wp_footer(); ?>
        </body>

        </html>

        <script>
document.addEventListener("DOMContentLoaded", function() {
    // Select the navbar element
    const navbar = document.querySelector('.navbar');

    // Set the height of the hero section (100vh)
    const heroHeight = window.innerHeight;

    // Add scroll event listener
    window.addEventListener('scroll', () => {
        if (window.scrollY > heroHeight) {
            // If scrolled past hero section, add class to change navbar color
            navbar.classList.add('scrolled');
        } else {
            // If scrolled back up, remove the class
            navbar.classList.remove('scrolled');
        }
    });
});
        </script>