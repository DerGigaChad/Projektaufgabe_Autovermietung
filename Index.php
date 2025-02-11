<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix-Style Homescreen</title>
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
            background-color: black;
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
    </style>
</head>
<body>
    <div class="container">
        <!-- Background Video -->
        <video class="background-video" autoplay muted loop>
            <source src="auto.mp4" type="video/mp4">
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

    <!-- Cars Carousel -->
    <div class="section">
        <div class="section-header"
            <h2>Fahrzeugklassen</h2>
            <a href="#" class="browse-all">Alle durchstöbern</a>
        </div>
        <div class="carousel-wrapper">
            <button class="carousel-button left" onclick="scrollCarousel('cars', -1)">&lt;</button>
            <div class="carousel" id="cars">
                <div class="carousel-item" style="background-image: url('sportwagen.jpg');">
                    <div class="carousel-item-text">Sportwagen</div>
                </div>
                <div class="carousel-item" style="background-image: url('limousine.jpg');">
                    <div class="carousel-item-text">Limousinen</div>
                </div>
                <div class="carousel-item" style="background-image: url('suv.jpg');">
                    <div class="carousel-item-text">SUVs</div>
                </div>
                <div class="carousel-item" style="background-image: url('car4.jpg');">
                    <div class="carousel-item-text">Car 4</div>
                </div>
                <div class="carousel-item" style="background-image: url('car5.jpg');">
                    <div class="carousel-item-text">Car 5</div>
                </div>
                <div class="carousel-item" style="background-image: url('car6.jpg');">
                    <div class="carousel-item-text">Car 6</div>
                </div>
                <div class="carousel-item" style="background-image: url('car7.jpg');">
                    <div class="carousel-item-text">Car 7</div>
                </div>
                <div class="carousel-item" style="background-image: url('car8.jpg');">
                    <div class="carousel-item-text">Car 8</div>
                </div>
                <div class="carousel-item" style="background-image: url('car9.jpg');">
                    <div class="carousel-item-text">Car 9</div>
                </div>
                <div class="carousel-item" style="background-image: url('car10.jpg');">
                    <div class="carousel-item-text">Car 10</div>
                </div>
                <div class="carousel-item" style="background-image: url('car11.jpg');">
                    <div class="carousel-item-text">Car 11</div>
                </div>
                <div class="carousel-item" style="background-image: url('car12.jpg');">
                    <div class="carousel-item-text">Car 12</div>
                </div>
                <div class="carousel-item" style="background-image: url('car13.jpg');">
                    <div class="carousel-item-text">Car 13</div>
                </div>
                <div class="carousel-item" style="background-image: url('car14.jpg');">
                    <div class="carousel-item-text">Car 14</div>
                </div>
                <div class="carousel-item" style="background-image: url('car15.jpg');">
                    <div class="carousel-item-text">Car 15</div>
                </div>
                <div class="carousel-item" style="background-image: url('car16.jpg');">
                    <div class="carousel-item-text">Car 16</div>
                </div>
                <div class="carousel-item" style="background-image: url('car17.jpg');">
                    <div class="carousel-item-text">Car 17</div>
                </div>
                <div class="carousel-item" style="background-image: url('car18.jpg');">
                    <div class="carousel-item-text">Car 18</div>
                </div>
                <div class="carousel-item" style="background-image: url('car19.jpg');">
                    <div class="carousel-item-text">Car 19</div>
                </div>
                <div class="carousel-item" style="background-image: url('car20.jpg');">
                    <div class="carousel-item-text">Car 20</div>
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
                <div class="carousel-item" style="background-image: url('hamburg.jpg');">
                    <div class="carousel-item-text">Hamburg</div>
                </div>
                <div class="carousel-item" style="background-image: url('heidelberg.jpg');">
                    <div class="carousel-item-text">Heidelberg</div>
                </div>
                <div class="carousel-item" style="background-image: url('münchen.jpg');">
                    <div class="carousel-item-text">München</div>
                </div>
                <div class="carousel-item" style="background-image: url('city4.jpg');">
                    <div class="carousel-item-text">City 4</div>
                </div>
                <div class="carousel-item" style="background-image: url('city5.jpg');">
                    <div class="carousel-item-text">City 5</div>
                </div>
                <div class="carousel-item" style="background-image: url('city6.jpg');">
                    <div class="carousel-item-text">City 6</div>
                </div>
                <div class="carousel-item" style="background-image: url('city7.jpg');">
                    <div class="carousel-item-text">City 7</div>
                </div>
                <div class="carousel-item" style="background-image: url('city8.jpg');">
                    <div class="carousel-item-text">City 8</div>
                </div>
                <div class="carousel-item" style="background-image: url('city9.jpg');">
                    <div class="carousel-item-text">City 9</div>
                </div>
                <div class="carousel-item" style="background-image: url('city10.jpg');">
                    <div class="carousel-item-text">City 10</div>
                </div>
            </div>
            <button class="carousel-button right" onclick="scrollCarousel('cities', 1)">&gt;</button>
        </div>
    </div>

    <div class="review-section" style="background-image: url('frau.jpg');">
        <h2>Kundenrezensionen</h2>
        <div class="carousel-wrapper">
            <button class="carousel-button left" onclick="scrollCarousel('reviews', -1)">&lt;</button>
            <div class="review-carousel" id="reviews">
                <div class="review-item">"Toller Service! Sehr zufrieden." - Max M.</div>
                <div class="review-item">"Die Buchung war super einfach." - Lisa S.</div>
                <div class="review-item">"Gute Preise und freundlicher Support." - Kevin H.</div>
                <div class="review-item">"Alles top! Werde wieder buchen." - Sarah W.</div>
                <div class="review-item">"Riesige Auswahl an Fahrzeugen." - Tim L.</div>
                <div class="review-item">"Sehr empfehlenswert!" - Anna B.</div>
                <div class="review-item">"Hervorragende Erfahrung!" - Jonas F.</div>
            </div>
            <button class="carousel-button right" onclick="scrollReviews('reviews', 1)">&gt;</button>
        </div>
    </div>

    <script>
        function scrollReviews(id, direction) {
            const carousel = document.getElementById(id);
            const scrollAmount = 2020;
            carousel.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
        }
   
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