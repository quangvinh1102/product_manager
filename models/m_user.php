<?php 
class m_user extends DB{

    public function getAllUser(){
        $sql = "SELECT * FROM `user`";
        return $this->get_list($sql);
    }

    public function addUser($username, $email, $password) {
        $sql = "INSERT INTO `user` VALUES (null,'$username', '$email', '$password', 1)";
        return $this->query($sql);
    }

    public function updateUser($id, $username, $email, $password) {
        $sql = "UPDATE `user` SET `id`='$id',`username`='$username', `email`='$email', `password`='$password' WHERE id = $id";
        return $this->query($sql);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM `user` WHERE id = $id";

        return $this->query($sql);
    }

    public function getUserBy($id) {
        $sql = "SELECT * FROM `user` WHERE id = $id";
        return $this->get_row($sql);
    }

    function login_account($a,$b){
        $sql = "SELECT *  FROM user WHERE email = '$a' AND password = '$b'";
        $b = $this->get_row($sql);
        return $b;
    }
}