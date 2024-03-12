<?php
    class Pageable{
        public $first;
        public $last;
        public $content;
        public $pageNumber;
        public $totalPages;

        public function __construct($first=false, $last=false, $content=array(), $totalPages=0, $pageNumber=0) {
            $this->first = $first;
            $this->last = $last;
            $this->content = $content;
            $this->totalPages = $totalPages;
            $this->pageNumber = $pageNumber;
        }

        //get total pages
        public static function getTotalPages($yourtable, $condition, $conn){
            $sql = "SELECT CEIL(COUNT(*)/ :pageSize) AS totalPages from $yourtable $condition";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':pageSize', PAGE_SIZE, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $totalPages = $stmt->fetch();
            return (int)$totalPages['totalPages'];
        }
    }
?>