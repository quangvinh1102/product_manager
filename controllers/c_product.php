<?php
include_once "models/m_cart.php";
class c_product extends Controller{


    public function cart() {
        $result = new m_cart();
        $products = $result->listCart($_SESSION['login']["id"]);
        $this->view('cart/cart', compact('products'));
    }

    public function delete() {
        if (isset($_GET["id"])) {
            $result = new m_cart();
            $deletee = $result->deleteCart($_GET["id"]);
            if ($deletee) {
                setcookie("suc", "Xóa hóa đơn thành công!", time() + 1, "/", "", 0);
            }
            $this->redirect($this->base_url("product/cart"));
        }
    }

    public function payment() {
        $result = new m_cart();
        $deletee = $result->deleteAll(id: $_SESSION['login']["id"]);
        if ($deletee) {
            setcookie("suc", "Xóa hóa đơn thành công!", time() + 1, "/", "", 0);
        }
        $this->redirect($this->base_url("product/cart"));
    }

}