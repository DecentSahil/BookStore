<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <style>
        img {
            width: 7cm;
            height: 10cm;
        }
        
        h1 {
            text-align: center;
            color: black;
        }
        
        .nje {
            content: "";
            display: block;
            margin: 0 auto;
            width: 40%;
            padding-top: 20px;
            border-bottom: 1px solid black;
        }
    </style>
    <!-- link for the swiper  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


</head>

<body>
    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i> bookflix and chill </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="html.php">home</a>
                <a href="html4.php">reviews</a>
                <a href="html3.php">blogs</a>


            </nav>
        </div>

    </header>
    <!-- login form  -->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="">
            <h3>sign in</h3>
            <span>username</span>
            <input type="email" name="" class="box" placeholder="enter your email" id="">
            <span>password</span>
            <input type="password" name="" class="box" placeholder="enter your password" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>forget password ? <a href="#">click here</a></p>
            <p>don't have an account ? <a href="#">create one</a></p>
        </form>

    </div>


    <div class="nje">
        <h1>Types of Books</h1>
    </div>



    <section class="featured" id="featured">

        <h1 class="heading"> <span>Horror</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="it.jpg">
                    </div>
                    <div class="content">
                        <h3>It</h3>
                        <div class="price">$17.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="mexican_gothic.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Mexican gothic</h3>
                        <div class="price">$12.99 <span>$18.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="white_is_for_witching.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>White is for</h3>
                        <div class="price">$13.99 <span>$19.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="a_head_full_of_ghosts.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>A head full </h3>
                        <div class="price">$16.99 <span>$21.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="bird_box.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Bird box</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>
    </section>



    <section class="featured" id="featured">
        <h1 class="heading"> <span>Adventure</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="the_hunger_games.jpg">
                    </div>
                    <div class="content">
                        <h3>The hunger games</h3>
                        <div class="price">$14.99 <span>$18.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="the_fallen_stars.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The fallen stars</h3>
                        <div class="price">$18.99 <span>$27.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="into the wild, aventur.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Into the wild</h3>
                        <div class="price">$20.99 <span>$25.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="criminal_mischief.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Criminal mischief</h3>
                        <div class="price">$30.00 <span>$33.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="catchingfire.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Catching Fire</h3>
                        <div class="price">$12.99 <span>$16.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>


    </section>
    <section class="featured" id="featured">
        <h1 class="heading"> <span>Action</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="icebreaker.jpg">
                    </div>
                    <div class="content">
                        <h3>Icebreaker</h3>
                        <div class="price">$16.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="agend21.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Agend 21</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="divergent.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Divergent</h3>
                        <div class="price">$19.99 <span>$25.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="the_sentinel.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The sentinel</h3>
                        <div class="price">$17.00 <span>$23.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="mockingjay.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Mockingjay</h3>
                        <div class="price">$16.99 <span>$19.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>
    </section>

    <section class="featured" id="featured">
        <h1 class="heading"> <span>Romantic</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="they_both_die_.jpg">
                    </div>
                    <div class="content">
                        <h3>They both die</h3>
                        <div class="price">$14.99 <span>$18.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="redwithe.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Redwhite</h3>
                        <div class="price">$16.99 <span>$21.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="ugly_love.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Ugly love</h3>
                        <div class="price">$21.99 <span>$26.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="wish_you_were_here.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Wish you were here</h3>
                        <div class="price">$20.00 <span>$24.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="the_notebook.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The notebook</h3>
                        <div class="price">$14.99 <span>$19.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>
    </section>


    <section class="featured" id="featured">
        <h1 class="heading"> <span>Classic</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="one_hundret_years.jpg">
                    </div>
                    <div class="content">
                        <h3>One hundred years</h3>
                        <div class="price">$17.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="great_gatsby.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The Great Gatsby</h3>
                        <div class="price">$14.99 <span>$19.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="hamletii.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Hamlet</h3>
                        <div class="price">$18.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="the_divine_comedy.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The divine comedy</h3>
                        <div class="price">$20.00 <span>$23.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="iliad.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The iliad</h3>
                        <div class="price">$20.99 <span>$24.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>
    </section>

    <section class="featured" id="featured">
        <h1 class="heading"> <span>Fantasy</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="the_final_empire.jpg">
                    </div>
                    <div class="content">
                        <h3>The final empire</h3>
                        <div class="price">$13.99 <span>$16.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="the_name_of_the_wind.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The name of</h3>
                        <div class="price">$16.99 <span>$20.00</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="harry_poter.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Harry potter</h3>
                        <div class="price">$17.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="the_lord_of_the_rings.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The lord of the rings</h3>
                        <div class="price">$12.00 <span>$15.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="the_witcher.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The witcher</h3>
                        <div class="price">$15.00 <span>$17.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>

    </section>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->

    <script>
        var swiper = new Swiper(".featured-slider", {
            spaceBetween: 10,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
            },


            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                450: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });
    </script>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>


</body>

</html>