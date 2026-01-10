<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Codez')</title>
    
    <!-- Fonts: Roboto (main) + Montserrat (subtext) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/portfolio.css">
    
<link rel="icon" href="https://iili.io/fk1esyu.png" type="image/png">
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <div class="brand">
                <a href="/" class="brand-link">
                    <img src="/img/codez-logo.svg" class="header-logo" alt="CODEZ logo">
                </a>
            </div>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#projects">Projects</a></li>
            </ul>

            <div class="nav-actions">
                <a href="https://github.com/ZheyUse" class="nav-github" target="_blank" rel="noopener" aria-label="GitHub">
                    <i class="fab fa-github" aria-hidden="true"></i>
                </a>
                <a href="https://www.facebook.com/CodezGraphicandDesign" class="nav-facebook" target="_blank" rel="noopener" aria-label="Facebook">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </a>
                <a href="https://www.behance.net/codezgfx" class="nav-behance" target="_blank" rel="noopener" aria-label="Behance">
                    <i class="fab fa-behance" aria-hidden="true"></i>
                </a>
                <a href="https://www.tiktok.com/@codezgfx" class="nav-tiktok" target="_blank" rel="noopener" aria-label="TikTok">
                    <i class="fab fa-tiktok" aria-hidden="true"></i>
                </a>
            </div>

            
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="/" class="footer-logo-link">
                        <img src="/img/codez-logo.svg" alt="CODEZ logo" class="footer-logo">
                    </a>
                    <p class="footer-desc">Codez Graphics Design & Digital Solutions</p>
                    <div class="footer-social">
                        <a href="mailto:{{ $contact['email'] ?? 'zheusleiandrecajote@gmail.com' }}" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        <a href="{{ $contact['facebook'] ?? 'https://www.facebook.com/YeboiiZhey' }}" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="https://wa.me/{{ $contact['whatsapp'] ?? '09456935658' }}" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <!-- Replace nav/contact columns with centered Go to Top button -->
                <div class="footer-actions">
                    <a href="#home" class="btn-go-top">Go To Top</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} CODEZ. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
    <script src="/js/animations.js"></script>
    <script src="/js/matrix.js"></script>
    
    @stack('scripts')
</body>
</html>
