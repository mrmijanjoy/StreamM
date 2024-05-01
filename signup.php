<?php include "lib/header.php"; ?>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Homepage</a></li>
                            <li><a href="./categories.php">Categories <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="./categories.php">Categories</a></li>
                                    <li><a href="./anime-details.php">Anime Details</a></li>
                                    <li><a href="./anime-watching.php">Anime Watching</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                    <li><a href="./signup.php">Sign Up</a></li>
                                    <li><a href="./login.php">Login</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="./login.php"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->

<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Sign Up</h2>
                    <p>Welcome to the official Anime blog.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Signup Section Begin -->
<section class="signup spad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login__form">
                    <h3>Sign Up</h3>
                    <form action="#">
                        <div class="input__item ">
                            <input class="col-md-12" type="text" placeholder="Email address">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" placeholder="Your Name">
                            <span class="icon_profile"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" placeholder="Password">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Login Now</button>
                    </form>
                    <h5>Already have an account? <a href="#">Log In!</a></h5>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Signup Section End -->

<?php include "lib/footer.php"; ?>