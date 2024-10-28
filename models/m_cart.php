<?php 
class m_cart extends DB{

    public function addCart($user_id, $product_id, $quantity) {
        $sql = "INSERT INTO `cart` VALUES (null,'$user_id','$product_id','$quantity')";
        return $this->query($sql);
    }

    public function listCart($id) {
        $sql = "SELECT cart.*, tb_product.name, tb_product.price, tb_product.description, tb_product.img FROM cart
                JOIN tb_product ON cart.product_id = tb_product.id WHERE cart.user_id = $id;";
        return $this->get_list($sql);
    }

    public function deleteCart($id) {
        $sql = "DELETE FROM `cart` WHERE id = $id";

        return $this->query($sql);
    }

    public function deleteAll($id) {
        $sql = "DELETE FROM cart WHERE user_id = $id";
        return $this->query($sql);
    }
}