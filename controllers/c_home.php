<?php 
include_once "models/m_product.php";
include_once "models/m_nav.php";  
class c_home extends Controller{

    public function index(){
        $result = new m_product();
        $result1 = new m_nav();
        $products = $result->getAllProduct();
        $navs = $result1->getNav();
        $this->view('dashboard/dashboard', compact('products', 'navs'));
    }

}