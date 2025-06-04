        <!-- Optional footer content -->
        <footer class="text-center py-4">
            <p>&copy; <?php echo date("Y"); ?> JF Automation Inc.</p>
        </footer>

        <?php wp_footer(); ?>

        <script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById('main-navbar') || document.querySelector('.navbar');
    const hero = document.querySelector('.hero');

    function setHeroHeight() {
        const navbarHeight = navbar.offsetHeight;
        const viewportHeight = window.innerHeight;
        const heroHeight = viewportHeight + navbarHeight - 60;

        hero.style.height = `${heroHeight}px`;
        console.log(navbarHeight, 'navbar height')
        console.log(viewportHeight, 'viewport height')
        console.log(heroHeight, 'heroHeight')
    }

    setHeroHeight();
    window.addEventListener('resize', setHeroHeight);

    window.addEventListener('scroll', () => {
        // const heroHeight = hero.offsetHeight; 
        const heroHeight = 300;
        console.log('ScrollY:', window.scrollY, 'HeroHeight:', heroHeight);

        if (window.scrollY > heroHeight) {
            navbar.classList.add('scrolled');

        } else {
            navbar.classList.remove('scrolled');

        }
    });
});


function initCarousel(carouselId) {
    const track = document.getElementById(`${carouselId}_track`);
    const slides = track?.children || [];
    const prevBtn = document.getElementById(`${carouselId}_prev`);
    const nextBtn = document.getElementById(`${carouselId}_next`);

    if (!track || slides.length === 0 || !prevBtn || !nextBtn) return;

    let currentIndex = 0;
    const maxIndex = slides.length - 1;

    function goToSlide(index) {
        index = Math.max(0, Math.min(index, maxIndex));
        const slideWidth = slides[0].getBoundingClientRect().width;
        track.style.transform = `translateX(-${index * slideWidth}px)`;
        currentIndex = index;
    }

    prevBtn.addEventListener('click', () => goToSlide(currentIndex - 1));
    nextBtn.addEventListener('click', () => goToSlide(currentIndex + 1));
}






        </script>
        </body>

        </html>