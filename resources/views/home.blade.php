@extends('layouts.app')

@section('title', 'Codez')

@section('content')

<!-- Hero Section -->
<section class="hero" id="home">
    <canvas id="matrix" aria-hidden="true"></canvas>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-title-wrapper">
                    <h1 class="hero-title">Zheus Leiandre Cajote</h1>
                    <span class="founder-badge-inline" role="note" tabindex="0">Founder/CEO</span>
                </div>

                <div class="hero-subtitle">
                    <span class="company">Codez Graphics Design & Digital Solutions</span>
                </div>

                <div class="hero-contact-icons" aria-label="Contact links">
                    <a class="contact-link" href="mailto:zheusleiandrecajote@gmail.com" title="Email">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                        <span class="sr-only">Email</span>
                    </a>
                    <a class="contact-link" href="https://www.facebook.com/YeboiiZhey" target="_blank" rel="noopener" title="Facebook">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a class="contact-link" href="https://wa.me/09456935658" target="_blank" rel="noopener" title="WhatsApp">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                        <span class="sr-only">WhatsApp</span>
                    </a>
                    <a class="contact-link" href="tel:09456935658" title="Phone">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                        <span class="sr-only">Phone</span>
                    </a>
                </div>

              
            </div>
        </div>
        <div class="scroll-indicator">
            <span>Scroll Down</span>
            <div class="scroll-line"></div>
        </div>
    </div>
</section>

