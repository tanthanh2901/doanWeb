<?php  
  require "./inc/init.php";
  require "./classes/auth.php";

  $conn = require "./inc/db.php";
  $categories = Category::getAllCategories($conn);
  $state = State::getPublicState($conn);
  $posts = Post::getAllPosts($state->id, $conn);
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
            <!-- blog post -->
            <div class="row">
              <!-- blog card left -->
              <div class="col-lg-6 col-md-6">
                <?php
                  $start = 0;$end= (count($posts)+1)/2;
                  $postsHalfTop = array_slice($posts, $start, $end);
                  foreach($postsHalfTop as $post){
                    require './inc/postCard.php';
                  }
                ?>
              </div>
              <!-- blog card right -->
              <div class="col-lg-6 col-md-6">
                <?php 
                  $start = (count($posts)+1)/2;$end= count($posts);
                  $postsHalfTop = array_slice($posts, $start, $end);
                  foreach($postsHalfTop as $post){
                    require './inc/postCard.php';
                  }
                ?>
              </div>
            </div>
            <!-- pagination -->
            <div class="row">
              <div class="col-lg-12">
                  <?php require './inc/pagination.php';?>
              </div>
            </div>
          </div>

          <!-- Start Blog Post Siddebar -->
          <?php require './inc/postSideBar.php';?>
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
    <script src="js/searchDropdown.js"></script>
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

    <!-- <script>
      let searchBar = document.getElementById('search-bar');
      searchBar.addEventListener('keyup', (event)=>{
        var query = event.target.value;
        fetch('search.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'query=' + encodeURIComponent(query),
        })
        .then(response => response.json())
        .then(data => {
            // Display the search results
            // You can modify this part based on how you want to display the results
            console.log(data);
        });
      })
    </script> -->


  </body>
</html>