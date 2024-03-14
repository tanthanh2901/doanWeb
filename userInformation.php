<?php  
  require "./inc/init.php";

  $conn = require "./inc/db.php";

  $categories = Category::getAllCategories($conn);
  
  $userName = $_SESSION['username'];
  $user = User::getUserByUsername($userName, $conn);
  $userID = $user->id;
  $userPosts = User::getCountPost($conn, $userID);

  $state = State::getPublicState($conn);
  $posts = User::getPostsByUser($userID, $state->id, $conn);
?>
<?php require "inc/header.php"; ?>

    <div style="background-color:#ddb7b7; color: #161313; margin-top: 32px; padding: 16px 0px;" class="container text-center">
      <div class="row">
        <div class="col-3">
          <img src="<?= $user->userAvt ?>" style="width: 120px; 
                                              height: 120px;
                                              border-radius: 12px" alt="avatar-profile">
        </div>
        <div class="col">
          <div class="row">
            User name: <?= $userName ?>
          </div>
          <div class="row">
            Posted: <?= $userPosts ?>
          </div>
          <!-- <div class="row">
                <div class="col-3">
                  date register
                  <div class="row-3">
                    data
                  </div>
                </div>
                <div class="col-3">
                  count login
                  <div class="row-3">
                    data
                  </div>
                </div>
                <div class="col-3">
                  last login
                  <div class="row-3">
                    data
                  </div>
                </div>
              </div> -->

        </div>
      </div>
    </div>

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
              <div class="col-lg-12 d-flex justify-content-center">
                <a class="btn btn-secondary" href="archive.php">More posts</a>
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