<!-- About Section -->
<!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="section-header">
            <div class="download-button">
                <a class="dl-link" href="https://www.dropbox.com/scl/fi/392icr24322hje6c6ttzq/ZheusLeiandreCajote-HRVD_RESUME.pdf?rlkey=f3va6k4wt5i24pxrnmhl713t3&st=dtgb79rr&dl=1" target="_blank" rel="noopener noreferrer" aria-label="Download Resume">
                    <span class="dl-icon" aria-hidden="true"><i class="fas fa-download"></i></span>
                    <span class="dl-label">Resume</span>
                </a>
                <b class="top">click to download</b>
                <b class="bottom">PDF • 244.54 KB</b>
            </div>
            <h2 class="section-title">Getting to know me</h2>
        </div>

        <!-- Horizontal scroll track: panels snap into view as user reads left → right -->
        <div class="about-scroll" role="region" aria-label="About me panels">
            <div class="about-track">
                

                <!-- Education Panel -->
                <article class="about-panel" aria-labelledby="about-education-title">
                    <header class="panel-header">
                        <i class="fas fa-graduation-cap panel-icon" aria-hidden="true"></i>
                        <h3 id="about-education-title" class="panel-title">Education</h3>
                    </header>
                    <div class="panel-body">
                        <section class="edu-entry">
                            <h4 class="edu-school">Cebu Technological University — Cagay, Barili</h4>
                            <p class="edu-degree">Bachelor of Science in Information Technology</p>
                            <p class="edu-date">2025 - 2026</p>
                            <p class="edu-note"><strong>Capstone Project:</strong> ExamLock: A Secure Mobile Testing Platform with Real-time Lockdown Alerts</p>
                            <p class="edu-note"><strong>Honors & coursework:</strong> 1st–4th Year Dean’s Lister; Research Congress Representative; Hackathon Runner Ups.</p>
                        </section>

                        <section class="edu-entry">
                            <h4 class="edu-school">University of Cebu - METC — Mambaling, Cebu</h4>
                            <p class="edu-degree">Specialized STEM: pre-baccalaureate maritime Strand</p>
                            <p class="edu-date">2017 - 2018</p>
                        </section>
                        
                        <section class="edu-entry">
                            <h4 class="edu-school">Saint Francis Academy</h4>
                            <p class="edu-degree">Junior High School</p>
                            <p class="edu-date">2015 - 2016</p>
                        </section>

                        <section class="edu-entry">
                            <h4 class="edu-school">Balamban Central Elementary School</h4>
                            <p class="edu-degree">Basic Education</p>
                            <p class="edu-date">2011 - 2012</p>
                        </section>
                    </div>
                </article>

                <!-- Experience Panel -->
                <article class="about-panel" aria-labelledby="about-experience-title">
                    <header class="panel-header">
                        <i class="fas fa-briefcase panel-icon" aria-hidden="true"></i>
                        <h3 id="about-experience-title" class="panel-title">Experience</h3>
                    </header>
                    <div class="panel-body">
                        <div class="panel-sub">Work From Home</div>
                        <!-- Work From Home: Artix Entertainment entries (most recent at top) -->
                        <section class="exp-entry">
                            <h4 class="exp-role">Artix Entertainment — Moderator</h4>
                            <p class="exp-place">Lutz, Florida</p>
                            <p class="exp-date">2021 – 2022</p>
                            <ul>
                                <li>Enforced community guidelines by reviewing player behavior and taking appropriate disciplinary actions for rule violations.</li>
                                <li>Monitored in-game activities to ensure a fair, safe, and enjoyable environment for all players.</li>
                                <li>Documented incidents and coordinated with senior staff to resolve player disputes and policy concerns.</li>
                            </ul>
                        </section>

                        <section class="exp-entry">
                            <h4 class="exp-role">Artix Entertainment — Game Tester</h4>
                            <p class="exp-place">Lutz, Florida</p>
                            <p class="exp-date">2021 – 2022</p>
                            <ul>
                                <li>Conducted systematic testing of game features, updates, and upcoming events prior to official release.</li>
                                <li>Identified gameplay issues, performance bugs, and usability concerns, providing detailed reports to the development team.</li>
                                <li>Collaborated with developers and QA staff to verify fixes and improve overall game quality.</li>
                            </ul>
                        </section>

                        <section class="exp-entry">
                            <h4 class="exp-role">Artix Entertainment — Bug Hunter</h4>
                            <p class="exp-place">Lutz, Florida</p>
                            <p class="exp-date">2021 – 2022</p>
                            <ul>
                                <li>Investigated and discovered software bugs, exploits, and inconsistencies within the game environment.</li>
                                <li>Documented reproduction steps and submitted detailed bug reports to assist developers in resolving issues efficiently.</li>
                                <li>Retested resolved issues to ensure stability and reliability of game updates before deployment.</li>
                            </ul>
                        </section>

                        <div class="panel-sub">Commission</div>

                        <section class="exp-entry">
                            <h4 class="exp-role">CODEZ — Graphics Designer</h4>
                            <p class="exp-place">Commission Based</p>
                            <p class="exp-date">2018 – Present</p>
                            <ul>
                                <li>Designed visual assets including UI and UX interfaces, posters, logos, apparel graphics, and esports branding materials.</li>
                                <li>Collaborated with clients to translate concepts and requirements into compelling digital designs.</li>
                                <li>Delivered high quality creative solutions while meeting deadlines and maintaining consistent brand identity across projects.</li>
                                <li>Managed multiple design projects simultaneously, ensuring client satisfaction and long term partnerships.</li>
                            </ul>
                        </section>

                        <section class="exp-entry">
                            <h4 class="exp-role">CODEZ — Developer</h4>
                            <p class="exp-place">Commission Based</p>
                            <p class="exp-date">2023 – Present</p>
                            <ul>
                                <li>Developed custom solutions including web applications, mobile applications, software systems, and IoT based projects tailored to client requirements.</li>
                                <li>Built automation scripts and performed web scraping to collect, process, and analyze data efficiently.</li>
                                <li>Collaborated closely with clients to design, implement, test, and deploy functional and scalable technical solutions.</li>
                                <li>Provided technical consultation, maintenance, and ongoing support to ensure long term performance and reliability of delivered projects.</li>
                            </ul>
                        </section>

                        <!-- Existing field work entries retained below -->
                        <div class="panel-sub">Field Work</div>
                        <section class="exp-entry">
                            <h4 class="exp-role">Philippine Statistics Authority — Enumerator</h4>
                            <p class="exp-place">Balamban, Cebu</p>
                            <p class="exp-date">Sept. 2020 – Nov. 2020</p>
                            <ul>
                                <li>Collected accurate household and individual data through field visits, verified respondent information, and ensured complete surveys.</li>
                                <li>Entered and checked data for consistency while meeting daily workload targets and managing assigned areas.</li>
                                <li>Coordinated with team leaders, communicated with respondents, and followed confidentiality and government protocols.</li>
                            </ul>
                        </section>

                        <section class="exp-entry">
                            <h4 class="exp-role">Community Based Monitoring System — Team Leader / Enumerator</h4>
                            <p class="exp-place">Balamban, Cebu</p>
                            <p class="exp-date">Jul. 2023 – Oct. 2023</p>
                            <ul>
                                <li>Supervised and guided enumerators, ensuring accurate data collection and completion of daily targets.</li>
                                <li>Coordinated assignments, monitored survey progress, and resolved field issues efficiently.</li>
                                <li>Maintained data quality and facilitated communication between team members and supervisors.</li>
                            </ul>
                        </section>
                    </div>
                </article>

                <!-- Leadership & Activities Panel -->
                <article class="about-panel panel-leadership" aria-labelledby="about-leadership-title">
                    <header class="panel-header">
                        <i class="fas fa-users panel-icon" aria-hidden="true"></i>
                        <h3 id="about-leadership-title" class="panel-title">Leadership & Activities</h3>
                    </header>
                    <div class="panel-body">
                        <div class="timeline-vertical" role="list">
                           
                            <div class="timeline-item">
                                <span class="timeline-marker" aria-hidden="true"></span>
                                <div class="timeline-content">
                                    <div class="timeline-year">2022 - 2023</div>
                                    <h4 class="timeline-title">Computer Study Society</h4>
                                    <p class="timeline-text">General Secretary</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <span class="timeline-marker" aria-hidden="true"></span>
                                <div class="timeline-content">
                                    <div class="timeline-year">2023 - 2024</div>
                                    <h4 class="timeline-title">Computer Study Society</h4>
                                    <p class="timeline-text">Vice – Governor in Internal Affairs</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <span class="timeline-marker" aria-hidden="true"></span>
                                <div class="timeline-content">
                                    <div class="timeline-year">2023 - 2024</div>
                                    <h4 class="timeline-title">Supreme Student Government</h4>
                                    <p class="timeline-text">BSIT – House Representative</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <span class="timeline-marker" aria-hidden="true"></span>
                                <div class="timeline-content">
                                    <div class="timeline-year">2023 - 2025</div>
                                    <h4 class="timeline-title">The Farm – CTU Barili Official Campus Press</h4>
                                    <p class="timeline-text">Senior Layout Artist</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <span class="timeline-marker" aria-hidden="true"></span>
                                <div class="timeline-content">
                                    <div class="timeline-year">2023 - 2025</div>
                                    <h4 class="timeline-title">Paragon Esports – CTU Barili Campus</h4>
                                    <p class="timeline-text">Founder / Chief Executive Officer</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <span class="timeline-marker" aria-hidden="true"></span>
                                <div class="timeline-content">
                                    <div class="timeline-year">2024 - 2025</div>
                                    <h4 class="timeline-title">Supreme Student Government</h4>
                                    <p class="timeline-text">Senator</p>
                                </div>
                            </div>
                             <div class="timeline-item">
                                <span class="timeline-marker" aria-hidden="true"></span>
                                <div class="timeline-content">
                                    <div class="timeline-year">2025 - 2026</div>
                                    <h4 class="timeline-title">Visual Arts Guild</h4>
                                    <p class="timeline-text">Co-Founder/Guild Scribe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="wave-wrap" aria-hidden="true">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path class="wave wave3" d="M0,128L48,144C96,160,192,192,288,202.7C384,213,480,203,576,186.7C672,171,768,149,864,170.7C960,192,1056,256,1152,250.7C1248,245,1344,171,1392,133.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            <path class="wave wave2" d="M0,160L48,154.7C96,149,192,139,288,154.7C384,171,480,213,576,218.7C672,224,768,192,864,186.7C960,181,1056,203,1152,202.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            <path class="wave wave1" d="M0,224L48,208C96,192,192,160,288,149.3C384,139,480,149,576,165.3C672,181,768,203,864,213.3C960,224,1056,224,1152,208C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number" data-count="{{ rtrim($stats['projects'], '+') }}">
                    <span class="value">0</span>
                    @if(strpos($stats['projects'], '+') !== false)
                        <span class="plus">+</span>
                    @endif
                </div>
                <div class="stat-label">Projects Launched</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-count="{{ $stats['experience_it'] }}">0</div>
                <div class="stat-label">Years in Dev</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-count="{{ $stats['experience_design'] }}">0</div>
                <div class="stat-label">Years in GFX</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-count="{{ rtrim($stats['clients'], '+') }}">
                    <span class="value">0</span>
                    @if(strpos($stats['clients'], '+') !== false)
                        <span class="plus">+</span>
                    @endif
                </div>
                <div class="stat-label">Happy Clients</div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">What I Do</span>
            <h2 class="section-title">Services</h2>
        </div>
        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card">
                <div class="service-icon">{!! $service['icon'] !!}</div>
                <h3 class="service-title">{{ $service['title'] }}</h3>
                <p class="service-description">{{ $service['description'] }}</p>
                <div class="service-glow"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Tech Stack Section -->
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">My Arsenal</span>
            <h2 class="section-title">Tech & Design Stack</h2>
        </div>
        <div class="stack-wrapper">
            <div class="stack-column">
                <h3 class="stack-heading"><i class="fas fa-code heading-icon" aria-hidden="true"></i> Development</h3>
                <div class="stack-items">
                    @php
                        $techLogos = [
                            'Flutter' => [
                                'type' => 'svg',
                                'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="998.6px" height="1236.6px" viewBox="0 0 998.6 1236.6" style="enable-background:new 0 0 998.6 1236.6;" xml:space="preserve"><style type="text/css">.st0{clip-path:url(#SVGID_2_);}.st1{fill:#4BC9F5;}.st2{clip-path:url(#SVGID_4_);fill:#9BCA3D;}.st3{fill:none;}.st4{fill:#8CAD3E;}.st5{clip-path:url(#SVGID_6_);}.st6{clip-path:url(#SVGID_8_);fill:#9BCA3D;}</style><defs></defs><g><g><defs><path id="SVGID_1_" d="M998.6,570.6l-332.9,333l332.9,333H618.2l-333-333l333-333H998.6z M618.2,0L0,618.2l190.2,190.2L998.6,0 C998.6,0,618.2,0,618.2,0z"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_"  style="overflow:visible;"/></clipPath><g class="st0"><path class="st1" d="M285.4,903.6l190.1,190.2l523.1-523.2H618.2L285.4,903.6z"/></g></g><g><defs><path id="SVGID_3_" d="M998.6,570.6l-332.9,333l332.9,333H618.2l-333-333l333-333H998.6z M618.2,0L0,618.2l190.2,190.2L998.6,0 C998.6,0,618.2,0,618.2,0z"/></defs><use xlink:href="#SVGID_3_"  style="overflow:visible;fill:#9BCA3D;"/><clipPath id="SVGID_4_"><use xlink:href="#SVGID_3_"  style="overflow:visible;"/></clipPath><path class="st2" d="M618.2,0h380.4L190.2,808.5L0,618.2L618.2,0z"/></g><path class="st3" d="M998.6,570.6l-332.9,333l332.9,333H618.2l-333-333l333-333H998.6z M618.2,0L0,618.2l190.2,190.2L998.6,0 C998.6,0,618.2,0,618.2,0z"/><path class="st4" d="M475.5,1093.9l142.7,142.6h380.4L665.8,903.6L475.5,1093.9z"/></g></svg>'
                            ],
                            'Firebase' => ['type'=>'img','src'=>'https://www.vectorlogo.zone/logos/firebase/firebase-icon.svg'],
                            'Laravel' => ['type'=>'fa','class'=>'fab fa-laravel'],
                            'MySQL' => ['type'=>'img','src'=>'https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg'],
                            'C' => ['type'=>'svg','svg'=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64"><rect width="64" height="64" rx="8" fill="#0072C6"/><text x="32" y="40" font-family="Arial,Helvetica,sans-serif" font-size="28" fill="white" font-weight="700" text-anchor="middle">C</text></svg>'],
                            'C++' => ['type'=>'svg','svg'=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64"><rect width="64" height="64" rx="8" fill="#8A2BE2"/><text x="32" y="36" font-family="Arial,Helvetica,sans-serif" font-size="20" fill="white" font-weight="700" text-anchor="middle">C++</text></svg>'],
                            'Kotlin' => ['type'=>'img','src'=>'https://cdn.worldvectorlogo.com/logos/kotlin-1.svg'],
                            'Rest API' => ['type'=>'fa','class'=>'fas fa-network-wired'],
                            'PHP' => ['type'=>'fa','class'=>'fab fa-php'],
                            'HTML' => ['type'=>'fa','class'=>'fab fa-html5'],
                            'CSS' => ['type'=>'fa','class'=>'fab fa-css3-alt'],
                            'JavaScript' => ['type'=>'fa','class'=>'fab fa-js'],
                            'Java' => ['type'=>'fa','class'=>'fab fa-java'],
                            'Vue' => ['type'=>'fa','class'=>'fab fa-vuejs'],
                            'React.js' => ['type'=>'fa','class'=>'fab fa-react'],
                        ];
                    @endphp

                    @foreach($techStack as $tech)
                    @php
                        $name = $tech['name'];
                        $pct = $tech['percent'];
                        $meta = $techLogos[$name] ?? null;
                    @endphp
                    <div class="stack-item" title="{{ $name }}" style="--pct: {{ $pct }}%;">
                        <div class="stack-logo">
                            @if($meta && $meta['type']==='fa')
                                <i class="{{ $meta['class'] }}" aria-hidden="true"></i>
                            @elseif($meta && $meta['type']==='svg')
                                {!! $meta['svg'] !!}
                            @elseif($meta && $meta['type']==='img')
                                <img src="{{ $meta['src'] }}" alt="{{ $name }} logo" loading="lazy" />
                            @else
                                <span class="stack-initials">{{ strtoupper(substr($name,0,2)) }}</span>
                            @endif
                        </div>
                        <div class="stack-label">{{ $name }}</div>
                        <div class="stack-overlay" aria-hidden="true">
                            <div class="progress-bar">
                                <div class="progress-bar-inner" style="width:0%"></div>
                            </div>
                            <div class="progress-percent">0%</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="stack-column">
                <h3 class="stack-heading"><i class="fas fa-palette heading-icon" aria-hidden="true"></i> Design</h3>
                <div class="stack-items">
                    @php
                        $designLogos = [
                            'Adobe Illustrator' => ['type'=>'img','src'=>'https://upload.wikimedia.org/wikipedia/commons/f/fb/Adobe_Illustrator_CC_icon.svg'],
                            'Adobe Photoshop' => ['type'=>'img','src'=>'https://upload.wikimedia.org/wikipedia/commons/a/af/Adobe_Photoshop_CC_icon.svg'],
                            'Canva' => ['type'=>'img','src'=>'https://cdn.brandfetch.io/id9mVQlyB1/theme/dark/logo.svg?c=1bxid64Mup7aczewSAYMX&t=1725863496299'],
                            'Framer' => ['type'=>'img','src'=>'https://cdn.brandfetch.io/idCeIE9B96/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1667565216026'],
                            'Figma' => ['type'=>'img','src'=>'https://cdn.brandfetch.io/idZHcZ_i7F/theme/dark/symbol.svg?c=1bxid64Mup7aczewSAYMX&t=1729268241679https://s3-figma-hubfile-images-production.figma.com/hub/file/carousel/img/b8d00b2e389e3a38f115ea00f7dc3dff3ef4f337/dbc32aa496f21ffa8508a4f6432d1e6c6f76e3b1'],
                        ];
                    @endphp

                    @foreach($designStack as $tool)
                    @php
                        $name = $tool['name'];
                        $pct = $tool['percent'];
                        $meta = $designLogos[$name] ?? null;
                    @endphp
                    <div class="stack-item" title="{{ $name }}" style="--pct: {{ $pct }}%;">
                        <div class="stack-logo">
                            @if($meta && $meta['type']==='img')
                                <img src="{{ $meta['src'] }}" alt="{{ $name }} logo" loading="lazy" />
                            @else
                                <span class="stack-initials">{{ strtoupper(substr($name,0,2)) }}</span>
                            @endif
                        </div>
                        <div class="stack-label">{{ $name }}</div>
                        <div class="stack-overlay" aria-hidden="true">
                            <div class="progress-bar">
                                <div class="progress-bar-inner" style="width:0%"></div>
                            </div>
                            <div class="progress-percent">0%</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects" id="projects">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">My Work</span>
            <h2 class="section-title">Featured Projects</h2>
        </div>

        <!-- Project Filter Navigation -->
        <div class="project-filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="app">App Dev.</button>
            <button class="filter-btn" data-filter="web">Web Dev.</button>
            <button class="filter-btn" data-filter="software">Software Dev.</button>
            <button class="filter-btn" data-filter="iot">IoT</button>
        </div>

        @php
            $demoMap = [];
            $demoJsonPath = public_path('img/projects/previews/demos.json');
            if (file_exists($demoJsonPath)) {
                try {
                    $demoMap = json_decode(file_get_contents($demoJsonPath), true) ?? [];
                } catch (\Exception $e) {
                    $demoMap = [];
                }
            }
        @endphp

        <div class="projects-grid" role="region" aria-label="Featured projects">
            <!-- ExamLock -->
            <div class="project-card clickable" data-categories="app,web" data-demo-url="{{ $demoMap['examlock'] ?? '#' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/examlock.png')) ? asset('img/projects/previews/examlock.png') : asset('img/projects/examlock.jpg') }}" alt="ExamLock Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="badge badge-app">App</span>
                        <span class="badge badge-web">Web</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">ExamLock</h3>
                    <p class="project-description">A powerful system that detects cheating during exams by locking the exam interface.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">Firebase</span>
                    </div>
                </div>
            </div>

            <!-- HitchMe -->
            <div class="project-card clickable" data-categories="app,web" data-demo-url="{{ $demoMap['hitchme'] ?? '#' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/hitchme.png')) ? asset('img/projects/previews/hitchme.png') : asset('img/projects/hitchme.jpg') }}" alt="HitchMe Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="badge badge-app">App</span>
                        <span class="badge badge-web">Web</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">HitchMe</h3>
                    <p class="project-description">A student-driven community app that lets students hitch rides with others.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">Mapbox</span>
                    </div>
                </div>
            </div>

            <!-- BH Finder -->
            <div class="project-card clickable" data-category="web" data-demo-url="{{ $demoMap['bhfinder'] ?? '#' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/bhfinder.png')) ? asset('img/projects/previews/bhfinder.png') : asset('img/projects/bhfinder.jpg') }}" alt="BH Finder Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">Web App</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">BH Finder</h3>
                    <p class="project-description">Helps the community find suitable boarding homes with search filters.</p>
                    <div class="project-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- ComicZ -->
            <div class="project-card clickable" data-categories="app,web" data-demo-url="{{ $demoMap['comicz'] ?? '#' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/comicz.png')) ? asset('img/projects/previews/comicz.png') : asset('img/projects/comicz.jpg') }}" alt="ComicZ Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="badge badge-app">App</span>
                        <span class="badge badge-web">Web</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">ComicZ</h3>
                    <p class="project-description">An Android manga-reading app using web scraping with multiple servers.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">REST API</span>
                    </div>
                </div>
            </div>

            <!-- FrameIt -->
            <div class="project-card clickable" data-category="web" data-demo-url="{{ $demoMap['frameit'] ?? 'https://frameit-here.netlify.app/' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/frameit.png')) ? asset('img/projects/previews/frameit.png') : asset('img/projects/frameit.jpg') }}" alt="FrameIt Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">Web App</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">FrameIt</h3>
                    <p class="project-description">An easy image framing tool that simplifies creating shareable framed images.</p>
                    <div class="project-tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">REST API</span>
                    </div>
                </div>
            </div>

            <!-- Comelec iVOTE System -->
            <div class="project-card clickable" data-categories="app,web" data-demo-url="{{ $demoMap['ivote'] ?? '#' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/ivote.png')) ? asset('img/projects/previews/ivote.png') : asset('img/projects/ivote.jpg') }}" alt="iVOTE Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="badge badge-app">App</span>
                        <span class="badge badge-web">Web</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Comelec iVOTE System</h3>
                    <p class="project-description">An Android app for CTU students to vote for SSG leaders.</p>
                    <div class="project-tags">
                        <span class="tag">Kotlin</span>
                        <span class="tag">Firebase</span>
                    </div>
                </div>
            </div>

            <!-- StudyBuddy -->
            <div class="project-card clickable" data-category="web" data-demo-url="{{ $demoMap['studybuddy'] ?? '#' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/studybuddy.png')) ? asset('img/projects/previews/studybuddy.png') : asset('img/projects/studybuddy.jpg') }}" alt="StudyBuddy Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">Web App</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">StudyBuddy</h3>
                    <p class="project-description">A web app using Gemini API to help students study through Q&A exercises.</p>
                    <div class="project-tags">
                        <span class="tag">JavaScript</span>
                        <span class="tag">REST API</span>
                    </div>
                </div>
            </div>

            <!-- Motorpool Inventory System -->
            <div class="project-card clickable" data-categories="app,web" data-demo-url="{{ $demoMap['motorpool'] ?? '#' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/motorpool.png')) ? asset('img/projects/previews/motorpool.png') : asset('img/projects/motorpool.jpg') }}" alt="Motorpool Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="badge badge-app">App</span>
                        <span class="badge badge-web">Web</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Motorpool Inventory System</h3>
                    <p class="project-description">An inventory management system for company vehicle fleets.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">Firebase</span>
                    </div>
                </div>
            </div>

            <!-- PigFeeder -->
            <div class="project-card" data-category="iot">
                <div class="project-image">
                    <img src="{{ asset('img/projects/pigfeeder.jpg') }}" alt="PigFeeder Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">IoT</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">PigFeeder</h3>
                    <p class="project-description">IoT project with automatic scheduling system for remote feeding tasks.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">C++</span>
                    </div>
                </div>
            </div>

            <!-- PetInc -->
            <div class="project-card" data-category="iot">
                <div class="project-image">
                    <img src="{{ asset('img/projects/petinc.jpg') }}" alt="PetInc Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">IoT</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">PetInc</h3>
                    <p class="project-description">IoT project for pet incubation with automatic offline mode and solar panel.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">C++</span>
                    </div>
                </div>
            </div>

            <!-- Dental Care -->
            <div class="project-card" data-category="app">
                <div class="project-image">
                    <img src="{{ asset('img/projects/dental.jpg') }}" alt="Dental Care Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">Mobile App</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Dental Care</h3>
                    <p class="project-description">Dental practice management system with tooth notation feature.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">Firebase</span>
                    </div>
                </div>
            </div>

            <!-- OnSite -->
            <div class="project-card" data-category="app">
                <div class="project-image">
                    <img src="{{ asset('img/projects/onsite.jpg') }}" alt="OnSite Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">Mobile App</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">OnSite</h3>
                    <p class="project-description">Engineering ERP app for project management, attendance, and inventory.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">Firebase</span>
                    </div>
                </div>
            </div>

            <!-- OnSite AI -->
            <div class="project-card" data-category="app">
                <div class="project-image">
                    <img src="{{ asset('img/projects/onsite-ai.jpg') }}" alt="OnSite AI Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">Mobile App</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">OnSite AI</h3>
                    <p class="project-description">AI-integrated app using Gemini for generating answers and images.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">REST API</span>
                    </div>
                </div>
            </div>

            <!-- OnSite Messenger -->
            <div class="project-card" data-category="app">
                <div class="project-image">
                    <img src="{{ asset('img/projects/onsite-messenger.jpg') }}" alt="OnSite Messenger Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">Mobile App</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">OnSite Messenger</h3>
                    <p class="project-description">Messenger app with built-in AI and mention features for communication.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">REST API</span>
                    </div>
                </div>
            </div>

            <!-- LiamLandingPage -->
            <div class="project-card clickable" data-category="web" data-demo-url="{{ $demoMap['liam'] ?? '#' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/liam.png')) ? asset('img/projects/previews/liam.png') : asset('img/projects/liam.jpg') }}" alt="Liam Landing Page Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">Web Design</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">LiamLandingPage</h3>
                    <p class="project-description">A recently created landing page built for a client.</p>
                    <div class="project-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">JS</span>
                    </div>
                </div>
            </div>

            <!-- DeathBlock -->
            <div class="project-card clickable" data-category="web" data-demo-url="{{ $demoMap['deathblock'] ?? '#' }}">
                <div class="project-image">
                    <img src="{{ file_exists(public_path('img/projects/previews/deathblock.png')) ? asset('img/projects/previews/deathblock.png') : asset('img/projects/deathblock.jpg') }}" alt="DeathBlock Project" loading="lazy">
                    <div class="project-overlay">
                        <span class="project-type">Web App</span>
                        <span class="demo-badge">Live Demo</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">DeathBlock</h3>
                    <p class="project-description">A cemetery management system for managing chambers and niches.</p>
                    <div class="project-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section removed per request -->

@endsection
