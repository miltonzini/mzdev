<?php
    session_start();

    $default_lang = 'es';
    $available_langs = ['es', 'en'];

    if (isset($_GET['lang']) && in_array($_GET['lang'], $available_langs)) {
        $_SESSION['lang'] = $_GET['lang'];
    } elseif (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = $default_lang;
    }

    $lang = $_SESSION['lang'];

    include "lang/{$lang}.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milton Zini | <?php echo $texts['title']; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<nav class="navbar">
    <div class="container">
        <div class="nav-logo">Milton Zini</div>
        
        <button class="mobile-menu-toggle" aria-label="Toggle menu">
            <span class="hamburger-icon">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </span>
        </button>
        
        <div class="nav-container">
            <div class="nav-links">
                <a href="#home" style="position: relative; z-index: 1010;"><?php echo $texts['nav_home']; ?></a>
                <a href="#skills" style="position: relative; z-index: 1010;"><?php echo $texts['nav_skills']; ?></a>
                <a href="#projects" style="position: relative; z-index: 1010;"><?php echo $texts['nav_projects']; ?></a>
                <a href="#contact" style="position: relative; z-index: 1010;"><?php echo $texts['nav_contact']; ?></a>
            </div>
            
            <div class="lang-switch">
                <a href="?lang=es" class="<?php echo $lang === 'es' ? 'active' : ''; ?>">ES</a>
                <a href="?lang=en" class="<?php echo $lang === 'en' ? 'active' : ''; ?>">EN</a>
            </div>
        </div>
    </div>
