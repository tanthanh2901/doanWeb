<?php
    require '../../inc/init.php';
    $conn = require '../../inc/db.php';

    $rawData = file_get_contents("php://input");
    // Decode the JSON data to PHP array
    $data = json_decode($rawData, true);

    $query = $data['query'];

    $postsPageable = Post::searchAllPosts($query, 0, $conn);
    $posts = $postsPageable->content;
    echo json_encode($posts);
?>