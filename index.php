<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PG hotel booking website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--custome css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!--header section starts-->
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a herf="a" class="logo">
            <spam>pg</spam>hotel
        </a>
        <nav class="navbar">
            <a herf="#home">home</a>
            <a herf="#book">book</a>
            <a herf="#packages">packages</a>
            <a herf="#services">services</a>
            <a herf="#gallery">gallery</a>
            <a herf="#review">review</a>
            <a herf="#contact">contact</a>
        </nav>


        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

           <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <lable for="search-bar" class="fas fa-search"></lable>
        </form>
    </header>

    <!--header secton ends -->

    <!--login form container -->

    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i> 

        <form method="post" action="login.php">
            <h3>login</h3>
            <label for="email">Email</label>
            <input type="email" class="box" placeholder="enter your email" name="email" required/>
            <label for="password">password</label>
            <input type="password" class="box" placeholder="password" name="password" required/>
            <input type="submit" value="login" class="btn" name="btn-login">
            <a href="registration.php" class="btn"> signup</a>
        </form>
    </div>

    <!--home section starts-->

    <section class="home" id="home">
        <div class="content">
            <h3>welcome to a global icon of luxury</h3>
            <p>discover new places with us, luxury awaits</p>
            <a href="#" class="btn">discover more</a>
        </div>

        <div class="controls">
            <span class="vid-btn" data-src="video/vid-1.mp4"></span>
        </div>

        <div class="video-container">
            <video src="video/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!--home section ends-->

    <!--booking section starts -->

    <section class="book" id="book">
        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">
            <div class="img">
                <img src="img/book-img.jpg" alt="">
            </div>

            <form action="" method="post">
                <div class="inputBox">
                    <h3>name</h3>
                    <input type="text" placeholder=" name" required/>
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guests" required/>
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date" required/>
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" required/>
                </div>
   <a href="page.php" class="btn"> Book Now</a>
            </form>
        </div>

    </section>
    <!--booking section ends -->

    <!--packages section starts-->

    <section class="packages" id="packages">
        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <img src="img/p-1.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> mumbai </h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> 700rs <span>2000rs</span></div>
                    <a href="page.php" class="btn">book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="img/p-2.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> delhi </h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> 700rs <span>2000rs</span></div>
                    <a href="page.php" class="btn">book Now</a>

                </div>
            </div>

            <div class="box">
                <img src="img/p-3.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> uttarakhand </h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> 700rs <span>2000rs</span></div>
                    <a href="page.php" class="btn">book Now</a>

                </div>
            </div>

            <div class="box">
                <img src="img/p-4.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> gujarat </h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> 700rs <span>2000rs</span></div>
                    <a href="page.php" class="btn">book Now</a>

                </div>
            </div>
            <div class="box">
                <img src="img/p-5.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> tamil nadu </h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> 700rs <span>2000rs</span></div>
                    <a href="page.php" class="btn">book Now</a>

                </div>
            </div>

            <div class="box">
                <img src="img/p-6.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> kerala </h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> 700rs <span>2000rs</span></div>
                    <a href="page.php" class="btn">book Now</a>

                </div>
            </div>
        </div>
    </section>

    <!--packages section ends-->

    <!--services section starts-->

    <section class="services" id="services">
        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem Ipsum is simple dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry </p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Lorem Ipsum is simple dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry </p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Lorem Ipsum is simple dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry </p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the india</h3>
                <p>Lorem Ipsum is simple dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry </p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Lorem Ipsum is simple dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry </p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Lorem Ipsum is simple dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simple dummy text of the farhan and typesetting industry </p>
            </div>
        </div>

    </section>
    <!--services section ends-->

    <!--gallery section starts-->

    <section class="gallery" id="gallery">
        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>


        <div class="box-container">
            <div class="box">
                <img src="img/g-1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem Ipsm is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/g-2.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem Ipsm is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/g-3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem Ipsm is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/g-4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem Ipsm is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/g-5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem Ipsm is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/g-6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem Ipsm is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/g-7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem Ipsm is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/g-8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem Ipsm is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/g-9.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem Ipsm is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
        </div>
    </section>
    <!--gallery section ends-->

    <!-- review section start -->

    <section class="review" id="review">
        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>
        <div class="swiper mySwiper review-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/pic1.png" alt="">
                        <h3>tina</h3>
                        <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/pic2.png" alt="">
                        <h3>kishan</h3>
                        <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/pic3.png" alt="">
                        <h3>leena</h3>
                        <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/pic4.png" alt="">
                        <h3>jhon</h3>
                        <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- review section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">
        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>
        <div class="row">
            <div class="img">
                <img src="img/contact-img.jpg" alt="">
            </div>
            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>
        </div>
    </section>

    <!-- contact section ends -->


    <!-- footer section -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Totam natus asperiores voluptas aliquam vitae odio. Beatae doloribus facere nostrum magni.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">delhi</a>
                <a href="#">mumbai</a>
                <a href="#">gujarat</a>
                <a href="#">uttarakhand</a>
                <a href="#">tamil nadu</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">package</a>
                <a href="#">service</a>
                <a href="#">gallery</a>
                <a href="#">review</a>
                <a href="#">contact</a>
                <a href="#">book</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">likedin</a>
            </div>
        </div>
        <h1 class="credit"> created by <span>mohit</span> | all rights reserved!! </h1>
    </section>














    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!--custome js file link-->
    <script>
        let searchBtn = document.querySelector('#search-btn');
        let searchBar = document.querySelector('.search-bar-container');
        let formBtn = document.querySelector('#login-btn');
        let loginform = document.querySelector('.login-form-container');
        let formclose = document.querySelector('#form-close');
        let menu = document.querySelector('#menu-bar');
        let navbar = document.querySelector('.navebar');
        let bt = document.querySelectorAll('.btn');

        bt.onclick = () => {
            window.location.href = 'booking_page/page.php'
        }

        window.onscroll = () => {
            searchBtn.classList.remove('fa-times');
            searchBar.classList.remove('active');
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
            loginform.classList.remove('active');
        }

        menu.addEventListener('click', () => {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        });

        searchBtn.addEventListener('click', () => {
            searchBtn.classList.toggle('fa-times');
            searchBar.classList.toggle('active');
        });

        formBtn.addEventListener('click', () => {
            loginform.classList.add('active');
        });

        formclose.addEventListener('click', () => {
            loginform.classList.remove('active');
        });

        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnIneraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });



    </script>


</body>

</html>