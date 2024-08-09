<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/dashboard.css">
    <title>Hejo Forest</title>
</head>
<body>
    <!-- NAVBAR -->
    <section id="home">
        <nav class="navbar navbar-expand-lg fixed-top"> 
            <div class="container navbar_container">
                <a class="navbar-brand" href="#">
                    <img src="../media/logo.png" width="60" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#home" data-section="home">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about" data-section="about">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#facilities" data-section="facilities">FACILITIES</a></li>
                        <li class="nav-item"><a class="nav-link" href="#packages" data-section="packages">PACKAGES</a></li>
                        <li class="nav-item"><a class="nav-link" href="#yourpackages" data-section="yourpackages">YOUR PACKAGES</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact" data-section="contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>


    <!-- CONTENT -->
    <?php
        if (isset($_GET['page']) && $_GET['page'] == 'yourpackages') {
            require_once 'data_order.php';
        } else {
            require_once 'dashboard.php';
            if (isset($_GET['section'])) {
                $section = $_GET['section'];
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var targetSection = document.getElementById('$section');
                            if (targetSection) {
                                window.scrollTo({
                                    top: targetSection.offsetTop,
                                    behavior: 'smooth'
                                });
                            }
                        });
                    </script>";
            }
        }
    ?>
    

    <!-- CONTACT -->
    <section id="contact">
        <div class="contact_container">
            <div class="contact_content container">
                <span class="title_contact">ADDRESS</span><br>
                <span class="text_contact">Jl. Raya Ciwidey KM 11, Patengan, Rancabali, Kabupaten Bandung, 40973</span><br>
                <span class="text_contact"><strong>EMAIL</strong></span><br>
                <a class="text_contact" href="mailto:admin@ciwideyoutbound.com">stadmin@ciwideyoutbound.com</a><br>
                <span class="text_contact"><strong>PHONE</strong></span><br>
                <a class="text_contact" href="https://api.whatsapp.com/send/?phone=628111843366&text&type=phone_number&app_absent=0">+6285846424711</a><br>
                <span class="text_contact"><strong>INSTAGRAM</strong></span><br>
                <a class="text_contact" href="https://www.instagram.com/hejoforestciwidey/">@hejoforestciwidey</a><br>
                <span class="text_contact copyright">2024 © Hejo Forest</span>
            </div>
        </div>
    </section>
      
    <script src="../js/navbar.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>