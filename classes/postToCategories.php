<?php
    class PostToCategories{
        public $postID;
        public $categoryID;

        public function __construct($postID='', $categoryID='') {
            if($postID !='' && $categoryID!=''){
                $this->postID = $postID;
                $this->categoryID = $categoryID;
            }
        }
        //Phương thức kiểm tra nhập dữ liệu
        protected function validate(){
            $rs = $this->postID != '' && $this->categoryID != '';
            return $rs;
        }
        // get postToCategories by postid
        public static function getPostToCategories($postID, $conn){
            $sql = "select * from posttocategories where postID=:postID";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':postID', $postID, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'PostToCategories'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $postToCategories = $stmt->fetchAll(); // Lấy ra cái đối tượng
            return $postToCategories;
        }
        public function addPostToCategories($conn){
            if($this->validate()){  
                //Tạo câu lệnh insert chống SQL injection
                $sql = "
                    insert into posttocategories(postID, categoryID)
                    values(:postID, :categoryID);
                ";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':postID', $this->postID, PDO::PARAM_STR);
                $stmt->bindValue(':categoryID', $this->categoryID, PDO::PARAM_STR);
                return $stmt->execute();
            }else{
                return false;
            }
        }
    }

?>