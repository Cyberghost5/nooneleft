/**
 * Hero Slider Controller for Zee Tech Foundation - Community-Built Digital Village Hub
 * Conforms to specifications:
 * - 7s auto-rotation
 * - Previous/Next controls
 * - 4 slide jump indicators with visual progress
 * - Pause on hover and focus
 * - Accessible keyboard navigation & ARIA attributes
 * - Reduced motion support
 * - Mobile touch swipe support
 */

export function initHeroSlider() {
    const sliderSection = document.getElementById('vision');
    if (!sliderSection) return;

    const slides = Array.from(sliderSection.querySelectorAll('.hero-slide'));
    const dots = Array.from(sliderSection.querySelectorAll('.slider-dot'));
    const prevBtn = document.getElementById('slider-prev-btn');
    const nextBtn = document.getElementById('slider-next-btn');
    const pauseStatusEl = document.getElementById('slider-pause-status');

    if (slides.length === 0) return;

    let currentIndex = 0;
    const totalSlides = slides.length;
    const intervalDuration = 7000; // 7 seconds per spec
    let timer = null;
    let isPaused = false;
    let progressStartTime = 0;
    let remainingTime = intervalDuration;

    // Check system preference for reduced motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function showSlide(index, announce = true) {
        // Clamp index
        if (index < 0) {
            index = totalSlides - 1;
        } else if (index >= totalSlides) {
            index = 0;
        }

        currentIndex = index;

        // Update slides visibility and accessibility
        slides.forEach((slide, i) => {
            const isCurrent = i === currentIndex;
            if (isCurrent) {
                slide.classList.remove('opacity-0', 'pointer-events-none');
                slide.classList.add('opacity-100', 'pointer-events-auto', 'z-20');
                slide.setAttribute('aria-hidden', 'false');
            } else {
                slide.classList.remove('opacity-100', 'pointer-events-auto', 'z-20');
                slide.classList.add('opacity-0', 'pointer-events-none', 'z-10');
                slide.setAttribute('aria-hidden', 'true');
            }
        });

        // Update dot indicators
        dots.forEach((dot, i) => {
            const isCurrent = i === currentIndex;
            dot.setAttribute('aria-selected', isCurrent ? 'true' : 'false');
            const progress = dot.querySelector('.dot-progress');
            if (progress) {
                if (isCurrent) {
                    progress.style.width = '100%';
                    progress.style.opacity = '1';
                } else {
                    progress.style.width = '0%';
                    progress.style.opacity = '0.4';
                }
            }
        });

        resetTimer();
    }

    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }

    function startTimer() {
        if (prefersReducedMotion || isPaused) return;
        clearTimeout(timer);
        timer = setTimeout(() => {
            nextSlide();
        }, intervalDuration);
    }

    function resetTimer() {
        clearTimeout(timer);
        startTimer();
    }

    function pauseTimer() {
        isPaused = true;
        clearTimeout(timer);
        if (pauseStatusEl) {
            pauseStatusEl.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> Rotation paused';
        }
    }

    function resumeTimer() {
        isPaused = false;
        startTimer();
        if (pauseStatusEl) {
            pauseStatusEl.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span> Auto-advancing every 7s &middot; Hover or focus to pause';
        }
    }

    // Attach Next / Prev listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
        });
    }

    // Dot indicators click
    dots.forEach((dot) => {
        dot.addEventListener('click', () => {
            const targetIndex = parseInt(dot.getAttribute('data-slide-target'), 10);
            if (!isNaN(targetIndex)) {
                showSlide(targetIndex);
            }
        });
    });

    // Pause rotation while visitors hover over the slider or focus its controls
    sliderSection.addEventListener('mouseenter', pauseTimer);
    sliderSection.addEventListener('mouseleave', resumeTimer);
    sliderSection.addEventListener('focusin', pauseTimer);
    sliderSection.addEventListener('focusout', resumeTimer);

    // Keyboard navigation (ArrowLeft & ArrowRight)
    sliderSection.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
        }
    });

    // Touch swipe support for mobile screens
    let touchStartX = 0;
    let touchEndX = 0;

    sliderSection.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        pauseTimer();
    }, { passive: true });

    sliderSection.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
        resumeTimer();
    }, { passive: true });

    function handleSwipe() {
        const swipeThreshold = 50; // pixels
        const diff = touchEndX - touchStartX;
        if (diff < -swipeThreshold) {
            nextSlide(); // Swiped left -> next
        } else if (diff > swipeThreshold) {
            prevSlide(); // Swiped right -> prev
        }
    }

    // Initialize first slide and timer
    showSlide(0, false);
}

/**
 * Mobile navigation drawer toggle
 */
export function initNavbar() {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    if (!btn || !menu) return;

    const openIcon = btn.querySelector('.menu-open-icon');
    const closeIcon = btn.querySelector('.menu-close-icon');

    function toggleMenu() {
        const isExpanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', !isExpanded);
        menu.classList.toggle('hidden');
        if (openIcon) openIcon.classList.toggle('hidden');
        if (closeIcon) closeIcon.classList.toggle('hidden');
    }

    btn.addEventListener('click', toggleMenu);

    // Close mobile menu on clicking any navigation link
    const links = menu.querySelectorAll('.mobile-nav-link');
    links.forEach(link => {
        link.addEventListener('click', () => {
            btn.setAttribute('aria-expanded', 'false');
            menu.classList.add('hidden');
            if (openIcon) openIcon.classList.remove('hidden');
            if (closeIcon) closeIcon.classList.add('hidden');
        });
    });
}
