import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const fadeUp = (target, options = {}) => {
    const {
        y = 20,
        duration = 0.56,
        delay = 0,
        start = 'top 88%',
        once = true,
        ease = 'expo.out',
    } = options;

    gsap.fromTo(
        target,
        { autoAlpha: 0, y },
        {
            autoAlpha: 1,
            y: 0,
            duration,
            delay,
            ease,
            scrollTrigger: {
                trigger: target,
                start,
                once,
            },
        },
    );
};

const initHero = () => {
    const items = document.querySelectorAll('[data-hero-reveal]');
    const heroImage = document.querySelector('[data-hero-image]');

    const tl = gsap.timeline({ defaults: { ease: 'expo.out' } });

    items.forEach((item) => {
        tl.fromTo(
            item,
            { autoAlpha: 0, y: 18 },
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.5,
            },
            Number(item.dataset.heroDelay ?? 0) * 0.5,
        );
    });

    if (heroImage) {
        tl.fromTo(
            heroImage,
            { autoAlpha: 0, y: 20, scale: 0.992 },
            { autoAlpha: 1, y: 0, scale: 1, duration: 0.62 },
            0.06,
        );

        gsap.to(heroImage, {
            yPercent: -2.5,
            ease: 'none',
            scrollTrigger: {
                trigger: '.hero',
                start: 'top top',
                end: 'bottom top',
                scrub: true,
            },
        });
    }
};

const initRevealAnimations = () => {
    document.querySelectorAll('[data-reveal]').forEach((element) => {
        fadeUp(element);
    });

    document.querySelectorAll('[data-stagger-group]').forEach((group) => {
        const items = group.querySelectorAll('[data-stagger-item]');

        if (!items.length) {
            return;
        }

        gsap.fromTo(
            items,
            { autoAlpha: 0, y: 20 },
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.54,
                ease: 'expo.out',
                stagger: 0.045,
                scrollTrigger: {
                    trigger: group,
                    start: 'top 86%',
                    once: true,
                },
            },
        );
    });
};

const initParallax = () => {
    document.querySelectorAll('[data-parallax]').forEach((element) => {
        const speed = Number(element.dataset.parallaxSpeed ?? 0.1);

        gsap.to(element, {
            yPercent: speed * 100,
            ease: 'none',
            scrollTrigger: {
                trigger: element.closest('[data-parallax-group]') ?? element,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true,
            },
        });
    });
};

const initCardHovers = () => {
    document.querySelectorAll('[data-card-hover]').forEach((card) => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, { y: -8, duration: 0.14, ease: 'expo.out', overwrite: true });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, { y: 0, duration: 0.14, ease: 'expo.out', overwrite: true });
        });
    });

    document.querySelectorAll('[data-button-hover]').forEach((button) => {
        button.addEventListener('mouseenter', () => {
            gsap.to(button, {
                y: -3,
                scale: 1.018,
                duration: 0.12,
                ease: 'expo.out',
                overwrite: true,
                boxShadow: button.classList.contains('button--primary')
                    ? '0 24px 54px rgba(77, 144, 255, 0.48)'
                    : '0 18px 38px rgba(8, 15, 35, 0.4)',
            });
        });

        button.addEventListener('mouseleave', () => {
            gsap.to(button, {
                y: 0,
                scale: 1,
                duration: 0.12,
                ease: 'expo.out',
                overwrite: true,
                boxShadow: button.classList.contains('button--primary')
                    ? '0 16px 40px rgba(77, 144, 255, 0.34)'
                    : '0 0 0 rgba(8, 15, 35, 0)',
            });
        });
    });
};

const initCounters = () => {
    document.querySelectorAll('[data-counter]').forEach((counter) => {
        const endValue = Number(counter.dataset.counter ?? 0);
        const suffix = counter.dataset.counterSuffix ?? '';
        const state = { value: 0 };

        ScrollTrigger.create({
            trigger: counter,
            start: 'top 85%',
            once: true,
            onEnter: () => {
                gsap.to(state, {
                    value: endValue,
                    duration: 1.6,
                    ease: 'power2.out',
                    onUpdate: () => {
                        counter.textContent = `${Math.round(state.value)}${suffix}`;
                    },
                });
            },
        });
    });
};

const initServiceRows = () => {
    document.querySelectorAll('[data-service-row]').forEach((row) => {
        const media = row.querySelector('.service-row__media');
        const content = row.querySelector('.service-row__content');

        if (!media || !content) {
            return;
        }

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: row,
                start: 'top 75%',
                once: true,
            },
        });

        tl.fromTo(media, { autoAlpha: 0, x: -20 }, { autoAlpha: 1, x: 0, duration: 0.56, ease: 'expo.out' }).fromTo(
            content,
            { autoAlpha: 0, x: 20 },
            { autoAlpha: 1, x: 0, duration: 0.52, ease: 'expo.out' },
            0.02,
        );
    });
};

