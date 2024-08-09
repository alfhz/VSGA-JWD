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
    <!-- HOME -->
    <div class="home_container">
        <div class="home_content fixed">
            <span class="title_1 fixed">HEJO FOREST:</span>
            </br>
            <span class="title_2 fixed">STAY, CONNECT, HEAL</span>
            </br>
            <img src="../media/line_home.svg" class="line_home">
            </br>
            <span class="description fixed">EcoTourism - Natural Hot Springs & Glamping</span>
            </br>
            <div class="wrapper">
                <div class="row row-cols-3">
                  <div class="col sum_1">
                    20
                    <img src="../media/add.svg" class="add" width="30" height="30"></img>
                  </div>
                  <div class="col sum_1">
                    10
                    <img src="../media/add.svg" class="add" width="30" height="30"></img>
                  </div>
                  <div class="col sum_1">
                    1000
                    <img src="../media/add.svg" class="add" width="30" height="30"></img>
                  </div>
                  <div class="col sum_2">Great Spots</div>
                  <div class="col sum_2">Years Experience</div>
                  <div class="col sum_2">Guests</div>
                </div>
            </div>
            </br>
            <a class="learn_more fixed" href="#about">LEARN MORE <img src="../media/arrow_right.svg" class="arrow_right" width="20"></a>
        </div>
        <img src="../media/bg_home.jpg" class="bg_home">
    </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
    <div class="about_container container">
        <div class="row">
            <div class="col about_content_1">
                <div class="col">
                    <span class="row title_about">BE RELAX<br>HERE </span>
                    <span class="row content">
                        Hejo Forest is a well-established natural healing tourism destination that has been recently updated with impressive new facilities designed for families, corporate groups, and social clubs. Situated in the heart of the Ciwidey forest, Hejo Forest offers a cool and tranquil atmosphere. The site features natural hot spring pools from the volcanic Mount Patuha, providing a therapeutic healing experience for all visitors.
                    </span>
                    <div class="row activities">
                        <div class="row row-cols-3">
                            <div class="col d-flex justify-content-center ">
                                <img src="../media/camp_icon.png" alt="" width="90" class="activities_img">
                            </div>
                            <div class="col d-flex justify-content-center">
                                <img src="../media/hot_spring_icon.png" alt="" width="90" class="activities_img">
                            </div>
                            <div class="col d-flex justify-content-center">
                                <img src="../media/outbound_icon.png" alt="" width="90" class="activities_img">
                            </div>
                            <span class="col d-flex justify-content-center activities_name">Camping</span>
                            <span class="col d-flex justify-content-center activities_name">Hot Spring</span>
                            <span class="col d-flex justify-content-center activities_name">Outbound</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col about_content_2">
                <iframe id="video" src="https://www.youtube.com/embed/jJ-YxMmQV4Q?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </br>
                <div id="carouselExampleCaption" class="carousel slide carousel_1">
                    <div class="carousel-indicators" id="carouselIndicators"></div>
                    <div class="carousel-inner" id="carouselInner"></div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaption" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaption" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
   </div>
   </section>

   <!-- FACILITIES -->
   <section id="facilities">
   <div class="facilities_container">
    <div class="facilities_content">
        <span class="title_facilities">FACILITIES</span>
        <br>
        <div class="row row-cols-3">
            <div class="col d-flex justify-content-center ">
                <img src="../media/mushola.jpeg" alt="" width="300" class="img_facilities">
            </div>
            <div class="col d-flex justify-content-center">
                <img src="../media/parking_area.jpeg" alt="" width="300" class="img_facilities">
            </div>
            <div class="col d-flex justify-content-center">
                <img src="../media/restroom.jpeg" alt="" width="300" class="img_facilities">
            </div>
            <span class="col d-flex justify-content-center area_name">Mushola</span>
            <span class="col d-flex justify-content-center area_name">Parking Area</span>
            <span class="col d-flex justify-content-center area_name">Toilet</span>
        </div>
    </div>
    </div>
    </section>

    <!-- PACKAGES -->
    <section id="packages">
        <div class="packages_container">
        <div class="packages_content container">
            <span class="title_packages mt-5">PACKAGES</span>
            <div class="row row-cols-3 card_in" id="cardsContainer"></div>
        </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/carousel_about.js"></script>
    <script src="../js/packages.js"></script>
</body>
</html>