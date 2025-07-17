<?php
/*
Template Name: Home Page createwithHG
*/
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creativewithHG</title>
</head>

<body>
    <!-- heaader -->
    <header>
        <h3>creativewithHG</h3>
        <aside>
            <div class="judul1">
                <h1>Hana K.</h1>
                <p>i love you moree</p>
            </div>
            <div class="judul2">
                <h1>Galuh MTP</h1>
                <p>i love you</p>
            </div>
        </aside>
    </header>

    <!-- first section -->
    <section class="about-us">
        <nav>
            <ul>
                <li><a href="">About Us</a></li>
                <li><a href="">Our Skill</a></li>
                <li><a href="">Our Experience</a></li>
                <li><a href="">Our Project</a></li>
            </ul>
        </nav>
        <article>
            <h1>About Us</h1>
            <p>
                Kami, Hana dan Galuh, adalah tim pengembang website yang telah berkolaborasi selama beberapa bulan terakhir dalam berbagai proyek sekolah. Dengan pembagian peran yang jelas, yaitu Hana sebagai front-end developer dan Galuh sebagai back-end developer, kami menyatukan estetika dan fungsionalitas untuk menciptakan website yang efisien dan user-friendly.
            </p>
        </article>
    </section>

    <!-- secondary section -->
    <section class="skill">
        <h1 class="judul-skill">Our Skill</h1>
        <div class="galuh">
            <div class="name">
                <h1>Galuh M.</h1>
            </div>
            <div class="galuh-skill">
                <p>
                    Galuh ahli dalam pengembangan backend website, khususnya menggunakan PHP dan SQL untuk membangun sistem yang efisien dan aman. Ia juga menguasai HTML, CSS, dan JavaScript untuk integrasi antarmuka. Di bidang kreatif, Galuh mahir menggunakan CapCut untuk editing video serta Figma dan Canva untuk desain grafis dan UI.
                </p>
                <div class="poto-skill">
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/htmlhitam.png"> <br>
                        <label for="">40%</label>
                    </div>
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/csshitam.png" alt="css"> <br>
                        <label for="">20%</label>
                    </div>
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/phphitam.png" alt="php"> <br>
                        <label for="">10%</label>
                    </div>
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/jshitam.png" alt="js"> <br>
                        <label for="">5%</label>
                    </div>
                    <div class="img-skill-capcut">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/capcut_white.jpg" alt="capcut"> <br>
                        <label for="">10%</label>
                    </div>
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/figmaputih.png" alt="figma"> <br>
                        <label for="">15%</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="hanaa">
            <div class="name">
                <h1>Hana K.</h1>
            </div>
            <div class="hana-skill">
                <p>
                    Hanaa adalah pengembang frontend yang ahli dalam HTML, CSS, JavaScript, dan Java XML, dengan fokus pada tampilan dan interaksi pengguna yang estetis dan responsif. Ia juga memahami PHP untuk mendukung fungsionalitas klien. Selain itu, Hanaa mahir dalam desain menggunakan Canva dan Figma serta editing visual dengan CapCut, mendukung pembuatan konten digital tim.
                </p>
                <div class="poto-skill">
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/htmlputih.png" alt="html"> <br>
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cssputih.png" alt="css"> <br>
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/phpputih.png" alt="php"> <br>
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/jsputih.png" alt="js"> <br>
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill-capcut">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/capcut_dark.png" alt="capcut"> <br>
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/figmahtam.png" alt="figma"> <br>
                        <label for="">*%</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- third section -->
    <section class="experience">
        <div class="hana-experience">
            <h1>Hana K.</h1>
            <div>
                <p>Nov, 2024</p>
                <h5>jakjsaskhskaj</h5>
            </div>
        </div>
        <div class="galuh-experience">
            <h1>Galuh M.</h1>
            <div>
                <p>Nov, 2024</p>
                <h5>jakjsaskhskaj</h5>
            </div>
        </div>
    </section>

    <!-- fourth section -->
    <section class="project">
        <h1>Our Project</h1>
        <a href="<?php echo get_template_directory_uri(); ?>/project.php"> → </a>
    </section>

    <footer>
        <h1>creativewithHG</h1>
        <p>creativewithHG@gmail.com</p>
    </footer>
</body>

</html>