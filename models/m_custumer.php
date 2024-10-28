<?php 
class m_custumer extends DB{
    public function getCustumer(){
        $sql = "SELECT custumer.*, user.username, user.email
                FROM custumer
                JOIN user ON custumer.user_id = user.id;";
        return $this->get_list($sql);
    }

    public function addCustumer($user_id, $product_id, $address, $phone, $des) {
        $sql = "INSERT INTO `custumer` VALUES (null,'$user_id','$product_id','$address','$phone', '$des')";
        return $this->query($sql);
    }

    public function updateCustumer($id, $user_id, $product_id, $address, $phone, $des) {
        $sql = "UPDATE `custumer` SET `id`='$id',`user_id`='$user_id', `product_id`='$product_id',`address`='$address',`phone`='$phone', `desciption`='$des' WHERE id = $id";
        return $this->query($sql);
    }

    public function deleteCustumer($id)
    {
        $sql = "DELETE FROM `custumer` WHERE id = $id";

        return $this->query($sql);
    }

    public function getCustumerBy($id) {
        $sql = "SELECT * FROM `custumer` WHERE id = $id";
        return $this->get_row($sql);
    }

    public function getAllUser() {
        $sql = "SELECT * FROM `user` WHERE role = 1";
        return $this->get_list($sql);
    }
}