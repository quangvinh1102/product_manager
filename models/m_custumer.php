<?php 
class m_custumer extends DB{
    public function getCustumer(){
        $sql = "SELECT * FROM `custumer`";
        return $this->get_list($sql);
    }

    public function addCustumer($name, $address, $phone, $des) {
        $sql = "INSERT INTO `custumer` VALUES (null,'$name','$address','$phone', '$des')";
        return $this->query($sql);
    }

    public function updateCustumer($id, $name, $address, $phone, $des) {
        $sql = "UPDATE `custumer` SET `id`='$id',`name`='$name',`address`='$address',`phone`='$phone', `desciption`='$des' WHERE id = $id";
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
}