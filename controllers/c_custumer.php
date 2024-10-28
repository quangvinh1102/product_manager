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
        $result = new m_custumer();
        $users = $result->getAllUser();
        if (isset($_POST["submit"])) {
            $user_id = $_POST["user_id"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $des = $_POST["description"];

            $insert = $result->addCustumer($user_id, 1, $address, $phone, $des);
            if ($insert) {
                setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                $this->redirect($this->base_url("custumer/index"));
            }
        }
        $this->view('custumer/create', compact('users'));
    }

    public function update() {
        $result = new m_custumer();
        $user = $result->getCustumerBy($_GET["id"]);
        if (isset($_GET["id"])) {
            if (isset($_POST["submit"])) {
                $result = new m_custumer();
                $user_id = $_POST["user_id"];
                $address = $_POST["address"];
                $phone = $_POST["phone"];
                $des = $_POST["desciption"];
                $insert = $result->updateCustumer($_GET["id"], $user_id, 7, $address, $phone, $des);
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