<?php
    require './inc/init.php';

    try {
        $conn = require './inc/db.php';
    
        $rawData = file_get_contents("php://input");
    
        // Decode the JSON data to PHP array
        $data = json_decode($rawData, true);
    
        $query = $data['query'];
        // $query = $_POST['query'];
        $state = State::getPublicState($conn);
        $postsPageable = Post::searchPosts($query, $state->id, 0, $conn);
        $posts = $postsPageable->content;
        echo json_encode($posts);
    } catch (Exception $e) {
        $e->getMessage();
        $error = array("error"=> "Missing query data!");
        echo json_encode($error);
    }
?>