<?php
    require './inc/init.php';
    $conn = require './inc/db.php';

    $query = $_POST['query'];
    $state = State::getPublicState($conn);
    $postsPageable = Post::searchPosts($query, $state->id, 0, $conn);
    $posts = $postsPageable->content;
    echo json_encode($posts);
?>