const initProductCarousel = () => {
    const carousel = document.querySelector('[data-product-carousel]');

    if (!carousel) {
        return;
    }

    const slides = Array.from(carousel.querySelectorAll('[data-product-slide]'));
    const slidesTrack = carousel.querySelector('.product-showcase__slides');

    if (slides.length < 2) {
        return;
    }

    let activeIndex = 0;
    let isAnimating = false;
    let autoplayId;
    let touchStartX = 0;
    let touchDeltaX = 0;
    let isPointerDown = false;

    gsap.set(slides, {
        autoAlpha: 0,
        xPercent: 6,
    });

    gsap.set(slides[0], {
        autoAlpha: 1,
        xPercent: 0,
    });

    const goTo = (nextIndex, direction = 1) => {
        if (isAnimating || nextIndex === activeIndex) {
            return;
        }

        isAnimating = true;

        const currentSlide = slides[activeIndex];
        const nextSlide = slides[nextIndex];

        currentSlide.dataset.active = 'false';
        nextSlide.dataset.active = 'true';

        gsap
            .timeline({
                defaults: { duration: 0.4, ease: 'expo.out' },
                onComplete: () => {
                    activeIndex = nextIndex;
                    isAnimating = false;
                },
            })
            .set(nextSlide, { xPercent: direction > 0 ? 5 : -5 })
            .to(currentSlide, { autoAlpha: 0, xPercent: direction > 0 ? -5 : 5 }, 0)
            .to(nextSlide, { autoAlpha: 1, xPercent: 0 }, 0);
    };

    const goNext = () => goTo((activeIndex + 1) % slides.length, 1);
    const goPrevious = () => goTo((activeIndex - 1 + slides.length) % slides.length, -1);
    const startAutoplay = () => {
        window.clearInterval(autoplayId);
        autoplayId = window.setInterval(goNext, 3200);
    };
    const stopAutoplay = () => window.clearInterval(autoplayId);
    const onPointerDown = (clientX) => {
        isPointerDown = true;
        touchStartX = clientX;
        touchDeltaX = 0;
        carousel.classList.add('is-dragging');
        stopAutoplay();
    };
    const onPointerMove = (clientX) => {
        if (!isPointerDown) {
            return;
        }

        touchDeltaX = clientX - touchStartX;
    };
    const onPointerUp = () => {
        if (!isPointerDown) {
            return;
        }

        isPointerDown = false;
        carousel.classList.remove('is-dragging');

        if (Math.abs(touchDeltaX) > 45) {
            if (touchDeltaX < 0) {
                goNext();
            } else {
                goPrevious();
            }
        }

        touchDeltaX = 0;
        startAutoplay();
    };

    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);
    carousel.addEventListener('touchstart', (event) => onPointerDown(event.touches[0].clientX), { passive: true });
    carousel.addEventListener('touchmove', (event) => onPointerMove(event.touches[0].clientX), { passive: true });
    carousel.addEventListener('touchend', onPointerUp);
    carousel.addEventListener('touchcancel', onPointerUp);

    slidesTrack?.addEventListener('pointerdown', (event) => {
        if (event.pointerType === 'mouse' && event.button !== 0) {
            return;
        }

        onPointerDown(event.clientX);
    });

    slidesTrack?.addEventListener('pointermove', (event) => {
        onPointerMove(event.clientX);
    });

    slidesTrack?.addEventListener('pointerup', onPointerUp);
    slidesTrack?.addEventListener('pointercancel', onPointerUp);
    slidesTrack?.addEventListener('pointerleave', () => {
        if (isPointerDown) {
            onPointerUp();
        }
    });
    startAutoplay();
};

const initNav = () => {
    const toggle = document.querySelector('[data-nav-toggle]');
    const panel = document.querySelector('[data-nav-panel]');

    if (!toggle || !panel) {
        return;
    }

    toggle.addEventListener('click', () => {
        const willOpen = !panel.classList.contains('is-open');
        panel.classList.toggle('is-open', willOpen);

        gsap.fromTo(
            panel,
            { autoAlpha: willOpen ? 0 : 1, y: willOpen ? -12 : 0 },
            { autoAlpha: willOpen ? 1 : 0, y: willOpen ? 0 : -12, duration: 0.16, ease: 'power3.out' },
        );
    });

    panel.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            panel.classList.remove('is-open');
            gsap.set(panel, { clearProps: 'all' });
        });
    });
};

const init = () => {
    initNav();

    if (prefersReducedMotion) {
        document.documentElement.classList.add('reduced-motion');
        initProductCarousel();
        return;
    }

    initHero();
    initRevealAnimations();
    initParallax();
    initCardHovers();
    initCounters();
    initServiceRows();
    initProductCarousel();
    ScrollTrigger.refresh();
};

document.addEventListener('DOMContentLoaded', init);
