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
        const heroHeight = viewportHeight + navbarHeight - 60;

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
        const heroHeight = 300;
        console.log('ScrollY:', window.scrollY, 'HeroHeight:', heroHeight);

        if (window.scrollY > heroHeight) {
            navbar.classList.add('scrolled');

        } else {
            navbar.classList.remove('scrolled');

        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const carousels = document.querySelectorAll('.carousel');

    carousels.forEach(function(carousel) {
        const carouselId = carousel.id;
        const indicators = carousel.querySelectorAll('.custom-indicator');


        carousel.addEventListener('slid.bs.carousel', function(event) {
            indicators.forEach(indicator => indicator.classList.remove('active'));
            const activeIndicator = indicators[event
                .to];
            if (activeIndicator) {
                activeIndicator.classList.add('active');
            }
        });
    });
});
const track = document.getElementById('customCarouselTrack');
const dots = document.querySelectorAll('.custom-slider-carousel-dot');

dots.forEach(dot => {
    dot.addEventListener('click', () => {
        const index = parseInt(dot.dataset.slide);
        const slideWidth = track.children[0].offsetWidth;
        track.style.transform = `translateX(-${index * slideWidth}px)`;

        dots.forEach(d => d.classList.remove('active'));
        dot.classList.add('active');
    });
});

const prevBtn = document.getElementById('carouselPrev');
const nextBtn = document.getElementById('carouselNext');

let currentIndex = 0;

function goToSlide(index) {
    const slideWidth = track.children[0].offsetWidth;
    track.style.transform = `translateX(-${index * slideWidth}px)`;
    dots.forEach(dot => dot.classList.remove('active'));
    dots[index].classList.add('active');
    currentIndex = index;
}


dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
        goToSlide(i);
    });
});

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) goToSlide(currentIndex - 1);
});

nextBtn.addEventListener('click', () => {
    if (currentIndex < dots.length - 1) goToSlide(currentIndex + 1);
});
        </script>
        </body>

        </html>