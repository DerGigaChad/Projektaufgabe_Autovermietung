<!DOCTYPE html>
<html lang="en">
    <?php
    //header
    include("header.php");
    ?>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autovermietung SSJ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: white;
            overflow-x: hidden;
            background-color: #17202a;
        }

        .container {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: flex-end;
            padding: 20px;
        }

        /* Background Video */
        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);
        }

        /* Content Overlay */
        .content {
            position: absolute;
            bottom: 50px;
            left: 50px;
        }

            .content h1 {
                font-size: 3rem;
                margin-bottom: 20px;
                text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            }

            .content p {
                font-size: 1.2rem;
                margin-bottom: 30px;
                text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
            }

        /* Buttons */
        .buttons {
            display: flex;
            gap: 20px;
        }

        .btn {
            padding: 15px 30px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s ease;
            text-transform: uppercase;
        }

            .btn:hover {
                transform: scale(1.1);
            }

        .btn-watch {
            background-color: #e50914;
            color: white;
        }

        .btn-more {
            background-color: rgba(255, 255, 255, 0.8);
            color: black;
        }

        /* Carousels */
        .carousel-wrapper {
            position: relative;
        }

        .carousel {
            margin: 20px 0;
            padding: 20px;
            overflow: hidden;
            display: flex;
            scroll-behavior: smooth;
        }

        .carousel-item {
            flex: 0 0 auto;
            width: 200px;
            height: 300px;
            margin-right: 15px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); /* Schatten hinzugefügt */
        }

        .carousel-item:hover {
            transform: scale(1.1); /* Größer bei Hover */
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.5); /* Intensiverer Schatten */
        }

        .carousel-item-text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            z-index: 1;
        }

            .carousel-button.left {
                left: 10px;
            }

            .carousel-button.right {
                right: 10px;
            }

        .section {
            padding: 20px;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.5rem;
            font-weight: bold;
            position: relative;
        }

            .section-header:hover .browse-all {
                display: inline;
            }

            .section-header h2 {
                margin: 0;
            }

            .section-header .btn-all {
                background-color: rgba(255, 255, 255, 0.2);
                color: white;
                border: none;
                padding: 10px 15px;
                cursor: pointer;
                text-transform: uppercase;
                font-size: 0.9rem;
            }

                .section-header .btn-all:hover {
                    background-color: rgba(255, 255, 255, 0.4);
                }
        .browse-all {
            display: none;
            color: turquoise;
            cursor: pointer;
            font-size: 1rem;
            text-decoration: none;
            transition: color 0.3s;
        }

            .browse-all:hover {
                color: cyan;
            }

        .review-section {
            width: 100%;
            text-align: center;
            padding: 50px 20px;
            background-image: url('reviews-background.jpg');
            background-size: cover;
            background-position: center;
        }

        .review-section h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .review-carousel {
            display: flex;
            overflow: hidden;
            scroll-behavior: smooth;
            justify-content: center;
            padding: 20px;
        }

        .review-item {
            flex: 0 0 80%;
            margin: 0 10px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border-radius: 10px;
            font-size: 1.2rem;
            text-align: center;
        }

        .filter-container {
            background: white;
            padding: 20px;
            margin: 30px auto 0 auto;
            text-align: center;
            border-radius: 15px;
            max-width: 900px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 10px;
            z-index: 1000;
        }

        .filter-container form {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .filter-container label, .filter-container select, .filter-container input, .filter-container button {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
            color: black;
        }

        .filter-container select, .filter-container input {
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .filter-container button {
            background-color: #e50914;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Adds a vignette effect to the entire Website */
        .vignette {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 150px; /* Höhe des Effekts */
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
            pointer-events: none; /* Damit es keine Klicks blockiert */
            z-index: 999;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Intro Video -->
        <video class="background-video" autoplay muted loop>
            <source src="assets/introauto.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Content Overlay -->
        <div class="content">
            <h1>Finde Dein Auto</h1>
            <p>Buche Dein Auto jederzeit, überall.</p>
            <div class="buttons">
                <button class="btn btn-watch">Video anschauen</button>
                <button class="btn btn-more">Mehr lernen</button>
            </div>
        </div>
    </div>

    <!-- Adds a vignette effect to the entire Website (see above)-->
    <div class="vignette"></div>

    <div class="filter-container">
        <form action="https://example.com/autos" method="GET">
            <label for="location">Ort:</label>
            <select id="location" name="location" required>
                <option value="Berlin">Berlin</option>
                <option value="Hamburg">Hamburg</option>
                <option value="München">München</option>
                <option value="Köln">Köln</option>
                <option value="Frankfurt">Frankfurt</option>
            </select>

            <label for="pickup">Abholdatum:</label>
            <input type="date" id="pickup" name="pickup" required>

            <label for="return">Rückgabedatum:</label>
            <input type="date" id="return" name="return" required>

            <button type="submit">Autos anzeigen</button>
        </form>
    </div>

    <!-- Cars Carousel -->
    <div class="section">
        <div class="section-header"
            <h2>Fahrzeugklassen</h2>
            <a href="#" class="browse-all">Alle durchstöbern</a>
        </div>
        <div class="carousel-wrapper">
            <button class="carousel-button left" onclick="scrollCarousel('cars', -1)">&lt;</button>
            <div class="carousel" id="cars">
                <div class="carousel-item" style="background-image: url('assets/coupe.jpg');">
                    <div class="carousel-item-text">Coupés</div>
                </div>
                <div class="carousel-item" style="background-image: url('assets/limousine.jpg');">
                    <div class="carousel-item-text">Limousinen</div>
                </div>
                <div class="carousel-item" style="background-image: url('assets/suv.jpg');">
                    <div class="carousel-item-text">SUVs</div>
                </div>
                <div class="carousel-item" style="background-image: url('assets/combi.jpg');">
                    <div class="carousel-item-text">Combis</div>
                </div>
                <div class="carousel-item" style="background-image: url('assets/mehrsitzer.jpg');">
                    <div class="carousel-item-text">Mehrsitzer</div>
                </div>
                <div class="carousel-item" style="background-image: url('assets/cabrio.webp');">
                    <div class="carousel-item-text">Cabrios</div>
                </div>
                <div class="carousel-item" style="background-image: url('assets/cabriolet.jpg');">
                    <div class="carousel-item-text">Cabriolets</div>
                </div>
            </div>
            <button class="carousel-button right" onclick="scrollCarousel('cars', 1)">&gt;</button>
        </div>
    </div>

    <!-- Cities Carousel -->
<div class="section">
    <div class="section-header">
        <h2>Städte</h2>
        <a href="#" class="browse-all">Alle durchstöbern</a>
    </div>
    <div class="carousel-wrapper">
        <button class="carousel-button left" onclick="scrollCarousel('cities', -1)">&lt;</button>
        <div class="carousel" id="cities">
            <div class="carousel-item" style="background-image: url('assets/hamburg.jpg');">
                <div class="carousel-item-text">Hamburg</div>
            <div class="carousel-item" style="background-image: url('assets/berlin.jpg');">
                <div class="carousel-item-text">Berlin</div>
            </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/bielefeld.jpg');">
                <div class="carousel-item-text">Bielefeld</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/bochum.jpg');">
                <div class="carousel-item-text">Bochum</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/bremen.jpg');">
                <div class="carousel-item-text">Bremen</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/dortmund.jpg');">
                <div class="carousel-item-text">Dortmund</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/dresden.jpg');">
                <div class="carousel-item-text">Dresden</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/freiburg.jpg');">
                <div class="carousel-item-text">Freiburg</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/hamburg.jpg');">
                <div class="carousel-item-text">Hamburg</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/köln.jpg');">
                <div class="carousel-item-text">Köln</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/leipzig.jpg');">
                <div class="carousel-item-text">Leipzig</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/münchen.jpg');">
                <div class="carousel-item-text">München</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/nürnberg.jpg');">
                <div class="carousel-item-text">Nürnberg</div>   
            </div>
            <div class="carousel-item" style="background-image: url('assets/paderborn.jpg');">
                <div class="carousel-item-text">Paderborn</div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/rostock.jpg');">
                <div class="carousel-item-text">Rostock</div>   
    
        </div>
        <button class="carousel-button right" onclick="scrollCarousel('cities', 1)">&gt;</button>
    </div>
</div>


    <div class="review-section" style="background-image: url('assets/road-trip-concept-with-group-friends.jpg');">
        <h2>Kundenrezensionen</h2>
        <div class="review-carousel" id="reviews">
            <div class="review-item">"Toller Service! Sehr zufrieden." - Max M.</div>
            <div class="review-item">"Die Buchung war super einfach." - Lisa S.</div>
            <div class="review-item">"Gute Preise und freundlicher Support." - Kevin H.</div>
            <div class="review-item">"Alles top! Werde wieder buchen." - Sarah W.</div>
            <div class="review-item">"Riesige Auswahl an Fahrzeugen." - Tim L.</div>
            <div class="review-item">"Sehr empfehlenswert!" - Anna B.</div>
            <div class="review-item">"Hervorragende Erfahrung!" - Jonas F.</div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const carousel = document.getElementById("reviews");
            function autoScroll() {
                if (carousel.scrollLeft >= carousel.scrollWidth - carousel.clientWidth) {
                    carousel.scrollTo({ left: 0, behavior: "smooth" });
                } else {
                    carousel.scrollBy({ left: 100, behavior: "smooth" });
                }
            }
            setInterval(autoScroll, 1);
        });

        function scrollCarousel(id, direction) {
            const carousel = document.getElementById(id);
            const scrollAmount = 220; // Adjust based on item width and gap
            const scrollPosition = carousel.scrollLeft + direction * scrollAmount;
            carousel.scrollTo({ left: scrollPosition, behavior: 'smooth' });
        }
    </script>

    <?php
    //footer
    include("Footer.php");
    ?>

</body>
</html>
