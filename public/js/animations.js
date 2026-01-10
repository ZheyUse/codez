// CODEZ Portfolio - GSAP Animations with ScrollTrigger Stability
// Register GSAP plugins immediately
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// ===================================
// Custom Cursor
// ===================================
function initCursor() {
    const cursor = document.createElement('div');
    cursor.className = 'custom-cursor';
    document.body.appendChild(cursor);

    const cursorDot = document.createElement('div');
    cursorDot.className = 'custom-cursor-dot';
    document.body.appendChild(cursorDot);

    let mouseX = 0;
    let mouseY = 0;
    let cursorX = 0;
    let cursorY = 0;
    let dotX = 0;
    let dotY = 0;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    function animateCursor() {
        cursorX += (mouseX - cursorX) * 0.15;
        cursorY += (mouseY - cursorY) * 0.15;
        dotX += (mouseX - dotX) * 0.25;
        dotY += (mouseY - dotY) * 0.25;
        
        cursor.style.left = cursorX + 'px';
        cursor.style.top = cursorY + 'px';
        cursorDot.style.left = dotX + 'px';
        cursorDot.style.top = dotY + 'px';
        
        requestAnimationFrame(animateCursor);
    }

    animateCursor();

    // Cursor hover effects
    const hoverElements = 'a, button, .service-card, .project-card, .stack-item, .btn-primary, .btn-secondary, .contact-icon-circle';

    document.addEventListener('mouseover', (e) => {
        if (e.target.closest(hoverElements)) {
            cursor.classList.add('hover');
        }
    });

    document.addEventListener('mouseout', (e) => {
        if (e.target.closest(hoverElements)) {
            cursor.classList.remove('hover');
        }
    });
}

// ===================================
// Main Animation Initialization
// ===================================
function initAnimations() {
    // Clear scroll memory and refresh before creating triggers
    ScrollTrigger.clearScrollMemory();
    ScrollTrigger.refresh(true);

    // ===================================
    // Hero Page Load Animations
    // ===================================
    // Header logo and nav entrance
    gsap.from('.brand-link .header-logo', {
        scale: 0.8,
        y: -6,
        opacity: 0,
        duration: 0.8,
        delay: 0.05,
        ease: 'power3.out'
    });

    gsap.from('.nav-links li', {
        y: -8,
        opacity: 0,
        duration: 0.7,
        stagger: 0.08,
        delay: 0.12,
        ease: 'power3.out'
    });
    gsap.from('.navbar', {
        y: -100,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });

    gsap.from('.hero-title .title-line', {
        y: 100,
        opacity: 0,
        duration: 1,
        delay: 0.3,
        ease: 'power3.out'
    });

    gsap.from('.hero-subtitle', {
        y: 50,
        opacity: 0,
        duration: 0.8,
        delay: 0.6,
        ease: 'power3.out'
    });

    gsap.from('.hero-tagline', {
        y: 30,
        opacity: 0,
        duration: 0.8,
        delay: 0.8,
        ease: 'power3.out'
    });

    gsap.from('.hero-cta .btn-hero', {
        y: 30,
        opacity: 0,
        duration: 0.6,
        stagger: 0.2,
        delay: 1,
        ease: 'power3.out'
    });

    gsap.from('.code-block', {
        scale: 0,
        rotation: -10,
        opacity: 0,
        duration: 1.2,
        delay: 0.5,
        ease: 'elastic.out(1, 0.5)'
    });

    gsap.from('.scroll-indicator', {
        opacity: 0,
        y: -20,
        duration: 1,
        delay: 1.5,
        ease: 'power2.out'
    });

    // ===================================
    // Section Headers Animation
    // ===================================
    gsap.utils.toArray('.section-header').forEach(header => {
        gsap.from(header.querySelector('.section-tag'), {
            scrollTrigger: {
                trigger: header,
                start: 'top 85%',
                toggleActions: 'play none none reverse',
                markers: false
            },
            scale: 0,
            opacity: 0,
            duration: 0.8,
            ease: 'back.out(1.7)'
        });

        gsap.from(header.querySelector('.section-title'), {
            scrollTrigger: {
                trigger: header,
                start: 'top 85%',
                toggleActions: 'play none none reverse',
                markers: false
            },
            y: 80,
            opacity: 0,
            duration: 1,
            delay: 0.2,
            ease: 'power3.out'
        });
    });

    // ===================================
    // About Section
    // ===================================
    gsap.from('.about-text p', {
        scrollTrigger: {
            trigger: '.about',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
            markers: false
        },
        y: 80,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: 'power3.out'
    });

    gsap.from('.about-image', {
        scrollTrigger: {
            trigger: '.about',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
            markers: false
        },
        y: 80,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });

    // ===================================
    // Stats Section
    // ===================================
    const statsSection = document.querySelector('.stats');
    if (statsSection) {
        ScrollTrigger.create({
            trigger: statsSection,
            start: 'top 85%',
            toggleActions: 'play none none reverse',
            markers: false,
            onEnter: () => {
                const statNumbers = document.querySelectorAll('.stat-number');
                statNumbers.forEach(stat => {
                    const target = parseInt(stat.getAttribute('data-count'));
                    
                    gsap.to(stat, {
                        textContent: target,
                        duration: 2,
                        ease: 'power1.out',
                        snap: { textContent: 1 },
                        onUpdate: function() {
                            stat.textContent = Math.ceil(stat.textContent);
                        }
                    });
                });
            },
            once: true
        });
    }

    gsap.from('.stat-card', {
        scrollTrigger: {
            trigger: '.stats',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
            markers: false
        },
        y: 80,
        opacity: 0,
        duration: 1,
        stagger: 0.15,
        ease: 'power3.out'
    });

    // ===================================
    // Services / Tech Stack / Projects
    // Use IntersectionObserver + CSS for reveals (avoid GSAP for responsiveness)
    // ===================================
    function initRevealOnView() {
        const selectors = ['.service-card', '.stack-column', '.stack-item', '.project-card'];
        const elements = selectors.flatMap(sel => Array.from(document.querySelectorAll(sel)));

        if (!elements.length) return;

        // add base reveal class and set stagger variable
        elements.forEach((el, i) => {
            el.classList.add('reveal');
            el.style.setProperty('--reveal-delay', `${i * 80}ms`);
        });

        const io = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    // unobserve to keep it simple and performant
                    obs.unobserve(entry.target);
                }
            });
        }, { root: null, rootMargin: '0px 0px -10% 0px', threshold: 0.12 });

        elements.forEach(el => io.observe(el));
    }

    initRevealOnView();

    // ===================================
    // Contact Section
    // ===================================
    gsap.from('.contact-icon-wrapper', {
        scrollTrigger: {
            trigger: '.contact',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
            markers: false
        },
        scale: 0,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: 'back.out(1.7)'
    });

    gsap.from('.contact-form-wrapper', {
        scrollTrigger: {
            trigger: '.contact',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
            markers: false
        },
        y: 80,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });

    gsap.from('.form-group', {
        scrollTrigger: {
            trigger: '.contact-form',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
            markers: false
        },
        y: 80,
        opacity: 0,
        duration: 1,
        stagger: 0.15,
        ease: 'power3.out'
    });

    // ===================================
    // Footer Section
    // ===================================
    gsap.from('.footer-content', {
        scrollTrigger: {
            trigger: '.footer',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
            markers: false
        },
        y: 80,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });

    // ===================================
    // Parallax Effects
    // ===================================
    gsap.to('.hero-bg', {
        scrollTrigger: {
            trigger: '.hero',
            start: 'top top',
            end: 'bottom top',
            scrub: 1,
            markers: false
        },
        y: 200,
        opacity: 0.5,
        ease: 'none'
    });

    // Delayed refresh to stabilize layout shifts
    setTimeout(() => {
        ScrollTrigger.refresh();
    }, 300);
}

