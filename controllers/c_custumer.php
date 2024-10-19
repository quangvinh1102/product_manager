<?php
include_once "models/m_custumer.php";  
class c_custumer extends Controller{

    function __construct()
    {
        $this->auth();
    }
    
    public function index(){
        $result = new m_custumer();
        $custumers = $result->getCustumer();
        $this->view('custumer/index', compact('custumers'));
    }

    public function create(){
        if (isset($_POST["submit"])) {
            $result = new m_custumer();
            $name = $_POST["name"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $des = $_POST["description"];

            $insert = $result->addCustumer($name, $address, $phone, $des);
            if ($insert) {
                setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                $this->redirect($this->base_url("custumer/index"));
            }
        }
        $this->view('custumer/create');
    }

    public function update() {
        $result = new m_custumer();
        $user = $result->getCustumerBy($_GET["id"]);
        if (isset($_GET["id"])) {
            if (isset($_POST["submit"])) {
                $result = new m_custumer();
                $name = $_POST["name"];
                $address = $_POST["address"];
                $phone = $_POST["phone"];
                $des = $_POST["description"];
                $insert = $result->updateCustumer($_GET["id"], $name, $address, $phone, $des);
                if ($insert) {
                    setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                    $this->redirect($this->base_url("custumer/index"));
                    return;
                }
            }
            $this->view('custumer/edit', compact('user'));
        }
    }

    public function delete(){
        if (isset($_GET["id"])) {
            $result = new m_custumer();
            $deletee = $result->deleteCustumer($_GET["id"]);
            if ($deletee) {
                setcookie("suc", "Xóa hóa đơn thành công!", time() + 1, "/", "", 0);
            }
            $this->redirect($this->base_url("custumer/index"));
        }
    }
}