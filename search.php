<?php
    require './inc/init.php';
    $conn = require './inc/db.php';

    $query = $_POST['query'];
    $posts = Post::searchPosts($query, $conn);
    echo json_encode($posts);
?>