<?php 
  require "./inc/init.php";
  require "./classes/auth.php";

  $conn = require "./inc/db.php";
  $categories = Category::getAllCategories($conn);
  $state = State::getPublicState($conn);
  $posts = Post::getAllPosts($state->id, $conn);
?>
<?php require "inc/header.php"; ?>

    <!--================ Start banner Area =================-->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
      <div class="banner-content text-center">
        <h1>Category Page</h1>
        <p>Elementum libero hac leo integer. Risus hac parturient feugiat litora <br /> cursus hendrerit bibendum per </p>
      </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-gap relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
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
