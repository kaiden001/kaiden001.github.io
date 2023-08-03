<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ======== UNICONS ======== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- ======== SWIPER CSS ======== -->
    <link rel="stylesheet" href="">

    <!-- ======== SWIPER CSS ======== -->
    <link rel="stylesheet" href="assets/css/style.css">


    <title>Portfolio</title>
</head>

<body>

    <!-- ======== HEADER ======== -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">Kean</a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">
                    <li class="nav_item">
                        <a href="#home" class="nav_link">
                            <i class="uil uil-estate nav_icon"></i> Home
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">
                            <i class="uil uil-user nav_icon"></i> About
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#skills" class="nav_link">
                            <i class="uil uil-file-alt nav_icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#services" class="nav_link">
                            <i class="uil uil-briefcase nav_icon"></i> Services
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#portfolio" class="nav_link">
                            <i class="uil uil-scenery nav_icon"></i> Portfolio
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#contact" class="nav_link">
                            <i class="uil uil-message nav_icon"></i> Contact me
                        </a>
                    </li>
                </ul>

                <i class="uil uil-times nav_close" id="nav-close"></i>
            </div>
            <div class="nav_btns">
                <div class="nav_toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>

    </header>

    <!-- ======== MAIN ======== -->
    <main class="main">


        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_content grid">
                    <div class="home_social">
                        <a href="#" target="_blank" class="home_social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="#" target="_blank" class="home_social-icon">
                            <i class="uil uil-dribbble"></i>
                        </a>
                        <a href="#" target="_blank" class="home_social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>
                    <div class="home_img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                                <image class="home_blob-img" x="12" y="18" href="assets/image/perfil.png" />
                            </g>
                        </svg>
                    </div>

                    <div class="home_data">
                        <h1 class="home_title">Hi, I'm Kean</h1>
                        <h3 class="home_subtitle">Frontend Developer</h3>
                        <p class="home_description">High level experience in web design and development knowledge, producing quality work.</p>
                        <a href="#contact" class="button button-flex">
                            Contact Me <i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </div>

                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button--flex">
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section_title">About Me</h2>
            <span class="section_subtitle">My introduction</span>

            <div class="about_container container grid">

                <img src="assets/image/about.jpg" alt="" class="about_img">

                <div class="about_data">
                    <p class="about_description">Web developer, with extensive knowledge and years of experience, working in web technologies and Ui / Ux design, delivering quality work.
                    </p>
                    <div class="about_info">
                        <div>
                            <span class="about_info-title">08+</span>
                            <span class="about_info-name">Years <br> experience</span>
                        </div>
                        <div>
                            <span class="about_info-title">20+</span>
                            <span class="about_info-name">Completed <br> project</span>
                        </div>
                        <div>
                            <span class="about_info-title">05+</span>
                            <span class="about_info-name">Companies <br> worked</span>
                        </div>
                    </div>

                    <div class="about_buttons">
                        <a download=" " href="assets/pdf/kean-cv.pdf" class="button button--flex">
                            Download CV<i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section_title">Skills</h2>
            <span class="section_subtitle">My technical level</span>

            <div class="skills_container container grid">
                <div>
                    <!--==================== SKILLS 1====================-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-brackets-curly skills_icon"></i>

                            <div>
                                <h1 class="skills_titles">Frontend developer</h1>
                                <span class="skills_subtitle">More than 2 years</span>
                            </div>
                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">HTML</h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">CSS</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">JAVASCRIPT</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">BOOTSTRAP</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_bootstrap"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--==================== SKILLS 2====================-->
                    <div class="skills_content skills_close">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>

                            <div>
                                <h1 class="skills_titles">Backend developer</h1>
                                <span class="skills_subtitle">1 year</span>
                            </div>
                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">PHP</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_php"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Mysql</h3>
                                    <span class="skills_number">70%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_mysql"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <!--==================== SKILLS 3====================-->
                    <div class="skills_content skills_close">
                        <div class="skills_header">
                            <i class="uil uil-swatchbook skills_icon"></i>

                            <div>
                                <h1 class="skills_titles">Designer</h1>
                                <span class="skills_subtitle">1 year</span>
                            </div>
                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Figma</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_figma"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section">
            <h2 class="section_title">Qualification</h2>
            <span class="section_subtitle">My personal journey</span>

            <div class="qualification_container container">
                <div class="qualification_tabs">
                    <div class="qualification_button button--flex qualification_active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification_icon"></i>
                        Education
                    </div>

                    <div class="qualification_button button--flex" data-target="#work">
                        <i class="uil uil-briefcase-alt qualification_icon"></i>
                        Work
                    </div>
                </div>

                <div class="qualification_sections">
                    <!--==================== QUALIFICATION CONTENT 1====================-->
                    <div class="qualification_content qualification_active" data-content id="education">
                        <!--==================== QUALIFICATION 1====================-->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">BS Information Technology</h3>
                                <span class="qualification_subtitle">EARIST - Cavite Campus</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019-2023
                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification_data">
                            <div></div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                            <div>
                                <h3 class="qualification_title">General Academic Strand</h3>
                                <span class="qualification_subtitle">Bulihan Integrated National Highschool</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2017-2019
                                </div>
                            </div>


                        </div>

                        <!--==================== QUALIFICATION 3====================-->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Secondary</h3>
                                <span class="qualification_subtitle">Bulihan National Highschool</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2013-2017
                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 4====================-->
                        <div class="qualification_data">
                            <div></div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <!-- <span class="qualification_line"></span> -->
                            </div>
                            <div>
                                <h3 class="qualification_title">Primary</h3>
                                <span class="qualification_subtitle">Bulihan Sites & Services Project Elementary School</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2007-2013
                                </div>
                            </div>


                        </div>
                    </div>


                    <!--==================== QUALIFICATION CONTENT 2====================-->
                    <div class="qualification_content" data-content id="work">
                        <!--==================== QUALIFICATION 1====================-->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Intern Web Developer</h3>
                                <span class="qualification_subtitle">LGU-GMA</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2023
                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 2 ====================-->
                        <!-- <div class="qualification_data">
                            <div></div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                            <div>
                                <h3 class="qualification_title">General Academic Strand</h3>
                                <span class="qualification_subtitle">Bulihan National Highschool</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2023
                                </div>
                            </div>


                        </div> -->


                    </div>


                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section_title">Services</h2>
            <span class="section_subtitle">What I offer</span>
            <div class="services_container container grid">
                <!--==================== SERVICES 1 ====================-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">Ui/Ux <br> Designer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Ui/Ux <br> Designer</h4>
                        </div>
                        <i class="uil uil-times services_modal-close"></i>

                        <ul class="services_modal-services grid">
                            <li class="services_modal-service">
                                <i class="uil uil-web-grid services_modal-icon"></i>
                                <p>I develop the user interface.</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-web-grid services_modal-icon"></i>
                                <p>Web page development.</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-web-grid services_modal-icon"></i>
                                <p>I create ux element interactions.</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-web-grid services_modal-icon"></i>
                                <p>I position your company brand.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                 <!--==================== SERVICES 2 ====================-->
                 <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">Ui/Ux <br> Designer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Ui/Ux <br> Designer</h4>
                        </div>
                        <i class="uil uil-times services_modal-close"></i>

                        <ul class="services_modal-services grid">
                            <li class="services_modal-service">
                                <i class="uil uil-web-grid services_modal-icon"></i>
                                <p>I develop the user interface.</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-web-grid services_modal-icon"></i>
                                <p>Web page development.</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-web-grid services_modal-icon"></i>
                                <p>I create ux element interactions.</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-web-grid services_modal-icon"></i>
                                <p>I position your company brand.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">

        </section>

        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">

        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section">

        </section>

        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">

        </section>

    </main>

    <!-- ======== FOOTER ======== -->


    <!-- ======== SCROLL TOP ======== -->

    <!-- ======== SWIPER JS ======== -->
    <script src=""></script>

    <!-- ======== MAIN JS ======== -->
    <script src="assets/js/main.js"></script>

</body>

</html>