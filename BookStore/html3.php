<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blogs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        div {
            padding-left: 2cm;
            padding-right: 2cm;
            margin-top: 2px;
        }
    </style>
</head>

<body>
    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i> Bookflix and Chill </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons" style="padding-left:0cm;padding-right:0cm">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user" style="padding-left:0cm;padding-right:0cm"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="html.php">home</a>
                <a href="html4.php">reviews</a>
                <a href='html2.php'>genres</a>

            </nav>
        </div>

    </header>

    <!-- header section ends -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> <span>Our Blogs</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">


                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ILmvKC-H1l0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="content">
                        <h3>The most beautiful books to read by Ava Jules</h3>
                        <p>Ava is a girl obsessed with books!</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The art of reading</h3>
                        <p>What to read when you try something new!</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Throwing words!</h3>
                        <p>A blog for all of you who are stuck and have no inspiration for the next word! </p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Gift ideas for the New Year holidays</h3>
                        <p>The time for gifts has come click "read more" for ideas!</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="lexolibra.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>10 best books to read this year-end</h3>
                        <p>The best choices from different collections!</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

</body>

</html>