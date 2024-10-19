<?php
include_once "models/m_user.php";  
class c_account extends Controller{

    function __construct()
    {
        $this->auth();
    }
    
    public function index(){
        $result = new m_user();
        $users = $result->getAllUser();
        $this->view('account/index', compact('users'));
    }

    public function create(){
        if (isset($_POST["submit"])) {
            $result = new m_user();
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $insert = $result->addUser($username, $email, $password);
            if ($insert) {
                setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                $this->redirect($this->base_url("account/index"));
            }
        }
        $this->view('account/create');
    }

    public function update() {
        $result = new m_user();
        $user = $result->getUserBy($_GET["id"]);
        if (isset($_GET["id"])) {
            if (isset($_POST["submit"])) {
                $result = new m_user();
                $username = $_POST["username"];
                $email = $_POST["email"];
                $role = $_POST["role"];
                if (empty($_POST["password"])) {
                    $password =  $user["password"];
                } else {
                    $password = $_POST["password"];
                }
                $insert = $result->updateUser($_GET["id"], $username, $email, $password, $role);
                if ($insert) {
                    setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                    $this->redirect($this->base_url("account/index"));
                    return;
                }
            }
            $this->view('account/edit', compact('user'));
        }
    }

    public function delete(){
        if (isset($_GET["id"])) {
            $result = new m_user();
            $deletee = $result->deleteUser($_GET["id"]);
            if ($deletee) {
                setcookie("suc", "Xóa hóa đơn thành công!", time() + 1, "/", "", 0);
            }
            $this->redirect($this->base_url("account/index"));
        }
    }

    public function changepass(){
        $result = new m_user();
        $id = $_SESSION["login"]["id"];
        $user = $result->getUserBy($id);
        if (isset($id)) {
            if (isset($_POST["submit"])) {
                $result = new m_user();
                $username = $_POST["username"];
                $email = $_POST["email"];
                if (empty($_POST["password"])) {
                    $password =  $user["password"];
                } else {
                    $password = $_POST["password"];
                }
                $insert = $result->updateUser($id, $username, $email, $password);
                if ($insert) {
                    setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                    $this->redirect($this->base_url("dashboard/index"));
                    return;
                }
            }
            $this->view('account/edit', compact('user'));
        }
    }
}