// ===================================
// Interactive Hover Effects
// ===================================
function initHoverEffects() {
    // Service card hover
    document.querySelectorAll('.service-card').forEach(card => {
        const icon = card.querySelector('.service-icon');
        
        card.addEventListener('mouseenter', () => {
            gsap.to(icon, {
                scale: 1.15,
                rotation: 5,
                duration: 0.4,
                ease: 'back.out(1.7)'
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(icon, {
                scale: 1,
                rotation: 0,
                duration: 0.4,
                ease: 'back.out(1.7)'
            });
        });
    });

    // Project card parallax
    document.querySelectorAll('.project-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (y - centerY) / 15;
            const rotateY = (centerX - x) / 15;
            
            gsap.to(card, {
                rotationX: rotateX,
                rotationY: rotateY,
                duration: 0.5,
                ease: 'power2.out',
                transformPerspective: 1000
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                rotationX: 0,
                rotationY: 0,
                duration: 0.5,
                ease: 'power2.out'
            });
        });
    });

    // Button hover
    document.querySelectorAll('.btn-primary, .btn-secondary').forEach(button => {
        button.addEventListener('mouseenter', () => {
            gsap.to(button, {
                scale: 1.05,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        button.addEventListener('mouseleave', () => {
            gsap.to(button, {
                scale: 1,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });
}

// ===================================
// Project Card Enter-View Animations
// Animate .card elements when they enter the viewport using GSAP + ScrollTrigger
// Respects prefers-reduced-motion
// ===================================
function initProjectCardAnimations() {
    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        // Respect reduced motion: ensure cards are visible without animation
        gsap.set('.card', { opacity: 1, y: 0, scale: 1 });
        return;
    }

    // Use ScrollTrigger.batch for efficient handling of many cards
    if (ScrollTrigger && ScrollTrigger.batch) {
        ScrollTrigger.batch('.card', {
            onEnter: (batch) => {
                gsap.fromTo(batch, { y: 40, opacity: 0, scale: 0.98 }, {
                    y: 0,
                    opacity: 1,
                    scale: 1,
                    duration: 0.9,
                    ease: 'power3.out',
                    stagger: 0.06
                });
            },
            onLeaveBack: (batch) => {
                gsap.to(batch, { y: 40, opacity: 0, scale: 0.98, duration: 0.5, ease: 'power2.in' });
            },
            start: 'top 85%'
        });
    } else {
        // Fallback: animate each card individually
        gsap.utils.toArray('.card').forEach(card => {
            gsap.from(card, {
                y: 40,
                opacity: 0,
                scale: 0.98,
                duration: 0.9,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                }
            });
        });
    }
}

// ===================================
// Navbar Scroll Effect
// ===================================
function initNavbar() {
    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar');
        const currentScroll = window.pageYOffset;

        if (currentScroll > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

// ===================================
// Smooth Scroll Navigation
// ===================================
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                gsap.to(window, {
                    duration: 0.45,
                    overwrite: true,
                    scrollTo: {
                        y: target,
                        offsetY: 80
                    },
                    ease: 'power2.out'
                });
            }
        });
    });
}

// ===================================
// Resize Handler
// ===================================
function initResizeHandler() {
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            ScrollTrigger.refresh();
        }, 250);
    });
}

