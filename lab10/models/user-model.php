<?php
class UserModel {
    private $link;

    public function __construct($link) {
        $this->link = $link;
    }

    public function getAllUsers() {
        $result = mysqli_query($this->link, "SELECT name, url FROM users");
        if (!$result) {
            die("Lỗi truy vấn: " . mysqli_error($this->link));
        }
        
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        return $users;
    }

    public function searchUsers($keyword) {
        $keyword = mysqli_real_escape_string($this->link, $keyword);
        $query = "SELECT name, url FROM users 
                 WHERE name LIKE '%$keyword%' OR url LIKE '%$keyword%'";
        
        $result = mysqli_query($this->link, $query);
        if (!$result) {
            die("Lỗi truy vấn: " . mysqli_error($this->link));
        }
        
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        return $users;
    }
}
?>