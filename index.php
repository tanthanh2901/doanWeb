<?php  
   require "classes/auth.php";
   session_start();
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Revive</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body>
    <header class="header-area">
      <!-- top bar -->
      <div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<!-- <span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span> -->
            <?php
              echo '<a href="#" class="left-topbar-item">About</a>';
              echo '<a href="#" class="left-topbar-item">Contact</a>';
              echo '<a href="registration.php" class="left-topbar-item">Sign up</a>';
              if(Auth::isLoggedIn()){
                echo '<a href="logout.php" class="left-topbar-item">Logout</a>';
              }
              else{
                echo '<a href="login.php" class="left-topbar-item">Login</a>';
              }
            ?>
						
					</div>

					<div class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>
      <!--================ Start Header Area =================-->
      <div class="container">
        <div class="header-wrap">
          <div
            class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg"
          >
            <div class="col menu-left">
              <a class="active" href="index.php">Home</a>
              <a href="category.php">Category</a>
              <a href="archive.php">Archive</a>
            </div>
            <div class="col-5 text-lg-center mt-2 mt-lg-0">
              <span class="logo-outer">
                <span class="logo-inner">
                  <a href="index.php"
                    ><img class="mx-auto" src="img/logo.png" alt=""
                  /></a>
                </span>
              </span>
            </div>
            <nav class="col navbar navbar-expand-lg justify-content-end">
              <!-- Toggler/collapsibe Button -->
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#collapsibleNavbar"
              >
                <span class="lnr lnr-menu"></span>
              </button>

              <!-- Navbar links -->
              <div
                class="collapse navbar-collapse menu-right"
                id="collapsibleNavbar"
              >
                <ul class="navbar-nav justify-content-center w-100">
                  <li class="nav-item hide-lg">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item hide-lg">
                    <a class="nav-link" href="category.php">Category</a>
                  </li>
                  <!-- Dropdown -->
                  <!-- <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbardrop"
                      data-toggle="dropdown"
                    >
                      Pages
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="elements.php">Elements</a>
                    </div>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="elements.php">Elements</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog-single.php">Blog Detail</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" >Login</a>
                  </li> -->
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
      
    <!--================ Start banner Area =================-->
    <section class="home-banner-area relative">
      <div class="container-fluid">
        <div class="row">
          <div class="owl-carousel home-banner-owl">
            <div class="banner-img">
              <img class="img-fluid" src="img/banner/b1.jpg" alt="" />
              <div class="text-wrapper">
                <a href="#" class="d-flex">
                  <h1>
                    Make the world a better place <br />
                    with camera
                  </h1>
                </a>
              </div>
            </div>
            <div class="banner-img">
              <img class="img-fluid" src="img/banner/b2.jpg" alt="" />
              <div class="text-wrapper">
                <a href="#" class="d-flex">
                  <h1>
                    Make the world a better place <br />
                    with camera
                  </h1>
                </a>
              </div>
            </div>
            <div class="banner-img">
              <img class="img-fluid" src="img/banner/b1.jpg" alt="" />
              <div class="text-wrapper">
                <a href="#" class="d-flex">
                  <h1>
                    Make the world a better place <br />
                    with camera
                  </h1>
                </a>
              </div>
            </div>
            <div class="banner-img">
              <img class="img-fluid" src="img/banner/b2.jpg" alt="" />
              <div class="text-wrapper">
                <a href="#" class="d-flex">
                  <h1>
                    Make the world a better place <br />
                    with camera
                  </h1>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="social-icons">
        <ul>
          <li>
            <a href="index.php"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="index.php"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="index.php"><i class="fa fa-pinterest"></i></a>
          </li>
          <li class="diffrent">sharre now</li>
        </ul>
      </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-gap relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post1.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >There's goting to be a musical about meghan
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>20th Nov, 2018</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post3.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Forest responds to consultation smoking in al
                        fresco.</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>20th Nov, 2018
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post5.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >There's goting to be a musical about meghan
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>20th Nov, 2018</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post7.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Forest responds to consultation smoking in al
                        fresco.</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>20th Nov, 2018
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6">
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post2.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >There's goting to be a musical about meghan
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>20th Nov, 2018</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post4.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Forest responds to consultation smoking in al
                        fresco.</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>20th Nov, 2018
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post6.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >There's goting to be a musical about meghan
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>20th Nov, 2018</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post8.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Forest responds to consultation smoking in al
                        fresco.</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>20th Nov, 2018
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <nav class="blog-pagination justify-content-center d-flex">
                      <ul class="pagination">
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Previous">
                                  <span aria-hidden="true">
                                      <span class="ti-arrow-left"></span>
                                  </span>
                              </a>
                          </li>
                          <li class="page-item"><a href="#" class="page-link">01</a></li>
                          <li class="page-item active"><a href="#" class="page-link">02</a></li>
                          <li class="page-item"><a href="#" class="page-link">03</a></li>
                          <li class="page-item"><a href="#" class="page-link">04</a></li>
                          <li class="page-item"><a href="#" class="page-link">09</a></li>
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Next">
                                  <span aria-hidden="true">
                                      <span class="ti-arrow-right"></span>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </nav>
              </div>
            </div>
          </div>

          <!-- Start Blog Post Siddebar -->
          <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget search-widget">
                  <form class="search-form" action="#">
                    <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>

                <div class="single-sidebar-widget instafeed-widget">
                  <h4 class="instafeed-title">Instagram</h4>
                  <ul class="instafeed d-flex flex-wrap">
                    <li><img src="img/blog/instagram/i1.jpg" alt=""></li>
                    <li><img src="img/blog/instagram/i2.jpg" alt=""></li>
                    <li><img src="img/blog/instagram/i3.jpg" alt=""></li>
                    <li><img src="img/blog/instagram/i4.jpg" alt=""></li>
                    <li><img src="img/blog/instagram/i5.jpg" alt=""></li>
                    <li><img src="img/blog/instagram/i6.jpg" alt=""></li>
                  </ul>
                </div>

                <div class="single-sidebar-widget post-category-widget">
                  <h4 class="category-title">Catgories</h4>
                  <ul class="cat-list mt-20">
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Fashion</p>
                        <p>59</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Travel</p>
                        <p>09</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Lifestyle</p>
                        <p>24</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Shopping</p>
                        <p>44</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Food</p>
                        <p>15</p>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="single-sidebar-widget popular-post-widget">
                  <h4 class="popular-title">Popular Posts</h4>
                  <div class="popular-post-list">
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.php">
                          <h6>Retro-electric 1967 Ford Mustang 
                              revealed in Russia</h6>
                        </a>
                        <p>Mate Winston | Dec 15</p>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.php">
                          <h6>Unsettling trend of food safety at 
                              sports stadiums uncovered</h6>
                        </a>
                        <p>Mate Winston | Dec 15</p>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.php">
                          <h6>Christmas cottage from the Holiday
                              flick selling for people</h6>
                        </a>
                        <p>Mate Winston | Dec 15</p>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="img-fluid" src="img/blog/pp4.jpg" alt="">
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.php">
                          <h6>Home improvement advice every 
                              homeowner needs to know</h6>
                        </a>
                        <p>Mate Winston | Dec 15</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-sidebar-widget newsletter-widget">
                  <h4 class="newsletter-title">Newsletter</h4>
                  <div class="form-group mt-30">
                    <div class="col-autos">
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'">
                    </div>
                  </div>
                  <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                </div>

                  <div class="single-sidebar-widget share-widget">
                    <h4 class="share-title">Share this post</h4>
                    <div class="social-icons mt-20">
                      <a href="#">
                        <span class="ti-facebook"></span>
                      </a>
                      <a href="#">
                        <span class="ti-twitter"></span>
                      </a>
                      <a href="#">
                        <span class="ti-pinterest"></span>
                      </a>
                      <a href="#">
                        <span class="ti-instagram"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- End Blog Post Siddebar -->
        </div>
      </div>
    </section>
    <!--================ End Blog Post Area =================-->

    <?php require "inc/footer.php"; ?>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"
    ></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>