<?php
    require '../../inc/init.php';
    require "../../classes/auth.php";

    $conn = require "../../inc/db.php";
    $categories = Category::getAllCategories($conn);
    $states = State::getAllStates($conn);
    $updatePath = 'postUpdating.php';
  
    if(isset($_GET['p']) && !empty($_GET['p'])){
        $postID = intval($_GET['p']);
        $postDetail = PostDetail::getPostDetailByUserID($postID, 1, $conn);
        $postTitle = $postDetail->title;
        $postImg = $postDetail->img;
        $postContent = $postDetail->content;
        $postStateID = $postDetail->stateID;
        $postcategories = $postDetail->category;
    }else{
        header('Location: /posts.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
        rel="stylesheet"
    />

    <!--CSS============================================= -->
    <link rel="stylesheet" href="../../css/linearicons.css" />
    <link rel="stylesheet" href="../../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../css/magnific-popup.css" />
    <link rel="stylesheet" href="../../css/nice-select.css" />
    <link rel="stylesheet" href="../../css/owl.carousel.css" />
    <link rel="stylesheet" href="../../css/bootstrap.css" />
    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../../css/themify-icons.css" />
    <link rel="stylesheet" href="../../css/bootstrap.css"/>
    <!-- <link rel="stylesheet" href="../../css/main.css"/> -->
    <link rel="stylesheet" href="../../css/text-editor-saving.css"/>
    <link rel="stylesheet" href="../../css/text-editor.css">


    <script src="../../js/getDotenv.js"></script>
    <script src="../../js/imageProcessing.js"></script>
</head>
<body>
    <?php require '../../inc/text-editor-update.php'?>
</body>
<script src="../../js/categoryCheckBox.js"></script>
<script src="../../js/text-editor.js" defer></script>
<script src="../../js/updatePost.js"></script>
</html>