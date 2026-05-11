<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Rontech') }}</title>
        <meta
            name="description"
            content="Premium software development, modern websites, business systems, and digital solutions built to help companies grow smarter."
        >

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap"
            rel="stylesheet"
        >
    </head>
    <body>
        <div class="site-shell">
            <div class="site-noise"></div>
            <div class="site-orb site-orb--violet"></div>
            <div class="site-orb site-orb--cyan"></div>

            <header class="site-header">
                <div class="container site-header__inner">
                    <a class="brand-mark" href="#home" aria-label="Rontech home">
                        <span class="brand-mark__core">
                            <img src="{{ asset('images/4x3.jpg') }}" alt="Rontech logo placeholder" class="brand-mark__logo">
                        </span>
                        <span class="brand-mark__text">
                            <strong>Rontech</strong>
                            <!-- <small>Software Studio</small> -->
                        </span>
                    </a>

                    <button class="nav-toggle" type="button" aria-label="Toggle navigation" data-nav-toggle>
                        <span></span>
                        <span></span>
                    </button>

                    <nav class="site-nav" data-nav-panel>
                        <a href="#home">Home</a>
                        <a href="#services">Services</a>
                        <a href="#products">Products</a>
                        <a href="#about">About</a>
                        <a href="#contact">Contact</a>
                    </nav>
                </div>
            </header>

            <main>
                <section class="hero section" id="home">
                    <div class="container hero__grid">
                        <div class="hero__content">
                            <p class="eyebrow" data-hero-reveal>Premium Software Development Company</p>
                            <h1 data-hero-reveal data-hero-delay="0.08">We Build Solutions for Your Business Challenges</h1>
                            <p class="hero__lede" data-hero-reveal data-hero-delay="0.16">
                                We create custom software, modern websites, and digital solutions designed to help businesses
                                grow and operate smarter.
                            </p>

                            <div class="hero__actions" data-hero-reveal data-hero-delay="0.24">
                                <a class="button button--primary" href="#services" data-button-hover>Explore Services</a>
                                <a class="button button--ghost" href="#contact" data-button-hover>Contact Us</a>
                            </div>

                            <div class="hero__meta" data-hero-reveal data-hero-delay="0.32">
                                <div class="hero__meta-card glass-panel">
                                    <span>Strategy-led</span>
                                    <strong>Modern design with business-focused execution.</strong>
                                </div>
                                <div class="hero__meta-card glass-panel">
                                    <span>Placeholder-ready</span>
                                    <strong>Every image area is easy to replace with your own assets later.</strong>
                                </div>
                            </div>
                        </div>

                        <div class="hero__visual" data-parallax-group>
                            <div class="hero__portrait hero__portrait--clean frame-stack" data-hero-image data-parallax data-parallax-speed="0.08">
                                <img src="{{ asset('images/4x3.jpg') }}" alt="Placeholder portrait for future founder image">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section" aria-label="What we offer">
                    <div class="container">
                        <div class="section-heading" data-reveal>
                            <p class="eyebrow">What We Offer</p>
                            <h2>Digital products and custom systems built to elevate how your business works.</h2>
                        </div>

                        <div class="offer-grid" data-stagger-group>
                            <article class="offer-card glass-panel" data-stagger-item data-card-hover>
                                <div class="offer-card__icon"></div>
                                <h3>Software Development</h3>
                                <p>Premium design thinking, strong technical execution, and solutions shaped around real business outcomes.</p>
                            </article>
                            <article class="offer-card glass-panel" data-stagger-item data-card-hover>
                                <div class="offer-card__icon"></div>
                                <h3>Modern Website Development</h3>
                                <p>Premium design thinking, strong technical execution, and solutions shaped around real business outcomes.</p>
                            </article>
                            <article class="offer-card glass-panel" data-stagger-item data-card-hover>
                                <div class="offer-card__icon"></div>
                                <h3>Animated &amp; Interactive Websites</h3>
                                <p>Premium design thinking, strong technical execution, and solutions shaped around real business outcomes.</p>
                            </article>
                            <article class="offer-card glass-panel" data-stagger-item data-card-hover>
                                <div class="offer-card__icon"></div>
                                <h3>Custom Website Solutions</h3>
                                <p>Premium design thinking, strong technical execution, and solutions shaped around real business outcomes.</p>
                            </article>
                            <article class="offer-card glass-panel" data-stagger-item data-card-hover>
                                <div class="offer-card__icon"></div>
                                <h3>Desktop Applications</h3>
                                <p>Premium design thinking, strong technical execution, and solutions shaped around real business outcomes.</p>
                            </article>
                            <article class="offer-card glass-panel" data-stagger-item data-card-hover>
                                <div class="offer-card__icon"></div>
                                <h3>Mobile Applications</h3>
                                <p>Premium design thinking, strong technical execution, and solutions shaped around real business outcomes.</p>
                            </article>
                            <article class="offer-card glass-panel" data-stagger-item data-card-hover>
                                <div class="offer-card__icon"></div>
                                <h3>Technical Support &amp; Troubleshooting</h3>
                                <p>Premium design thinking, strong technical execution, and solutions shaped around real business outcomes.</p>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="section section--products" id="products">
                    <div class="container">
                        <div class="section-heading section-heading--split" data-reveal>
                            <div>
                                <p class="eyebrow">Featured Products</p>
                                <h2>Signature systems designed for growth, efficiency, and operational clarity.</h2>
                            </div>
                            <div class="section-heading__aside">
                                <p>Use the spotlight carousel to present flagship products, then reinforce trust with the supporting product grid below.</p>
                            </div>
                        </div>

                        <div class="product-showcase glass-panel" data-product-carousel>
                            <div class="product-showcase__slides">
                                <article class="product-slide" data-product-slide data-active="true">
                                    <div class="product-slide__media frame-stack">
                                        <img src="{{ asset('images/temporary.jpg') }}" alt="Business Management System placeholder image">
                                    </div>
                                    <div class="product-slide__content">
                                        <p class="eyebrow">Product 01</p>
                                        <h3>Business Management System</h3>
                                        <p>A centralized operational hub for managing teams, tasks, reporting, and day-to-day execution.</p>
                                        <ul class="feature-list">
                                            <li>Unified oversight</li>
                                            <li>Workflow visibility</li>
                                            <li>Stronger decision-making</li>
                                        </ul>
                                        <a class="button button--ghost" href="#contact" data-button-hover>Discuss This Product</a>
                                    </div>
                                </article>

                                <article class="product-slide" data-product-slide>
                                    <div class="product-slide__media frame-stack">
                                        <img src="{{ asset('images/16x9.jpg') }}" alt="Inventory System placeholder image">
                                    </div>
                                    <div class="product-slide__content">
                                        <p class="eyebrow">Product 02</p>
                                        <h3>Inventory System</h3>
                                        <p>Track stock movement, reduce losses, and maintain accurate inventory control across your operation.</p>
                                        <ul class="feature-list">
                                            <li>Live stock tracking</li>
                                            <li>Simplified audits</li>
                                            <li>Fewer manual errors</li>
                                        </ul>
                                        <a class="button button--ghost" href="#contact" data-button-hover>Discuss This Product</a>
                                    </div>
                                </article>

                                <article class="product-slide" data-product-slide>
                                    <div class="product-slide__media frame-stack">
                                        <img src="{{ asset('images/4x3.jpg') }}" alt="Attendance System placeholder image">
                                    </div>
                                    <div class="product-slide__content">
                                        <p class="eyebrow">Product 03</p>
                                        <h3>Attendance System</h3>
                                        <p>A dependable attendance platform for monitoring presence, schedules, and workforce reporting.</p>
                                        <ul class="feature-list">
                                            <li>Clear attendance logs</li>
                                            <li>Manager reporting</li>
                                            <li>Time-saving automation</li>
                                        </ul>
                                        <a class="button button--ghost" href="#contact" data-button-hover>Discuss This Product</a>
                                    </div>
                                </article>

                                <article class="product-slide" data-product-slide>
                                    <div class="product-slide__media frame-stack">
                                        <img src="{{ asset('images/temporary.jpg') }}" alt="Booking Platform placeholder image">
                                    </div>
                                    <div class="product-slide__content">
                                        <p class="eyebrow">Product 04</p>
                                        <h3>Booking Platform</h3>
                                        <p>A polished booking experience for managing reservations, service slots, and customer journeys.</p>
                                        <ul class="feature-list">
                                            <li>Frictionless booking flow</li>
                                            <li>Availability controls</li>
                                            <li>Better user convenience</li>
                                        </ul>
                                        <a class="button button--ghost" href="#contact" data-button-hover>Discuss This Product</a>
                                    </div>
                                </article>

                                <article class="product-slide" data-product-slide>
                                    <div class="product-slide__media frame-stack">
                                        <img src="{{ asset('images/16x9.jpg') }}" alt="Custom Website Solutions placeholder image">
                                    </div>
                                    <div class="product-slide__content">
                                        <p class="eyebrow">Product 05</p>
                                        <h3>Custom Website Solutions</h3>
                                        <p>Tailored digital platforms that blend strong visuals, business logic, and conversion-focused storytelling.</p>
                                        <ul class="feature-list">
                                            <li>Brand differentiation</li>
                                            <li>Flexible architecture</li>
                                            <li>Built around your goals</li>
                                        </ul>
                                        <a class="button button--ghost" href="#contact" data-button-hover>Discuss This Product</a>
                                    </div>
                                </article>
                            </div>

                        </div>

                        <div class="product-grid" data-stagger-group>
                            <article class="product-card glass-panel" data-stagger-item data-card-hover>
                                <div class="product-card__media">
                                    <img src="{{ asset('images/temporary.jpg') }}" alt="Business Management System placeholder image">
                                </div>
                                <h3>Business Management System</h3>
                                <p>A centralized operational hub for managing teams, tasks, reporting, and day-to-day execution.</p>
                                <ul class="feature-list">
                                    <li>Unified oversight</li>
                                    <li>Workflow visibility</li>
                                    <li>Stronger decision-making</li>
                                </ul>
                                <a class="text-link" href="#contact">Request a tailored version</a>
                            </article>

                            <article class="product-card glass-panel" data-stagger-item data-card-hover>
                                <div class="product-card__media">
                                    <img src="{{ asset('images/16x9.jpg') }}" alt="Inventory System placeholder image">
                                </div>
                                <h3>Inventory System</h3>
                                <p>Track stock movement, reduce losses, and maintain accurate inventory control across your operation.</p>
                                <ul class="feature-list">
                                    <li>Live stock tracking</li>
                                    <li>Simplified audits</li>
                                    <li>Fewer manual errors</li>
                                </ul>
                                <a class="text-link" href="#contact">Request a tailored version</a>
                            </article>

                            <article class="product-card glass-panel" data-stagger-item data-card-hover>
                                <div class="product-card__media">
                                    <img src="{{ asset('images/4x3.jpg') }}" alt="Attendance System placeholder image">
                                </div>
                                <h3>Attendance System</h3>
                                <p>A dependable attendance platform for monitoring presence, schedules, and workforce reporting.</p>
                                <ul class="feature-list">
                                    <li>Clear attendance logs</li>
                                    <li>Manager reporting</li>
                                    <li>Time-saving automation</li>
                                </ul>
                                <a class="text-link" href="#contact">Request a tailored version</a>
                            </article>

                            <article class="product-card glass-panel" data-stagger-item data-card-hover>
                                <div class="product-card__media">
                                    <img src="{{ asset('images/temporary.jpg') }}" alt="Booking Platform placeholder image">
                                </div>
                                <h3>Booking Platform</h3>
                                <p>A polished booking experience for managing reservations, service slots, and customer journeys.</p>
                                <ul class="feature-list">
                                    <li>Frictionless booking flow</li>
                                    <li>Availability controls</li>
                                    <li>Better user convenience</li>
                                </ul>
                                <a class="text-link" href="#contact">Request a tailored version</a>
                            </article>

                            <article class="product-card glass-panel" data-stagger-item data-card-hover>
                                <div class="product-card__media">
                                    <img src="{{ asset('images/16x9.jpg') }}" alt="Custom Website Solutions placeholder image">
                                </div>
                                <h3>Custom Website Solutions</h3>
                                <p>Tailored digital platforms that blend strong visuals, business logic, and conversion-focused storytelling.</p>
                                <ul class="feature-list">
                                    <li>Brand differentiation</li>
                                    <li>Flexible architecture</li>
                                    <li>Built around your goals</li>
                                </ul>
                                <a class="text-link" href="#contact">Request a tailored version</a>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="section" aria-label="Why choose us">
                    <div class="container">
                        <div class="section-heading" data-reveal>
                            <p class="eyebrow">Why Choose Us</p>
                            <h2>Premium execution backed by practical thinking, support, and systems built to scale.</h2>
                        </div>

                        <div class="reason-grid" data-stagger-group>
                            <article class="reason-card glass-panel" data-stagger-item data-card-hover>
                                <span class="reason-card__number">01</span>
                                <h3>Custom Solutions</h3>
                                <p>Every build is shaped around your process, your audience, and the bottlenecks you need solved.</p>
                            </article>
                            <article class="reason-card glass-panel" data-stagger-item data-card-hover>
                                <span class="reason-card__number">02</span>
                                <h3>Modern Design</h3>
                                <p>Interfaces are crafted to feel refined, current, and trustworthy from the very first interaction.</p>
                            </article>
                            <article class="reason-card glass-panel" data-stagger-item data-card-hover>
                                <span class="reason-card__number">03</span>
                                <h3>Reliable Support</h3>
                                <p>We stay present after launch with practical support, iteration, and issue resolution.</p>
                            </article>
                            <article class="reason-card glass-panel" data-stagger-item data-card-hover>
                                <span class="reason-card__number">04</span>
                                <h3>Scalable Systems</h3>
                                <p>Solutions are structured to grow with your team instead of forcing a rebuild too soon.</p>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="cta-banner section">
                    <div class="container">
                        <div class="cta-banner__inner glass-panel" data-reveal>
                            <div>
                                <p class="eyebrow">Premium Partnership</p>
                                <h2>Turn your next software idea into a polished digital product clients remember.</h2>
                            </div>
                            <a class="button button--primary" href="#contact" data-button-hover>Start a Project</a>
                        </div>
                    </div>
                </section>

                <section class="section" id="services">
                    <div class="container">
                        <div class="section-heading" data-reveal>
                            <p class="eyebrow">Services</p>
                            <h2>Modern software and web services presented with premium spacing, motion, and clarity.</h2>
                        </div>

                        <div class="service-stack">
                            <article class="service-row service-row--reverse" data-service-row>
                                <div class="service-row__media frame-stack" data-reveal>
                                    <img src="{{ asset('images/16x9.jpg') }}" alt="Software Development placeholder visual">
                                </div>
                                <div class="service-row__content" data-reveal>
                                    <p class="eyebrow">Service 01</p>
                                    <h3>Software Development</h3>
                                    <p>We engineer bespoke platforms, internal tools, and business-critical systems that turn operational friction into momentum.</p>
                                    <ul class="feature-list">
                                        <li>Custom architecture</li>
                                        <li>Operational automation</li>
                                        <li>API and system integrations</li>
                                    </ul>
                                    <a class="button button--ghost" href="#contact" data-button-hover>Enquire About This</a>
                                </div>
                            </article>

                            <article class="service-row" data-service-row>
                                <div class="service-row__media frame-stack" data-reveal>
                                    <img src="{{ asset('images/4x3.jpg') }}" alt="Modern Website Development placeholder visual">
                                </div>
                                <div class="service-row__content" data-reveal>
                                    <p class="eyebrow">Service 02</p>
                                    <h3>Modern Website Development</h3>
                                    <p>High-conversion marketing sites and digital experiences designed to communicate trust, clarity, and authority from the first scroll.</p>
                                    <ul class="feature-list">
                                        <li>Premium front-end design</li>
                                        <li>Responsive performance</li>
                                        <li>Brand-first presentation</li>
                                    </ul>
                                    <a class="button button--ghost" href="#contact" data-button-hover>Enquire About This</a>
                                </div>
                            </article>

                            <article class="service-row service-row--reverse" data-service-row>
                                <div class="service-row__media frame-stack" data-reveal>
                                    <img src="{{ asset('images/temporary.jpg') }}" alt="Animated Websites placeholder visual">
                                </div>
                                <div class="service-row__content" data-reveal>
                                    <p class="eyebrow">Service 03</p>
                                    <h3>Animated Websites</h3>
                                    <p>GSAP-powered interactions, elegant motion systems, and smooth transitions that make your brand feel elevated rather than overdesigned.</p>
                                    <ul class="feature-list">
                                        <li>Scroll storytelling</li>
                                        <li>Micro-interactions</li>
                                        <li>Performance-aware animation</li>
                                    </ul>
                                    <a class="button button--ghost" href="#contact" data-button-hover>Enquire About This</a>
                                </div>
                            </article>

                            <article class="service-row" data-service-row>
                                <div class="service-row__media frame-stack" data-reveal>
                                    <img src="{{ asset('images/16x9.jpg') }}" alt="Custom Business Systems placeholder visual">
                                </div>
                                <div class="service-row__content" data-reveal>
                                    <p class="eyebrow">Service 04</p>
                                    <h3>Custom Business Systems</h3>
                                    <p>Purpose-built systems for inventory, attendance, workflows, and operational visibility tailored to how your team actually works.</p>
                                    <ul class="feature-list">
                                        <li>Role-based flows</li>
                                        <li>Actionable dashboards</li>
                                        <li>Scalable foundations</li>
                                    </ul>
                                    <a class="button button--ghost" href="#contact" data-button-hover>Enquire About This</a>
                                </div>
                            </article>

                            <article class="service-row service-row--reverse" data-service-row>
                                <div class="service-row__media frame-stack" data-reveal>
                                    <img src="{{ asset('images/4x3.jpg') }}" alt="Desktop Applications placeholder visual">
                                </div>
                                <div class="service-row__content" data-reveal>
                                    <p class="eyebrow">Service 05</p>
                                    <h3>Desktop Applications</h3>
                                    <p>Reliable desktop software for teams that need speed, control, offline capability, or dedicated task-focused environments.</p>
                                    <ul class="feature-list">
                                        <li>Task-focused UX</li>
                                        <li>Data handling workflows</li>
                                        <li>Long-term maintainability</li>
                                    </ul>
                                    <a class="button button--ghost" href="#contact" data-button-hover>Enquire About This</a>
                                </div>
                            </article>

                            <article class="service-row" data-service-row>
                                <div class="service-row__media frame-stack" data-reveal>
                                    <img src="{{ asset('images/temporary.jpg') }}" alt="Mobile Applications placeholder visual">
                                </div>
                                <div class="service-row__content" data-reveal>
                                    <p class="eyebrow">Service 06</p>
                                    <h3>Mobile Applications</h3>
                                    <p>Mobile products built for usability, brand consistency, and the kind of polish that keeps customers engaged.</p>
                                    <ul class="feature-list">
                                        <li>Cross-platform delivery</li>
                                        <li>Clean interfaces</li>
                                        <li>Business-aligned features</li>
                                    </ul>
                                    <a class="button button--ghost" href="#contact" data-button-hover>Enquire About This</a>
                                </div>
                            </article>

                            <article class="service-row service-row--reverse" data-service-row>
                                <div class="service-row__media frame-stack" data-reveal>
                                    <img src="{{ asset('images/16x9.jpg') }}" alt="Technical Support placeholder visual">
                                </div>
                                <div class="service-row__content" data-reveal>
                                    <p class="eyebrow">Service 07</p>
                                    <h3>Technical Support</h3>
                                    <p>Fast, dependable support for troubleshooting, refinement, updates, and the ongoing technical decisions that keep systems healthy.</p>
                                    <ul class="feature-list">
                                        <li>Issue resolution</li>
                                        <li>Maintenance support</li>
                                        <li>Practical guidance</li>
                                    </ul>
                                    <a class="button button--ghost" href="#contact" data-button-hover>Enquire About This</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="section" id="about">
                    <div class="container about-layout">
                        <div class="about-story">
                            <div class="section-heading" data-reveal>
                                <p class="eyebrow">About</p>
                                <h2>A premium development partner focused on thoughtful design and reliable execution.</h2>
                            </div>

                            <div class="story-card glass-panel" data-reveal>
                                <p>
                                    We build software experiences that do more than look modern. Every project is shaped around
                                    solving specific business challenges, improving customer perception, and creating systems that
                                    are easier to operate over time.
                                </p>
                                <p>
                                    Our mission is to combine elegant presentation with practical engineering so businesses can
                                    launch solutions that feel premium, perform smoothly, and scale with confidence.
                                </p>
                            </div>

                            <div class="stats-grid">
                                <article class="stat-card glass-panel" data-reveal>
                                    <strong data-counter="8" data-counter-suffix="+">0+</strong>
                                    <span>Years refining digital execution</span>
                                </article>
                                <article class="stat-card glass-panel" data-reveal>
                                    <strong data-counter="30" data-counter-suffix="+">0+</strong>
                                    <span>Custom solutions shaped for business needs</span>
                                </article>
                                <article class="stat-card glass-panel" data-reveal>
                                    <strong data-counter="100" data-counter-suffix="%">0%</strong>
                                    <span>Focused on clarity, quality, and long-term usability</span>
                                </article>
                            </div>
                        </div>

                        <div class="about-visuals">
                            <div class="about-visuals__image frame-stack" data-reveal>
                                <img src="{{ asset('images/temporary.jpg') }}" alt="Premium placeholder office scene">
                            </div>

                            <div class="timeline glass-panel" data-stagger-group>
                                <article class="timeline__item" data-stagger-item>
                                    <span>Discover</span>
                                    <p>We identify the business challenge, the user friction, and the growth opportunity.</p>
                                </article>
                                <article class="timeline__item" data-stagger-item>
                                    <span>Design</span>
                                    <p>We shape a premium visual direction and a practical experience around real goals.</p>
                                </article>
                                <article class="timeline__item" data-stagger-item>
                                    <span>Build</span>
                                    <p>We develop polished systems with performance, scalability, and clarity in mind.</p>
                                </article>
                                <article class="timeline__item" data-stagger-item>
                                    <span>Support</span>
                                    <p>We refine, maintain, and help your software keep creating value after launch.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section--contact" id="contact">
                    <div class="container contact-layout">
                        <div class="contact-copy" data-reveal>
                            <p class="eyebrow">Contact</p>
                            <h2>Let’s design a digital presence or software solution that feels unmistakably premium.</h2>
                            <p>
                                Share your goals, current pain points, or the type of product you want to launch. This section
                                is intentionally styled as a high-end handoff point for serious client enquiries.
                            </p>
                            <div class="contact-copy__image frame-stack">
                                <img src="{{ asset('images/16x9.jpg') }}" alt="Placeholder contact background visual">
                            </div>
                        </div>

                        <div class="contact-panel glass-panel" data-reveal>
                            <form class="contact-form">
                                <label>
                                    <span>Name</span>
                                    <input type="text" name="name" placeholder="Your name">
                                </label>
                                <label>
                                    <span>Email</span>
                                    <input type="email" name="email" placeholder="your@email.com">
                                </label>
                                <label>
                                    <span>Company</span>
                                    <input type="text" name="company" placeholder="Your company">
                                </label>
                                <label>
                                    <span>Project Type</span>
                                    <select name="project_type">
                                        <option>Software Development</option>
                                        <option>Website Development</option>
                                        <option>Business System</option>
                                        <option>Mobile Application</option>
                                        <option>Technical Support</option>
                                    </select>
                                </label>
                                <label class="contact-form__full">
                                    <span>Project Details</span>
                                    <textarea name="message" rows="5" placeholder="Tell us what you want to build."></textarea>
                                </label>
                                <button class="button button--primary contact-form__submit" type="submit" data-button-hover>Send Enquiry</button>
                            </form>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
