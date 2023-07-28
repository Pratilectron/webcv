<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>Anas Taieb</title>
    <!-- <base href="/"> -->
    <link type="image/x-icon" rel="icon" href="img/favicon.ico" />

    <!-- CSS of the intro -->
    <link rel="stylesheet" href="css/initial_Logo.css">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css" type="text/css">

    <!-- CSS for the radio elements -->
    <link rel="stylesheet" href="css/radio.css">

    <!-- JS for ScrollRevealjs -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- EmailJS -->
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>

</head>

<body>
    <!-- DIV of the intro -->
    <div class="overlay" id="overlay1">
        <!-- <img src="img/n.png" class="center-image" /> -->
    </div>

    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav-logo"><img src="img/p-circular.png" alt="About" style="width: 44px; margin:0;"></a>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list grid">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active-link">
                            <i class="fas fa-home nav-link-icon"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">
                            <i class="fas fa-id-card-alt nav-link-icon"></i> About
                        </a>
                    </li>                  
                    <li class="nav-item">
                        <a href="#skills" class="nav-link">
                            <i class="fas fa-trophy nav-link-icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#qualification" class="nav-link">
                            <i class="fas fa-user-graduate nav-link-icon"></i> Qualifications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">
                            <i class="fas fa-briefcase nav-link-icon"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">
                            <i class="fas fa-envelope nav-link-icon"></i> Contact
                        </a>
                    </li>
                </ul>
                <i class="fas fa-times nav-close" id="nav-close"></i>
            </div>
            <div class="nav-btns">

                <!-- Theme change button -->
                <i class="fas fa-lightbulb change-theme" id="theme-button"></i>

                <div class="nav-toggle" id="nav-toggle">
                    <i class="fas fa-qrcode"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main class="main">
        <!-- HOME -->
        <section class="home section" id="home">
            <div class="home-container container grid">
                <div class="home-content grid">
                    <div class="home-social">
                        <a href="https://www.linkedin.com/in/anastaieb/" target="_blank" class="home-social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <div class="home-img">
                        <svg class="home-blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home-blob-img" x='12' y='18' xlink:href="img/n_inv.png" />
                            </g>
                        </svg>
                    </div>
                    <div class="home-data">
                        <h1 class="home-data-title">Anas Taieb</h1>
                        <h3 class="home-data-subtitle">Software & Web Developer</h3>
                        <p class="home-data-description">Crafting ingenious, high-quality work.</p>
                        <a href="#contact" class="button button-flex">
                            Express Interest <i class="fab fa-telegram-plane button-icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home-scroll">
                    <a href="#about" class="home-scroll-button button-flex">
                        <span class="home-scroll-button-name">Scroll down</span>
                        <i class="fas fa-arrow-down home-scroll-button-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about section" id="about">
            <h2 class="section-title">About Me</h2>
            <span class="section-subtitle"><i>Small-ish introduction</span>

            <div class="about-container container grid">
                <div class="about-container-img">
                    <img src="img/p-circular.png" alt="About" class="about-container-imgAlt">
                </div>

                <div class="about-container-data">
                    <p class="about-container-data-description">As a highly driven and accomplished developer, I consistently strive to surpass my own abilities and achieve mastery in various platforms. My expertise in analyzing and developing complex solutions sets me apart, allowing me to tackle challenges head-on with confidence and creativity. Alongside technical prowess, I possess exceptional communication and collaboration skills, fostering seamless teamwork and productive partnerships within the organization. I am dedicated to continuous learning and growth, always seeking opportunities to push the boundaries of what I can achieve.</p></i>

                    <div class="about-container-data-info">
                        <div>
                            <span class="about-container-data-info-title">05+</span>
                            <span class="about-container-data-name">Years <br> experience</span>
                        </div>
                        <div>
                            <span class="about-container-data-info-title">10+</span>
                            <span class="about-container-data-name">Completed <br> project</span>
                        </div>
                        <div>
                            <span class="about-container-data-info-title">05+</span>
                            <span class="about-container-data-name">Companies <br> worked</span>
                        </div>
                    </div>


                    <div class="about-buttons">
                
                        <!-- CV selection -->

                        <div class="container">

                            <a class="button button-flex" id="generateBtn">
                                Download CV
                            </a>

                            <div id="radioContainer"></div>

                            <a id="downloadBtn" class="button button-flex" style="display: none;">
                                Download CV
                                <i class="fas fa-download button-icon"></i>
                            </a>
                        </div>

                        <!-- ****** -->
                    </div>
                  
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>
            <span class="section-subtitle"><i>My Technical Prowess: A Multi-Dimensional Skill Set</i></span>

            <div class="skills-container container grid">
                <div>
                    <!-- SKILLS 1 -->
                    <div class="skills-container-content skills-open">

                        <div class="skills-container-header">
                            <i class="fas fa-code skills-icon"></i>
                            <div>
                                <h1 class="skills-title">Web Developer</h1>
                                <span class="skills-subtitle">More than 5 years</span>
                            </div>
                            <i class="fas fa-angle-down skills-arrow"></i>
                        </div>

                        <div class="skills-list grid">

                            <!-- 1 -->
                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Front-End: HTML, CSS, JavaScript</h3>
                                    <span class="skills-number">90%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-html"></span>
                                </div>
                            </div>

                             <!-- 2 -->
                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Back-End: PHP, Java Enterprise Edition (J2EE)</h3>
                                    <span class="skills-number">75%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-css"></span>
                                </div>
                            </div>

                             <!-- 3 -->
                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Frameworks: Vue.js, Laravel</h3>
                                    <span class="skills-number">60%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-js"></span>
                                </div>
                            </div>

                             <!-- 4 -->
                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Cross-Platform Desktop Apps: Electron, Neutralino, NativeFier</h3>
                                    <span class="skills-number">80%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-react"></span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- SKILLS 2 -->
                    <div class="skills-container-content skills-close">

                        <div class="skills-container-header">
                            <i class="fas fa-mobile-alt skills-icon"></i>
                            <div>
                                <h1 class="skills-title">Mobile App Development</h1>
                                <span class="skills-subtitle">More than 3 years</span>
                            </div>
                            <i class="fas fa-angle-down skills-arrow"></i>
                        </div>

                        <div class="skills-list grid">

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Cross-Platform: Flutter <br>(Androis & iOS)</h3>
                                    <span class="skills-number">75%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-php"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Native: Java (Android)</h3>
                                    <span class="skills-number">60%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-node"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">XAML C# (Android & iOS)</h3>
                                    <span class="skills-number">50%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-xaml"></span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div>
                    <!-- SKILLS 3 -->
                    <div class="skills-container-content skills-close">

                        <div class="skills-container-header">
                            <i class="fas fa-desktop skills-icon"></i>
                            <div>
                                <h1 class="skills-title">Software Development</h1>
                                <span class="skills-subtitle">More than 5 years</span>
                            </div>
                            <i class="fas fa-angle-down skills-arrow"></i>
                        </div>

                        <div class="skills-list grid">

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">.NET: VB.NET, C#</h3>
                                    <span class="skills-number">95%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-net"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">C/C++</h3>
                                    <span class="skills-number">75%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-c"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Java</h3>
                                    <span class="skills-number">75%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-java"></span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- SKILLS 4 -->
                    <div class="skills-container-content skills-close">

                        <div class="skills-container-header">
                            <i class="fas fa-server skills-icon"></i>
                            <div>
                                <h1 class="skills-title">Database Management</h1>
                                <span class="skills-subtitle">More than 4 years</span>
                            </div>
                            <i class="fas fa-angle-down skills-arrow"></i>
                        </div>

                        <div class="skills-list grid">

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">MySQL</h3>
                                    <span class="skills-number">90%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-mydb"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">SQL Server</h3>
                                    <span class="skills-number">75%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-ssdb"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">SQLite</h3>
                                    <span class="skills-number">85%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-sldb"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">SXQL</h3>
                                    <span class="skills-number">60%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-sxdb"></span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div>
                    <!-- SKILLS 5 -->
                    <div class="skills-container-content skills-close">

                        <div class="skills-container-header">
                            <i class="fas fa-spray-can skills-icon"></i>
                            <div>
                                <h1 class="skills-title" >Graphic Design - Media </h1>
                                <span class="skills-subtitle">More than 6 years</span>
                            </div>
                            <i class="fas fa-angle-down skills-arrow"></i>
                        </div>

                        <div class="skills-list grid">

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Adobe Photoshop</h3>
                                    <span class="skills-number">65%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-ps"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Adobe Lightroom</h3>
                                    <span class="skills-number">80%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-ltr"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Adobe Spark</h3>
                                    <span class="skills-number">85%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-spark"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Photoscape</h3>
                                    <span class="skills-number">90%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-scape"></span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div>
                    <!-- SKILLS 6 -->
                    <div class="skills-container-content skills-close">

                        <div class="skills-container-header" style="text-align: center;">
                            <i class="fab fa-searchengin skills-icon"></i>
                            <div>
                                <h1 class="skills-title" >Search Engine Optimization (SEO) </h1>
                                <span class="skills-subtitle">More than 3 years</span>
                            </div>
                            <i class="fas fa-angle-down skills-arrow"></i>
                        </div>

                        <div class="skills-list grid">

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">On-Page Optimization</h3>
                                    <span class="skills-number">85%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-op"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Keyword Research</h3>
                                    <span class="skills-number">85%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-key"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Content Strategy</h3>
                                    <span class="skills-number">75%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-cs"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">Link Building</h3>
                                    <span class="skills-number">70%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-lb"></span>
                                </div>
                            </div>

                            <div class="skills-data">
                                <div class="skills-titles">
                                    <h3 class="skills-name">SEO Analytics</h3>
                                    <span class="skills-number">90%</span>
                                </div>
                                <div class="skills-bar">
                                    <span class="skills-percentage skills-sa"></span>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
                
            </div>


           
        </section>

        <!-- QUALIFICATION -->
        <section class="qualification section" id="qualification">
            <h2 class="section-title">Qualifications</h2>

            <!-- ITAAAAAAAAAAAAAALLLLLIIIIIIIIIIIC START --> <i>

                <span class="section-subtitle"> Chronicles of a Tech Enthusiast</span>

            <div class="qualification-container container">
                <div class="qualification-tabs">
                    <div class="qualification-tabs-button button-flex qualification-active" data-target="#education">
                        <i class="fas fa-graduation-cap qualification-icon"></i>
                        Education
                    </div>
                    <div class="qualification-tabs-button button-flex" data-target="#work">
                        <i class="fas fa-briefcase qualification-icon"></i>
                        Work
                    </div>
                </div>
                <div class="qualification-sections">
                    <!-- QUALIFICATION CONTENT 1 -->
                    <div class="qualification-content  qualification-active" data-content id="education">
                        <!-- QUALIFICATION 1 -->
                        <div class="qualification-data">
                            <div class="qualification-data-alt">
                                <h3 class="qualification-title"> ▪ Bachelor in Computer Science</h3>
                                <span class="qualification-subtitle">French Higher School of Technical Education</span>
                                <div class="qualification-calendar">
                                    <i class="fas fa-calendar-alt"></i>
                                    2018 - 2019
                                </div>
                            </div>
                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>
                        </div>
                        <!-- QUALIFICATION 2 -->
                        <div class="qualification-data">
                            <div></div>

                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>

                            <div class="qualification-data-alt">
                                <h3 class="qualification-title"> ▪ Superior IT development</h3>
                                <span class="qualification-subtitle">French Higher School of Technical Education</span>
                                <div class="qualification-calendar">
                                    <i class="fas fa-calendar-alt"></i>
                                    2016 - 2018
                                </div>
                            </div>
                        </div>
                        <!-- QUALIFICATION 3 -->
                        <div class="qualification-data">
                            <div class="qualification-data-alt">
                                <h3 class="qualification-title">▪ Baccalaureate (Physics)</h3>
                                <span class="qualification-subtitle">Akhawayn</span>
                                <div class="qualification-calendar">
                                    <i class="fas fa-calendar-alt"></i>
                                    2015 - 2016
                                </div>
                            </div>
                            <div>
                                <span class="qualification-rounder"></span>
                            </div>
                        </div>
                    </div>

                    <!-- QUALIFICATION CONTENT 2 -->
                    <div class="qualification-content" data-content id="work">
                        <!-- QUALIFICATION 1 -->
                        <div class="qualification-data">
                            <div class="qualification-data-alt">
                                <h3 class="qualification-title">  ▪  Full-Stack <br> Web Developer</h3>
                                <span class="qualification-subtitle">KaShop.ma • <br> Agadir (Self-Employed)</span>
                                <div class="qualification-calendar">
                                    <i class="fas fa-calendar-alt"></i>
                                    2022
                                </div>
                            </div>
                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>
                        </div>
                        <!-- QUALIFICATION 2 -->
                        <div class="qualification-data">
                            <div></div>

                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>

                            <div class="qualification-data-alt">
                                <h3 class="qualification-title">  ▪  Full-Stack <br> Web Developer</h3>
                                <span class="qualification-subtitle">Dencens Cosmetics, <br> Agadir (Self-Employed)</span>
                                <div class="qualification-calendar">
                                    <i class="fas fa-calendar-alt"></i>
                                    2022
                                </div>
                            </div>
                        </div>
                        <!-- QUALIFICATION 3 -->
                        <div class="qualification-data">
                            <div class="qualification-data-alt">
                                <h3 class="qualification-title"> ▪ Integrated <br> Multi-Platform Developer</h3>
                                <span class="qualification-subtitle">Overture Online , Remote</span>
                                <div class="qualification-calendar">
                                    <i class="fas fa-calendar-alt"></i>
                                    2019 - 2023
                                </div>
                            </div>
                            <div>
                                <span class="qualification-rounder"></span>
                                 <span class="qualification-line"></span> 
                            </div>
                        </div>
                          <!-- QUALIFICATION 4 -->
                          <div class="qualification-data">
                            <div></div>

                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>

                            <div class="qualification-data-alt">
                                <h3 class="qualification-title"> ▪ Software Developer</h3>
                                <span class="qualification-subtitle">Professiona Technique , Agadir (Self-Employed)</span>
                                <div class="qualification-calendar">
                                    <i class="fas fa-calendar-alt"></i>
                                    2020
                                </div>
                            </div>
                        </div>
                        <!-- QUALIFICATION 5 -->
                        <div class="qualification-data">
                            <div class="qualification-data-alt">
                                <h3 class="qualification-title"> ▪ Software Developer</h3>
                                <span class="qualification-subtitle">SMDTT (Moroccan Company for the Development of Tourist Transport - Agadir)</span>
                                <div class="qualification-calendar">
                                    <i class="fas fa-calendar-alt"></i>
                                    2018
                                </div>
                            </div>
                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>
                        </div>

                        <!-- QUALIFICATION 6 -->
                        <div class="qualification-data">
                            <div></div>

                            <div>
                                <span class="qualification-rounder"></span>
                                <!-- <span class="qualification-line"></span> -->
                            </div>

                            <div class="qualification-data-alt">
                                <h3 class="qualification-title">  ▪  Full-Stack <br> Cross-Platform <br>Mobile & Web Developer</h3>
                                <span class="qualification-subtitle">ONCF (Railways National Office - Rabat Agdal)</span>
                                <div class="qualification-calendar">
                                    <i class="fas fa-calendar-alt"></i>
                                    2017
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ITAAAAAAAAAAAAAALLLLLIIIIIIIIIIIC END --> </i>

        <!-- SERVICES -->
        <section class="services section" id="services">
            <h2 class="section-title">Services</h2>
            <span class="section-subtitle"><i>Crafting with Care: Tailored Development Solutions That Set Me Apart</i></span>

            <div class="services-container container grid">
                <!-- SERVICES 1 -->
                <div class="services-content">
                    <div >
                        <i class="fas fa-laptop-code services-icon"></i>
                        <h3 class="services-title">Web Developer</h3>
                    </div>

                    <span class="button button-flex button-small button-link services-button">
                        View More
                        <i class="fas fa-arrow-right button-icon"></i>
                    </span>

                    <div class="services-modal">
                        <div class="services-modal-content">
                            <div align="center">
                                <h4 class="services-modal-title">Web Developer</h4>
                            </div>
                            <i class="fas fa-times services-modal-close"></i>

                            <div class="services-modal-services grid">
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>Front-End: Proficient in HTML, CSS, and JavaScript, I create captivating user interfaces that enhance user experiences.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>Back-End: With expertise in PHP and Java Enterprise Edition (J2EE), I build robust and scalable web applications.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>Frameworks: Experienced in working with Vue.js and Laravel, I use powerful frameworks to accelerate development processes..</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>Cross-Platform Desktop Apps: Utilizing Electron, Neutralino, and NativeFier, I craft desktop applications that run seamlessly on multiple platforms.</p>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SERVICES 2 -->
                <div class="services-content">
                    <div>
                        <i class="fas fa-mobile-alt services-icon"></i>                        
                        <h3 class="services-title">Mobile App Development</h3>
                    </div>

                    <span class="button button-flex button-small button-link services-button">
                        View More
                        <i class="fas fa-arrow-right button-icon"></i>
                    </span>

                    <div class="services-modal">
                        <div class="services-modal-content">
                            <div align="center">
                                <h4 class="services-modal-title">Mobile App Development</h4>
                            </div>
                            <i class="fas fa-times services-modal-close"></i>

                            <div class="services-modal-services grid">
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>Cross-Platform: Using Flutter, I develop cross-platform mobile apps that ensure a consistent user experience on Android and iOS devices.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>Native: Proficient in Xamarin and XAML C#, I create native mobile apps for both Android and iOS platforms, maximizing performance and functionality.</p>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SERVICES 3 -->
                <div class="services-content">
                    <div>
                        <i class="fas fas fa-desktop services-icon"></i>
                        <h3 class="services-title">Desktop Software Development</h3>
                    </div>
                
                    <span class="button button-flex button-small button-link services-button">
                        View More
                        <i class="fas fa-arrow-right button-icon"></i>
                    </span>
                
                    <div class="services-modal">
                        <div class="services-modal-content">
                            <div align="center">
                                <h4 class="services-modal-title">Desktop Software Development</h4>
                            </div>
                            <i class="fas fa-times services-modal-close"></i>
                
                            <div class="services-modal-services grid">
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>.NET: Skilled in VB.NET and C#, I design desktop applications that cater to specific business
                                        needs and integrate seamlessly with existing systems.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>C/C++: I leverage the power of C/C++ to develop efficient and high-performance desktop software.
                                    </p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>Java: With expertise in Java, I build desktop applications with platform independence and rich
                                        features.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>Flutter (Experimental): While Flutter is primarily known for mobile app development, <br> I'm
                                        also exploring its potential for desktop platforms like Windows, macOS, and Linux. <br> Please
                                        note that support for Flutter on desktop is still experimental, and the extent of functionality
                                        may be limited compared to mobile development. <br> If you have a specific project idea in mind,
                                        let's discuss its feasibility and the best approach to bring it to life.</p>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SERVICES 4 -->
                <div class="services-content">
                    <div>
                        <i class="fas fas fa-database services-icon"></i>
                        <h3 class="services-title">Database Management</h3>
                    </div>
                
                    <span class="button button-flex button-small button-link services-button">
                        View More
                        <i class="fas fa-arrow-right button-icon"></i>
                    </span>
                
                    <div class="services-modal">
                        <div class="services-modal-content">
                            <div align="center">
                                <h4 class="services-modal-title">Database Management</h4>
                            </div>
                            <i class="fas fa-times services-modal-close"></i>
                
                            <div class="services-modal-services grid">
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>MySQL: As a database management expert, I design and optimize MySQL databases to handle complex data structures efficiently.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>SQL Server: Proficient in SQL Server, I ensure secure and reliable data storage and retrieval for enterprise-level applications.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>SQLite: With expertise in SQLite, I develop lightweight databases ideal for mobile and desktop applications.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-terminal services-modal-icon"></i>
                                    <p>SXQL: Skilled in SXQL, I create efficient and specialized databases tailored to specific project requirements.</p>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SERVICES 5 -->
                <div class="services-content">
                    <div>
                        <i class="fas fab fa-connectdevelop services-icon"></i>
                        <h3 class="services-title">Graphic Design & Media Production</h3>
                    </div>
                
                    <span class="button button-flex button-small button-link services-button">
                        View More
                        <i class="fas fa-arrow-right button-icon"></i>
                    </span>
                
                    <div class="services-modal">
                        <div class="services-modal-content">
                            <div align="center">
                                <h4 class="services-modal-title">Graphic Design & Media Production</h4>
                            </div>
                            <i class="fas fa-times services-modal-close"></i>
                
                            <div class="services-modal-services grid">
                                <li class="services-modal-service">
                                    <i class="fas fa-layer-group services-modal-icon"></i>
                                    <p>Adobe Photoshop: Using Adobe Photoshop, I design eye-catching graphics and illustrations that elevate brands and captivate audiences.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-layer-group services-modal-icon"></i>
                                    <p>Adobe Lightroom: Proficient in Adobe Lightroom, I enhance and edit images to create stunning visual content.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-layer-group services-modal-icon"></i>
                                    <p>Adobe Spark: I utilize Adobe Spark to craft engaging social media graphics and videos that drive user engagement.</p>
                                </li>
                                <li class="services-modal-service">
                                    <i class="fas fa-layer-group services-modal-icon"></i>
                                    <p>Photoscape: With expertise in Photoscape, I design and edit images to align with brand identities and marketing campaigns.</p>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO -->
        <!-- 
            <section class="portfolio section" id="portfolio">
            <h2 class="section-title">Portfolio</h2>
            <span class="section-subtitle">Most recent work</span>

            <div class="portfolio-container container swiper-container">
                <div class="swiper-wrapper">
                    PORTFOLIO 1
                    <div class="portfolio-content grid swiper-slide">
                        <img src="img/portfolio1.jpg" alt="Portfolio" class="portfolio-img">
                        <div class="portfolio-data">
                            <h3 class="portfolio-title">Modern Website</h3>
                            <p class="portfolio-description">Website adaptable to all devices, with ui components and
                                animated interactions.</p>
                            <a href="#" class="button button-flex button-small portfolio-button">
                                Demo <i class="fas fa-arrow-right button-icon"></i>
                            </a>
                        </div>
                    </div>
                    PORTFOLIO 2
                    <div class="portfolio-content grid swiper-slide">
                        <img src="img/portfolio2.jpg" alt="Portfolio" class="portfolio-img">
                        <div class="portfolio-data">
                            <h3 class="portfolio-title">Brand Design</h3>
                            <p class="portfolio-description">Website adaptable to all devices, with ui components and
                                animated interactions.</p>
                            <a href="#" class="button button-flex button-small portfolio-button">
                                Demo <i class="fas fa-arrow-right button-icon"></i>
                            </a>
                        </div>
                    </div>
                    PORTFOLIO 3
                    <div class="portfolio-content grid swiper-slide">
                        <img src="img/portfolio3.jpg" alt="Portfolio" class="portfolio-img">
                        <div class="portfolio-data">
                            <h3 class="portfolio-title">Online Store</h3>
                            <p class="portfolio-description">Website adaptable to all devices, with ui components and
                                animated interactions.</p>
                            <a href="#" class="button button-flex button-small portfolio-button">
                                Demo <i class="fas fa-arrow-right button-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                Add Arrow
                <div class="swiper-button-next">
                    <i class="fas fa-angle-right swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fas fa-angle-left swiper-portfolio-icon"></i>
                </div>
                Add Pagination
                <div class="swiper-pagination"></div>
            </div>
        </section> 
        -->

        <!-- PROJECT IN MIND -->
        <section class="project section" id="project" onshown="startBounce()">
            <div class="project-bg">
                <div class="project-container container grid">
                    <div class="project-data">
                        <h2 class="project-bg-title">Do You Have the Next Big Idea? <br>Let's Make It Happen Together!</h2>
                        <!-- <p class="project-bg-description">Contact me now </p> -->
                        <a href="#contact" class="button button-flex button-white">
                            Request Your Consultation Now!
                            <i class="fab fa-telegram-plane project-icon button-icon"></i>
                        </a>
                    </div>
                    
                    <div class="image-container" >
                        <img src="img/n_inv.png" alt="Project img" class="project-bg-img">
                      </div>
                </div>
            </div>
        </section>

        <!-- CONTACT ME -->
        <section class="contact section" id="contact">
            <h2 class="section-title">Get in touch</h2>
            <span class="section-subtitle">­</span>

            <div class="contact-container container grid">
                <div class="contact-items">
                    <div class="contact-information">
                        <i class="fas fa-phone contact-icon"></i>

                        <div>
                            <h3 class="contact-title">Call Me</h3>
                            <span class="contact-subtitle"> <a class="contact-subtitle" href="tel:+2126-1997-2086">+2126-1997-2086</a></span>
                        </div>
                    </div>
                    <div class="contact-information">
                        <i class="far fa-envelope contact-icon"></i>

                        <div>
                            <h3 class="contact-title">Email</h3>
                            <span class="contact-subtitle"> <a class="contact-subtitle" href="mailto:anas.taieb@pm.me">anas.taieb@pm.me</a> </span>
                        </div>
                    </div>
                    <div class="contact-information">
                        <i class="fas fa-map-marker-alt contact-icon"></i>

                        <div>
                            <h3 class="contact-title">Location</h3>
                            <span class="contact-subtitle">Agadir, Morocco</span>
                        </div>
                    </div>
                </div>

                <form action="/.netlify/functions/contact" method="post" class="contact-form grid">
                <div class="contact-inputs grid">
                    <div class="contact-content">
                        <label for="name" class="contact-label">Name</label>
                        <input type="text" id="name" name="name" class="contact-input">
                    </div>
                    <div class="contact-content">
                        <label for="email" class="contact-label">Email</label>
                        <input type="email" id="email" name="email" class="contact-input">
                    </div>
                </div>
                <div class="grid">
                    <div class="contact-content">
                        <label for="project" class="contact-label">Project</label>
                        <input type="text" id="project" name="project" class="contact-input">
                    </div>
                    <div class="contact-content">
                        <label for="message" class="contact-label">Message</label>
                        <textarea id="message" name="message" style="resize: none;" rows="5" class="contact-input"></textarea>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="contact-button">
                    <button type="submit" class="button button-flex">
                        Submit Inquiry <i class="fab fa-telegram-plane button-icon"></i>
                    </button>
                </div>
            </form>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <section id="footer">
        <div class="footer-bg">
            <div class="footer-container container grid">
                <div class="footer-texts">
                    <h1 class="footer-title">A.T</h1>
                    <span class="footer-subtitle">Software & Web Developer</span>
                </div>

                <ul class="footer-links">
                    <li>
                        <a href="#services" class="footer-link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer-link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer-link">Contact Me</a>
                    </li>
                </ul>
                <div class="footer-socials">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="fab fa-facebook-f footer-social"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank">
                        <i class="fab fa-twitter footer-social"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="fab fa-instagram footer-social"></i>
                    </a>
                </div>
            </div>
            <p class="footer-copy">&#169; Anas Taieb. All right reserved</p>
        </div>
    </section>
    </footer>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7704de05d4.js" crossorigin="anonymous"></script>

    <!-- SWIPER JS -->
    <script src="js/swiper-bundle.js"></script>

    <!-- JS for the intro -->
    <script src="js/initial_Logo.js"></script>

    <!-- MAIN JS -->
    <script src="js/main.js"></script>

    <!-- JS for Radio buttons -->
    <script src="js/radio.js"></script>

    <!-- JS for Custom Adds -->
    <script src="js/addsOnIt.js"></script>

    <!-- JS for instantJS -->
    <script src="js/instantJS.js"></script>

   
    <!-- JS for instant.page -->
    <!-- <script src="//instant.page/5.2.0" type="module" integrity="sha384-jnZyxPjiipYXnSU0ygqeac2q7CVYMbh84q0uHVRRxEtvFPiQYbXWUorga2aqZJ0z"></script> -->
    
  <script>
    
    /*ScrollRevealJS*/
    
    // ScrollReveal configuration options
    // Custom reveal animations for scrolling down and scrolling up
    const revealDown = {
      distance: '60px',
      origin: 'top', // Animating from top to bottom when scrolling down
      beforeReveal: (domEl) => {
        domEl.style.transform = 'translateY(-70px)';
        domEl.style.opacity = 0;
      },
      afterReveal: (domEl) => {
        domEl.style.transform = 'translateY(0)';
        domEl.style.opacity = 1;
      },
      beforeReset: (domEl) => {
        domEl.style.transform = 'translateY(0)';
        domEl.style.opacity = 1;
      },
      afterReset: (domEl) => {
        domEl.style.transform = 'translateY(-70px)';
        domEl.style.opacity = 0;
      },
    };

    const revealUp = {
      distance: '60px',
      origin: 'bottom', // Animating from bottom to top when scrolling up
      beforeReveal: (domEl) => {
        domEl.style.transform = 'translateY(70px)';
        domEl.style.opacity = 0;
      },
      afterReveal: (domEl) => {
        domEl.style.transform = 'translateY(0)';
        domEl.style.opacity = 1;
      },
      beforeReset: (domEl) => {
        domEl.style.transform = 'translateY(0)';
        domEl.style.opacity = 1;
      },
      afterReset: (domEl) => {
        domEl.style.transform = 'translateY(70px)';
        domEl.style.opacity = 0;
      },
    };

    // Initialize ScrollReveal for scrolling down
    const srDown = ScrollReveal(revealDown);
    srDown.reveal('section');

    // Initialize ScrollReveal for scrolling up
    const srUp = ScrollReveal(revealUp);
    srUp.reveal('section');

  </script>
  
    <script data-id-scroll="" 
            data-autoinit="true" 
            data-duration="1" 
            data-orientation="vertical" 
            data-smoothwheel="true" 
            data-smoothtouch="false" 
            data-touchmultiplier="1.5" 
            data-easing="(t) => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t))" 
            data-useoverscroll="true" 
            data-usecontrols="true" 
            data-useanchor="true" 
            data-useraf="true" 
            data-infinite="false" 
            defer="" 
            src="https://assets.website-files.com/645e0e1ff7fdb6dc8c85f3a2/64a5544a813c7253b90f2f50_lenis-offbrand.txt">
    </script>


    <!-- SCROLL TOP -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="fas fa-arrow-up scrollup-icon"></i>
    </a>

</body>

</html>