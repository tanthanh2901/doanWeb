<?php
    class Post{
        public $id;
        public $postContentID;
        public $postTitle;
        public $postImg;
        public $stateID;
        public $userID;
        public $date;

        public function __construct($id=null, $postTitle='', $postContentID='', $postImg='', $stateID='', $userID='', $date='') {
            if($postTitle!='' && $postContentID!='' && $stateID!='' && $userID!='' && $date != ''){
                $this->id = $id;
                $this->postTitle = $postTitle;
                $this->postContentID = $postContentID;
                $this->postImg = $postImg;
                $this->stateID = $stateID;
                $this->userID = $userID;
                $this->date = $date;
            }
        }
        //Phương thức kiểm tra nhập dữ liệu
        protected function validate(){
            $rs = $this->postContentID != '' && $this->postTitle != '' && 
                $this->stateID && $this-> userID;
            return $rs;
        }
        //get all posts
        public static function getAllPosts($stateID, $pageNumber,$conn){
            $sql = "SELECT * from posts where stateID=:stateID limit :pageSize offset :pageNumber";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':stateID', $stateID, PDO::PARAM_STR);
            $stmt->bindValue(':pageSize', PAGE_SIZE, PDO::PARAM_INT);
            $stmt->bindValue(':pageNumber', $pageNumber*PAGE_SIZE, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $posts = $stmt->fetchAll(); // Lấy ra cái đối tượng
            // pageable
            $totalPages = Pageable::getTotalPages('posts', 'where stateID='.$stateID, $conn);
            $pageable = new Pageable(false, false, $posts, $totalPages, $pageNumber);

            return $pageable;
        }

        //get total pages
        public static function getTotalPages($conn){
            $sql = "SELECT ceil(count(*)/:pageSize) AS totalPages from posts";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':pageSize', PAGE_SIZE, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute(); // Thực hiện câu lệnh sql
            $totalPages = $stmt->fetch(); // Lấy ra cái đối tượng
            return $totalPages;
        }
        // get post by id
        public static function getPost($postID, $stateID, $conn){
            $sql = "select * from posts where id=:postID AND stateID=:stateID";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':stateID', $stateID, PDO::PARAM_STR);
            $stmt->bindValue(':postID', $postID, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $posts = $stmt->fetch(); // Lấy ra cái đối tượng
            return $posts;
        }
        // get posts by ids
        public static function getPosts($postIDs, $conn){
            $placeholders = implode(',', array_fill(0, count($postIDs), '?'));
            $sql = "SELECT * FROM posts WHERE id IN ($placeholders)";
            $stmt = $conn->prepare($sql);
            foreach ($postIDs as $index => $category) {
                $stmt->bindValue($index + 1, $category, PDO::PARAM_STR);
            }
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
            $stmt->execute();
            $posts = $stmt->fetchAll();
            return $posts;
        }

        // get random entities
        public static function getPostsRandomly($stateID, $conn){
            $sql = "
                SELECT * FROM posts
                WHERE stateID=:stateID
                ORDER BY RAND()
                LIMIT 4;
            ";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':stateID', $stateID, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
            $stmt->execute();
            $posts = $stmt->fetchAll();
            return $posts;
        }

        // search posts
        public static function searchPosts($postTitle, $stateID, $pageNumber,$conn){
            $sql = "
                select * from posts 
                where postTitle like :postTitle and stateID=:stateID
                limit :pageSize offset :pageNumber
            ";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':pageSize', PAGE_SIZE, PDO::PARAM_INT);
            $stmt->bindValue(':pageNumber', $pageNumber*PAGE_SIZE, PDO::PARAM_INT);
            $stmt->bindValue(':postTitle', '%'.$postTitle.'%', PDO::PARAM_STR);
            $stmt->bindValue(':stateID', $stateID, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $posts = $stmt->fetchAll(); // Lấy ra cái đối tượng

            // pageable
            $condition = "where postTitle like '%$postTitle%' and stateID=$stateID";
            $totalPages = Pageable::getTotalPages('posts', $condition, $conn);
            $pageable = new Pageable(false, false, $posts, $totalPages, $pageNumber);

            return $pageable;
        }

        // add post 
        public function addPost($conn){
            if($this->validate()){  
                //Tạo câu lệnh insert chống SQL injection
                $sql = "
                    insert into posts(postTitle, postContentID, postImg, stateID, userID, date)
                    values(:postTitle, :postContentID, :postImg, :stateID, :userID, :date);
                ";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':postTitle', $this->postTitle, PDO::PARAM_STR);
                $stmt->bindValue(':postContentID', $this->postContentID, PDO::PARAM_STR);
                $stmt->bindValue(':postImg', $this->postImg, PDO::PARAM_STR);
                $stmt->bindValue(':stateID', $this->stateID, PDO::PARAM_STR);
                $stmt->bindValue(':userID', $this->userID, PDO::PARAM_STR);
                $stmt->bindValue(':date', $this->date, PDO::PARAM_STR);
                $stmt->execute();

                return $conn->lastInsertId();
            }else{
                return null;
            }
        }

    }
?>