// ===================================
// Stack progress hover animations
// Animate progress bar width and percent text from 0 -> target on hover
// ===================================
function initStackProgress() {
    document.querySelectorAll('.stack-item').forEach(item => {
        const barInner = item.querySelector('.progress-bar-inner');
        const percentEl = item.querySelector('.progress-percent');
        if (!barInner || !percentEl) return;

        // read target percent from CSS var --pct (e.g. "90%")
        const pctRaw = getComputedStyle(item).getPropertyValue('--pct').trim() || '0%';
        const target = parseInt(pctRaw.replace('%','')) || 0;

        let enterAnim;
        let leaveAnim;

        item.addEventListener('mouseenter', () => {
            // cancel leave anims
            if (leaveAnim) leaveAnim.kill && leaveAnim.kill();

            // animate width
            enterAnim = gsap.to(barInner, { width: pctRaw, duration: 1.0, ease: 'power3.out' });

            // animate number
            const obj = { value: 0 };
            gsap.to(obj, {
                value: target,
                duration: 1.0,
                ease: 'power1.out',
                onUpdate: () => { percentEl.textContent = Math.round(obj.value) + '%'; }
            });
        });

        item.addEventListener('mouseleave', () => {
            // cancel enter anims
            if (enterAnim) enterAnim.kill && enterAnim.kill();

            // animate width back to 0
            leaveAnim = gsap.to(barInner, { width: '0%', duration: 0.5, ease: 'power3.inOut' });

            // animate number back to 0
            const obj = { value: parseInt(percentEl.textContent) || 0 };
            gsap.to(obj, {
                value: 0,
                duration: 0.5,
                ease: 'power3.inOut',
                onUpdate: () => { percentEl.textContent = Math.round(obj.value) + '%'; }
            });
        });
    });
}

// ===================================
// Panel Body Isolated Scrolling
// When pointer is over a panel-body, only that element scrolls (not the main page)
// ===================================
function initPanelScrolling() {
    document.querySelectorAll('.about-panel .panel-body').forEach(panelBody => {
        panelBody.addEventListener('wheel', (e) => {
            e.stopPropagation();
            e.preventDefault();
            
            // Directly scroll the panel body
            panelBody.scrollTop += e.deltaY;
        }, { passive: false, capture: true });
        
        // Also handle mouseenter to ensure focus
        panelBody.addEventListener('mouseenter', () => {
            panelBody.style.pointerEvents = 'auto';
        });
    });
}

// ===================================
// Card-container Horizontal Wheel Scrolling
// When pointer is over a horizontal card scroller, use the wheel to scroll the container horizontally
// and prevent the page from scrolling. When the pointer leaves, normal page scrolling resumes.
// ===================================
function initCardScroller() {
    document.querySelectorAll('.card-container').forEach(container => {
        // wheel handler that scrolls horizontally when hovering the container
        const onWheel = (e) => {
            // Only hijack when the pointer is actually over the container
            if (!container.matches(':hover')) return;

            // Prevent the page from scrolling
            e.preventDefault();

            // Prefer deltaY for vertical wheel, but also include deltaX for trackpads
            const delta = e.deltaY || e.deltaX;
            // Multiply for a comfortable scroll speed
            container.scrollLeft += delta;
        };

        // Attach wheel listener with passive: false so we can preventDefault()
        container.addEventListener('wheel', onWheel, { passive: false });
    });
}

// ===================================
// Initialize Everything on Full Load
// ===================================
window.addEventListener('load', () => {
    initCursor();
    initAnimations();
    initHoverEffects();
    initStackProgress();
    initNavbar();
    initSmoothScroll();
    initResizeHandler();
    initPanelScrolling();
    initCardScroller();
    initProjectCardAnimations();
    
    // Ensure panel bodies and timeline cards are scrolled to the bottom
    // so the most recent timeline entries are visible and the scrollbar appears.
    setTimeout(() => {
        document.querySelectorAll('.about-panel .panel-body, .timeline-content').forEach(el => {
            try { el.scrollTop = el.scrollHeight; } catch (e) { /* ignore */ }
        });
    }, 120);

    console.log('CODEZ Portfolio - All animations initialized successfully!');
});
