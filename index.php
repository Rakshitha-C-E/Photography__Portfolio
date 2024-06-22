<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>User Dashboard</title>
</head>
<body>
<header class = "header">
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    <span class = "brand-name">
                        PHOTOGRAPHY
                    </span>
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
                </div>

                <!-- navigation menu -->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "index.html" class = "active">Home</a></li>
                        <li><a href = "gallery.html">Gallery</a></li>
                        <li><a href = "blog.html">Blog</a></li>
                        <li><a href = "contact.html">Contact</a></li>
                        <li><a href="logout.php " class="btn btn warning">Logout</a></li>
                    </ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>

            <div class = "container about">
                <div class = "about-content">
                    <div class = "about-img flex">
                        <img src = "images/insta-4.jpg" alt = "photographer img">
                    </div>
                    <h2>Photography</h2>
                    <h3>Photographer | Traveller</h3>
                    <blockquote>
                        "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It remembers little things, long after you have forgotten everything. Contrast is what makes photography interesting."
                        <span></span>
                    </blockquote>
                </div>

                <div class = "social-icons">
                    <ul>
                        <li>
                            <a href = "#"><i class = "fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- end of header -->

        <!-- main -->
        <section class = "section-one">
            <div class = "container">
                <div class = "sec-one-left">
                    <!-- image here -->
                    <div>
                        <h3>WILDLIFE PHOTOGRAPHY</h3>
                        <p>Capturing moments of untamed beauty: a glimpse into the world of wildlife. Embrace the wild beauty that nature offers.</p>
                    </div>
                </div>

                <div class = "sec-one-right">
                    <div class = "work-content">
                        <h3>WEDDING PHOTOSHOOT</h3>
                        <p>Cover events by taking photos and capturing moments. To love, laughter, and happily ever after. True love is the greatest adventure.</p>
                    <!--    <a href = "#" class = "btn">view all</a>-->
                    </div>
                    <div class = "work-imgs">
                        <div class = "work-img-1">
                            <!--image here-->
                        </div>
                        <div class = "work-img-2">
                            <!-- image here -->
                        </div>
                    </div>
                    <h3>"Photography is the story I fail to put into words" - <b>Destin Sparks</b></h3>
                </div>
            </div>
        </section>

        <section class = "section-two">
            <div class = "container">
                <h2>FOLLOW ON INSTAGRAM</h2>
                <span>@photographerlife</span>
                <div class = "insta-imgs">
                    <div>
                        <img src = "images/photo11.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src = "images/photo12.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src = "images/photo6.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src = "images/photo7.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end of main -->


        <!-- footer -->
        <footer class = "footer">
            <p>&copy; Copyright Varcons</p>
        </footer>
         <!--end of footer -->
        

        <script src="script.js"></script>
    
</body>
</html>