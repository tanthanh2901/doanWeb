<?php
    class UserRoles{
        public $id;
        public $username;
        public $role;

        public function __construct($username='') {
            if($username!=''){
                $this->username = $username;
            }
        }


        public function getUserRoles($conn){
            $sql = "
                select * from userroles
                where username=:username;
            ";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'UserRoles');
            $stmt->execute();
            $users = $stmt->fetchAll();

            $result = $users[0];
            $roles = array();
            foreach($users as $user){
                $roles[] = $user->role;
            }
            $result->role = $roles;

            return $result;
        }
        
    }

?>