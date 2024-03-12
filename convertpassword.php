<?php
    require './inc/init.php';
    $user = new User("admin123", 'admin123');
    $conn = require './inc/db.php';
    if($user->addUser($conn)){
        echo 'add user successfully';
    }else echo 'add user failed';

?>