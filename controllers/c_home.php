<?php 
include_once "models/m_product.php";
class c_home extends Controller{

    public function index(){
        $result = new m_product();
        $products = $result->getAllProduct();
        $this->view('dashboard/dashboard', compact('products'));
    }

}