</nav>

    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php echo $texts['hero_title']; ?></h1>
                <p class="subtitle"><?php echo $texts['hero_subtitle']; ?></p>
                <div class="cta-buttons">
                    <a href="#projects" class="btn primary"><?php echo $texts['view_projects']; ?></a>
                    <a href="#contact" class="btn secondary"><?php echo $texts['contact_me']; ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <h2><?php echo $texts['projects_title']; ?></h2>
            <div class="cards-container">
                <div class="card">
                    <div class="card-image">
                        <img src="img/mz-laravel-real-estate-site-sample.webp" alt="Sample Real Estate">
                    </div>
                    <div class="card-content">
                        <h3><?php echo $texts['project1_title']; ?></h3>
                        <p><?php echo $texts['project1_desc']; ?></p>
                        <div class="tags">
                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>SQL</span>
                            <!-- <span>HTML</span> -->
                            <span>CSS</span>
                            <span>JS</span>
                            <span>Git / Github</span>
                            <span>Figma</span>
                        </div>
                        <div class="card-links">
                            <a href="https://github.com/miltonzini/sample-laravel-realestate" class="card-link" target="_blank">
                                <i class="fab fa-github"></i>
                                GitHub
                            </a>
                            <!-- <a href="#" class="card-link">
                                <i class="fas fa-external-link-alt"></i>
                                Demo
                            </a> -->
                            <!-- <a href="#" class="card-link">
                                <i class="fas fa-info-circle"></i>
                                <?php //echo $texts['details']; ?>
                            </a> -->
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="img/mz-laravel-rest-api-sample.webp" alt="Blog Rest API">
                    </div>
                    <div class="card-content">
                        <h3><?php echo $texts['project2_title']; ?></h3>
                        <p><?php echo $texts['project2_desc']; ?></p>
                        <div class="tags">
                            <span>Laravel</span>
                            <span>Laravel Sanctum</span>
                            <span>PHP</span>
                            <span>SQL</span>
                            <span>Postman</span>
                        </div>
                        <div class="card-links">
                            <a href="https://github.com/miltonzini/laravel-blog-rest-api" class="card-link" target="_blank">
                                <i class="fab fa-github"></i>
                                GitHub
                            </a>
                            <!-- <a href="#" class="card-link">
                                <i class="fas fa-external-link-alt"></i>
                                Demo
                            </a>
                            <a href="#" class="card-link">
                                <i class="fas fa-info-circle"></i>
                                <?php //echo $texts['details']; ?>
                            </a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="client-projects">
        <div class="container">
            <h2><?php echo $texts['client_projects_title']; ?></h2>
            <div class="cards-container">
                <!-- Audacity -->
                <div class="card">
                    <div class="card-image">
                        <img src="img/mzdev-samples-audacity-realestate.webp" alt="Plaza Asturias">
                    </div>
                    <div class="card-content">
                        <h3><?php echo $texts['client1_title']; ?></h3>
                        <p><?php echo $texts['client1_desc']; ?></p>
                        <div class="tags">
                            <span>Laravel</span>
                            <span>MySQL</span>
                        </div>
                        <div class="card-links">
                            <a href="#" class="card-link">
                                <i class="fas fa-external-link-alt"></i>
                                <?php echo $texts['visit_site']; ?>
                            </a>
                            <!-- <a href="#" class="card-link">
                                <i class="fas fa-info-circle"></i>
                                <?php echo $texts['case_study']; ?>
                            </a> -->
                        </div>
                    </div>
                </div>

                
                <!-- LIG -->
                <div class="card">
                    <div class="card-image">
                        <img src="img/mzdev-samples-liliana-garcia-negocios-inmobiliarios.webp" alt="Audacity Real Estate">
                    </div>
                    <div class="card-content">
                        <h3><?php echo $texts['client2_title']; ?></h3>
                        <p><?php echo $texts['client2_desc']; ?></p>
                        <div class="tags">
                            <span>Laravel</span>
                            <span>MySQL</span>
                        </div>
                        <div class="card-links">
                            <a href="#" class="card-link">
                                <i class="fas fa-external-link-alt"></i>
                                App Store
                            </a>
                            <a href="#" class="card-link">
                                <i class="fas fa-info-circle"></i>
                                <?php echo $texts['case_study']; ?>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Asturias -->
                <div class="card">
                    <div class="card-image">
                        <img src="img/mzdev-samples-plaza-asturias.webp" alt="Liliana García Negocios Inmobiliarios">
                    </div>
                    <div class="card-content">
                        <h3><?php echo $texts['client3_title']; ?></h3>
                        <p><?php echo $texts['client3_desc']; ?></p>
                        <div class="tags">
                            <span>PHP</span>
                            <!-- <span>MySQL</span> -->
                        </div>
                        <div class="card-links">
                            <a href="#" class="card-link">
                                <i class="fas fa-external-link-alt"></i>
                                App Store
                            </a>
                            <a href="#" class="card-link">
                                <i class="fas fa-info-circle"></i>
                                <?php echo $texts['case_study']; ?>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Matías Palou -->
                <div class="card">
                    <div class="card-image">
                        <img src="img/mzdev-samples-matiaspalou-com-ar.webp" alt="Matías Palou">
                    </div>
                    <div class="card-content">
                        <h3><?php echo $texts['client4_title']; ?></h3>
                        <p><?php echo $texts['client4_desc']; ?></p>
                        <div class="tags">
                            <span>Laravel</span>
                            <span>MySQL</span>
                        </div>
                        <div class="card-links">
                            <a href="#" class="card-link">
                                <i class="fas fa-external-link-alt"></i>
                                <?php echo $texts['visit_site']; ?>
                            </a>
                            <a href="#" class="card-link">
                                <i class="fas fa-info-circle"></i>
                                <?php echo $texts['case_study']; ?>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Maseret Visuals -->
                <div class="card">
                    <div class="card-image">
                        <img src="img/mzdev-samples-maseretvisuals-com-ar.webp" alt="Maserete Visuals">
                    </div>
                    <div class="card-content">
                        <h3><?php echo $texts['client5_title']; ?></h3>
                        <p><?php echo $texts['client5_desc']; ?></p>
                        <div class="tags">
                            <span>PHP</span>
                            <!-- <span>MySQL</span> -->
                        </div>
                        <div class="card-links">
                            <a href="#" class="card-link">
                                <i class="fas fa-external-link-alt"></i>
                                <?php echo $texts['visit_site']; ?>
                            </a>
                            <a href="#" class="card-link">
                                <i class="fas fa-info-circle"></i>
                                <?php echo $texts['case_study']; ?>
                            </a>
                        </div>
                    </div>
                </div>
                
                
                <!-- Ananké -->
                <div class="card">
                    <div class="card-image">
                        <img src="img/mzdev-samples-adicciones-ananke.webp" alt="Ananké Adicciones">
                    </div>
                    <div class="card-content">
                        <h3><?php echo $texts['client6_title']; ?></h3>
                        <p><?php echo $texts['client6_desc']; ?></p>
                        <div class="tags">
                            <span>PHP</span>
                            <!-- <span>MySQL</span> -->
                        </div>
                        <div class="card-links">
                            <a href="#" class="card-link">
                                <i class="fas fa-external-link-alt"></i>
                                <?php echo $texts['visit_site']; ?>
                            </a>
                            <a href="#" class="card-link">
                                <i class="fas fa-info-circle"></i>
                                <?php echo $texts['case_study']; ?>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Constructora del Sur -->
                <div class="card">
                    <div class="card-image">
                        <img src="img/mzdev-samples-constructora-del-sur-panama.webp" alt="Constructora del Sur">
                    </div>
                    <div class="card-content">
                        <h3><?php echo $texts['client7_title']; ?></h3>
                        <p><?php echo $texts['client7_desc']; ?></p>
                        <div class="tags">
                            <span>Laravel</span>
                            <span>MySQL</span>
                        </div>
                        <div class="card-links">
                            <a href="#" class="card-link">
                                <i class="fas fa-external-link-alt"></i>
                                <?php echo $texts['visit_site']; ?>
                            </a>
                            <a href="#" class="card-link">
                                <i class="fas fa-info-circle"></i>
                                <?php echo $texts['case_study']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="professional-links">
        <div class="container">
            <h2><?php echo $texts['professional_links']; ?></h2>
            <div class="links-container">
                <a href="https://github.com/miltonzini" class="pro-link" target="_blank">
                    <i class="fab fa-github"></i>
                    GitHub
                </a>
                <a href="https://www.linkedin.com/in/miltonzini/" class="pro-link" target="_blank">
                    <i class="fab fa-linkedin"></i>
                    LinkedIn
                </a>
                <a href="docs/cv-miltonzini-es-250414.pdf" class="pro-link" target="_blank">
                    <i class="fas fa-file-pdf"></i>
                    CV <strong>(ES)</strong>
                </a>
                <a href="docs/cv-miltonzini-en-250414.pdf" class="pro-link" target="_blank">
                    <i class="fas fa-file-pdf"></i>
                    CV <strong>(EN)</strong>
                </a>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
            <h2 class="text-center"><?php echo $texts['skills_title']; ?></h2>
            <div class="skills-container">
                <div class="skill-card">
                    <h3><?php echo $texts['frontend_title']; ?></h3>
                    <p><?php echo $texts['frontend_desc']; ?></p>
                </div>
                <div class="skill-card">
                    <h3><?php echo $texts['backend_title']; ?></h3>
                    <p><?php echo $texts['backend_desc']; ?></p>
                </div>
                <div class="skill-card">
                    <h3><?php echo $texts['design_title']; ?></h3>
                    <p><?php echo $texts['design_desc']; ?></p>
                </div>
                <!-- <div class="skill-card">
                    <h3><?php //echo $texts['mobile_title']; ?></h3>
                    <p><?php //echo $texts['mobile_desc']; ?></p>
                </div> -->
                <!-- <div class="skill-card">
                    <h3><?php //echo $texts['devops_title']; ?></h3>
                    <p><?php //echo $texts['devops_desc']; ?></p>
                </div> -->
                <div class="skill-card">
                    <h3><?php echo $texts['additional_title']; ?></h3>
                    <p><?php echo $texts['additional_desc']; ?></p>
                </div>
            </div>
        </div>
    </section>

    

    

    <section id="contact" class="contact">
        <div class="container">
            <h2 class="text-center"><?php echo $texts['contact_title']; ?></h2>
            <div class="contact-container">
                <form id="contact-form" class="contact-form">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="<?php echo $texts['name_placeholder']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="<?php echo $texts['email_placeholder']; ?>" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="<?php echo $texts['message_placeholder']; ?>" required></textarea>
                    </div>
                    <button type="submit" class="btn primary"><?php echo $texts['send_message']; ?></button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="social-links">
                <a href="https://github.com/miltonzini" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/miltonzini/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                <!-- <a href="#"><i class="fab fa-dribbble"></i></a> -->
            </div>
            <!-- <p>&copy; 2025 Milton Zini. <?php //echo $texts['rights_reserved']; ?></p> -->
            <p><?php echo $texts['thanks']; ?></p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>