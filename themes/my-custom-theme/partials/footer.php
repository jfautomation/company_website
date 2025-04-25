        <!-- Optional footer content -->
        <footer class="text-center py-4">
            <p>&copy; <?php echo date("Y"); ?> JF Automation Inc.</p>
        </footer>

        <?php wp_footer(); ?>

        <script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById('main-navbar') || document.querySelector('.navbar');
    const hero = document.querySelector('.hero');

    // Function to set hero height based on viewport - navbar
    function setHeroHeight() {
        const navbarHeight = navbar.offsetHeight;
        const viewportHeight = window.innerHeight;
        const heroHeight = viewportHeight + navbarHeight;

        hero.style.height = `${heroHeight}px`;
        console.log(navbarHeight, 'navbar height')
        console.log(viewportHeight, 'viewport height')
        console.log(heroHeight, 'heroHeight')
    }

    // Set the hero height initially and on resize
    setHeroHeight();
    window.addEventListener('resize', setHeroHeight);

    // Scroll logic for toggling 'scrolled' class
    window.addEventListener('scroll', () => {
        // const heroHeight = hero.offsetHeight; 
        const heroHeight = 500;
        console.log('ScrollY:', window.scrollY, 'HeroHeight:', heroHeight);

        if (window.scrollY > heroHeight) {
            navbar.classList.add('scrolled');

        } else {
            navbar.classList.remove('scrolled');

        }
    });
});
        </script>


        <!-- <script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.querySelector('.navbar');

    // Hardcoded height for testing
    const heroHeight = 500;
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
        </script> -->








        </body>

        </html>