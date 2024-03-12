<?php
    class PostDetail{
        public $id;
        public $title;
        public $content;
        public $img;
        public $stateID;
        public $userID;
        public $date;
        public $category;

        public function __construct($id=null, $title='', $content='', $category='', $stateID='', $userID='', $date='', $img='') {
            if($title!='' && $content!='' && $stateID!='' && $userID!='' && $date != ''){
                $this->id = $id;
                $this->title = $title;
                $this->content = $content;
                $this->category = $category;
                $this->stateID = $stateID;
                $this->userID = $userID;
                $this->date = $date;
                $this->img = $img;
            }
        }

        public static function getPostDetail($postID, $stateID, $conn){
            $sql = "select * from postDetail where id=:postID AND stateID=:stateID";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':stateID', $stateID, PDO::PARAM_STR);
            $stmt->bindValue(':postID', $postID, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'PostInfo'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $postDetails = $stmt->fetchAll(); // Lấy ra cái đối tượng

            $result = $postDetails[0];
            $categories = array();
            foreach($postDetails as $postDetail){
                $categories[] = $postDetail->category;
            }
            $result->category = $categories;

            return $result;
        }

        public function addPostDetail($conn){
            //Tạo câu lệnh insert chống SQL injection
            $sql = "
                CALL insertPost(:postContent, :postTitle, :stateID, :userID, :postImg, :date, :categpryIDsText) 
            ";
            
            $categories = json_encode($this->category);

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':postTitle', $this->title, PDO::PARAM_STR);
            $stmt->bindValue(':postContent', $this->content, PDO::PARAM_STR);
            $stmt->bindValue(':postImg', $this->img, PDO::PARAM_STR);
            $stmt->bindValue(':stateID', $this->stateID, PDO::PARAM_STR);
            $stmt->bindValue(':userID', $this->userID, PDO::PARAM_STR);
            $stmt->bindValue(':date', $this->date, PDO::PARAM_STR);
            $stmt->bindValue(':categpryIDsText', $categories, PDO::PARAM_STR);
            return $stmt->execute();
        }

    }
?>