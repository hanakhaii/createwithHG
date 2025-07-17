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
            <div class="">
                <h1>Hana K.</h1>
                <p>i love you moree</p>
            </div>
            <div class="">
                <h1>Galuh M.</h1>
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
        <h1>Our Skill</h1>
        <div class="galuh">
            <div class="name">
                <h1>Galuh M.</h1>
            </div>
            <div class="galuh-skill">
                <p>Galuh memiliki keahlian utama di bidang pengembangan backend website, dengan fokus pada penggunaan PHP dan pengelolaan database SQL. Ia mampu membangun sistem dan logika di balik tampilan web dengan struktur yang efisien, aman, dan fungsional. Selain itu, Galuh juga menguasai HTML, CSS, dan JavaScript untuk kebutuhan integrasi antar bagian website. Di luar pengembangan web, Galuh memiliki
                    kemampuan dalam editing video menggunakan CapCut, serta desain grafis dan UI menggunakan Figma dan Canva, yang memperkuat sisi visual dari proyek yang dikerjakan.</p>
                <div class="poto-skill">
                    <div class="img-skill">
                        <img src="" alt="html">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="css">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="php">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="js">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="capcut">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="figma">
                        <label for="">*%</label>
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
                    Hanaa berperan sebagai pengembang frontend dengan keahlian utama dalam HTML, CSS, dan JavaScript, Java XML menjadikannya sosok yang bertanggung jawab atas tampilan dan interaksi pengguna di dalam website. Ia memiliki ketelitian 
                    dalam menyusun antarmuka yang estetis, responsif, dan user-friendly. Selain itu, Hanaa juga memahami penggunaan PHP untuk menyempurnakan fungsionalitas di sisi klien. Sama seperti Galuh, 
                    Hanaa juga memiliki bakat dalam desain menggunakan Canva dan Figma, serta editing konten visual menggunakan CapCut, yang menunjang pembuatan konten digital tim mereka.
                </p>
                <div class="poto-skill">
                    <div class="img-skill">
                        <img src="" alt="html">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="css">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="php">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="js">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="capcut">
                        <label for="">*%</label>
                    </div>
                    <div class="img-skill">
                        <img src="" alt="figma">
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