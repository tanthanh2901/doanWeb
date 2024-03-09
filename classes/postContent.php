<?php
    class PostContent{
        public $id;
        public $content;

        public function __construct($content='') {
            $this->content = $content;
        }
        //Phương thức kiểm tra nhập dữ liệu
        protected function validate(){
            $rs = $this->content != '';
            return $rs;
        }
        // get postContent by Id
        public static function getPostContent($id, $conn){
            $sql = "select * from posts where id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'PostContent'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $states = $stmt->fetch(); // Lấy ra cái đối tượng
            return $states;
        }
        // add post 
        public function addPostContent($conn){
            if($this->validate()){  
                //Tạo câu lệnh insert chống SQL injection
                $sql = "
                    insert into postcontent(content)
                    values(:content);
                ";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':content', $this->content, PDO::PARAM_STR);
                $stmt->execute();

                return $conn->lastInsertId();
            }else{
                return null;
            }
        }
    }
?>