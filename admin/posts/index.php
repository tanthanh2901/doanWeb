<?php
    require '../../inc/init.php';
    $conn = require '../../inc/db.php';

    if(isset($_GET['page']) && !empty($_GET['page'])){
        $page = intval($_GET['page']);
    }else $page = 0;

    $postHref = 'postEditor.php';
    $postsPageable = Post::getAllPostsByAllStates($page, $conn);
    $posts = $postsPageable->content;
    $totalPages = $postsPageable->totalPages;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--============================================= -->
    <link rel="stylesheet" href="../../css/linearicons.css" />
    <link rel="stylesheet" href="../../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../css/magnific-popup.css" />
    <link rel="stylesheet" href="../../css/nice-select.css" />
    <link rel="stylesheet" href="../../css/owl.carousel.css" />
    <link rel="stylesheet" href="../../css/bootstrap.css" />
    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../../css/themify-icons.css" />
    <link rel="stylesheet" href="../../css/main.css" />
    <link rel="stylesheet" href="../../css/userDashboard.css"/>
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <!-- blog card left -->
                    <div class="col-lg-6 col-md-6">
                    <?php
                        $start = 0;$end= (count($posts)+1)/2;
                        $postsHalfTop = array_slice($posts, $start, $end);
                        foreach($postsHalfTop as $post){
                        require '../../inc/postCard.php';
                        }
                    ?>
                    </div>
                    <!-- blog card right -->
                    <div class="col-lg-6 col-md-6">
                    <?php 
                        $start = (count($posts)+1)/2;$end= count($posts);
                        $postsHalfTop = array_slice($posts, $start, $end);
                        foreach($postsHalfTop as $post){
                        require '../../inc/postCard.php';
                        }
                    ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?php require '../../inc/pagination.php';?>
                    </div>
                </div>
            </div>

            <!-- Start Blog Post Siddebar -->

            <!-- End Blog Post Siddebar -->
        </div>
    </div>
</body>
</html>