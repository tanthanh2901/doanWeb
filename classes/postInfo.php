<?php
    class PostInfo{
        public $id;
        public $postContentID;
        public $postTitle;
        public $postImg;
        public $stateID;
        public $userID;
        public $date;
        public $category;

        public function __construct($id=null, $postTitle='', $postContentID='', $postImg='', $stateID='', $userID='', $date='', $category='') {
            if($postTitle!='' && $postContentID!='' && $stateID!='' && $userID!='' && $date != '' && $category!= ''){
                $this->id = $id;
                $this->postTitle = $postTitle;
                $this->postContentID = $postContentID;
                $this->postImg = $postImg;
                $this->stateID = $stateID;
                $this->userID = $userID;
                $this->date = $date;
                $this->category = $category;
            }
        }

        public static function getPostsByCategory($category, $stateID, $conn){
            $sql = "select * from postInfo where category=:category AND stateID=:stateID";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':stateID', $stateID, PDO::PARAM_STR);
            $stmt->bindValue(':category', $category, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'PostInfo'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $states = $stmt->fetchAll(); // Lấy ra cái đối tượng
            return $states;
        }
    }

?>