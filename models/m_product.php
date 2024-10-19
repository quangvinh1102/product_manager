<?php 
class m_product extends DB{

    public function getAllProduct(){
        $sql = "SELECT * FROM `tb_product`";
        return $this->get_list($sql);
    }

    public function addProduct($name, $quanlity, $price, $img, $des) {
        $sql = "INSERT INTO `tb_product` VALUES (null,'$name','$quanlity','$price','$img','$des')";
        return $this->query($sql);
    }

    public function updateProduct($id, $name, $quanlity, $price, $img, $des) {
        $sql = "UPDATE `tb_product` SET `id`='$id', `name`='$name',`quanlity`='$quanlity',`price`='$price',`img`='$img',`description`='$des' WHERE id = $id";
        return $this->query($sql);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM `tb_product` WHERE id = $id";

        return $this->query($sql);
    }

    public function getProductBy($id) {
        $sql = "SELECT * FROM `tb_product` WHERE id = $id";
        return $this->get_row($sql);
    }
}