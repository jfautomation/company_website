        <!-- Optional footer content -->
        <footer class="text-center py-4">
            <p>&copy; <?php echo date("Y"); ?> JF Automation Inc.</p>
        </footer>

        <?php wp_footer(); ?>

        <script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.querySelector('.navbar');

    // Hardcoded height for testing
    const heroHeight = 700;
    // const heroHeight = hero.offsetHeight;


    window.addEventListener('scroll', () => {
        console.log('ScrollY:', window.scrollY);
        if (window.scrollY > heroHeight) {
            navbar.classList.add('scrolled');
            console.log('Scrolled class added');
        } else {
            navbar.classList.remove('scrolled');
            console.log('Scrolled class removed');
        }
    });
});
        </script>








        </body>

        </html>