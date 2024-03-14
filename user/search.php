<?php
    require '../inc/init.php';
    $conn = require '../inc/db.php';

    $userID = 1;

    $rawData = file_get_contents("php://input");
    // Decode the JSON data to PHP array
    $data = json_decode($rawData, true);

    $query = $data['query'];
    $stateID = $data['state'];

    $postsPageable = Post::searchPostsOfUser($query, $stateID, $userID, 0, $conn);
    $posts = $postsPageable->content;
    echo json_encode($posts);
?>