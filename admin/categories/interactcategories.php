<?php
    require '../../inc/init.php';

    Auth::requireLogin();
    $user = $_SESSION['user'];
    $roles = $user->role;
    if(in_array('ADMIN', $roles)){
        $conn = require '../../inc/db.php';

        $rawData = file_get_contents("php://input");
        // Decode the JSON data to PHP array
        $data = json_decode($rawData, true);
        try {
            if(isset( $data['category']) && !empty($data['category'])){
                $categoryName = $data['category'];
                $category = new Category($categoryName);
                $state = $category->addCategory($conn);
            }
            else if(isset( $data['deleteCategory']) && !empty($data['deleteCategory'])){
                $deleteCategory = $data['deleteCategory'];
                $deleteCategory = Category::getCategoryByID($deleteCategory, $conn);
                $state = $deleteCategory->deleteCategory($conn);
            }
            $result = array('status'=> $state);
        } catch (Exception $ex) {
            $result = array('status'=> false);
        }
        echo json_encode($result);
    }else {
        header("Location: ../../index.php");
    }
?>