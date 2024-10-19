<?php 
include_once "models/m_user.php";
class c_user extends Controller{


    public function index(){
        $result = new m_user();
        $users = $result->getAllUser();
        $this->view('home/index', compact('users'));
    }

    public function createuser() {
        if (isset($_POST["submit"])) {
            $result = new m_user();
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $insert = $result->addUser($username, $email, $password);
            if ($insert) {
                setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                $this->redirect($this->base_url("user/index"));
            }
        }
        $this->view('home/create');
    }

    public function update() {
        if (isset($_GET["id"])) {
            $result = new m_user();
            $user = $result->getUserBy($_GET["id"]);
            if (isset($_POST["submit"])) {
                $result = new m_user();
                $username = $_POST["username"];
                $password = $_POST["password"];
                $role_ip = $_POST["ip_role"];
    
                $insert = $result->updateUser($_GET["id"], $username, $password, $role_ip);
                if ($insert) {
                    setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                    $this->redirect($this->base_url("user/index"));
                }
            }
            $this->view('home/edit', compact('user'));
        }
    }

    public function delete(){
        if (isset($_GET["id"])) {
            $result = new m_user();
            $deletee = $result->deleteUser($_GET["id"]);
            if ($deletee) {
                setcookie("suc", "Xóa hóa đơn thành công!", time() + 1, "/", "", 0);
            }
            $this->redirect($this->base_url("user/index"));
        }
    }

    public function login()
        {
    
            if (isset($_POST["submit"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];

                $insert = new m_user();
                $result = $insert->login_account($username, $password);
    
                if (!$result) {
                    setcookie("err", "Sai tài khoản hoặc mật khẩu!", time() + 1, "/", "", 0);
                    $this->redirect($this->base_url("login"));
                } else {
                    $_SESSION['login'] = $result;
                    // if ($_SESSION['login']["role"] == 0) {
                    //     $this->redirect($this->base_url("admin/"));
                    // } else {
                    // }
                    $this->redirect($this->base_url("home"));
                }
                
            }
            include "views/auth/index.php";
        }

    public function register()
    {
        if (isset($_POST["submit"])) {
            $result = new m_user();
            $username = $_POST["username"];
            $email = $_POST["email"];
            // $password = md5($_POST["password"]);
            $password = $_POST["password"];

            $insert = $result->addUser($username, $email, $password);
            if ($insert) {
                setcookie("suc", "Đăng ký tài khoản thành công!!", time() + 1);
            }
            $this->redirect($this->base_url("/login"));
        }
        include "views/auth/index.php";
    }
    
    public function logout()
    {
        session_destroy();
        $this->redirect($this->base_url("login"));
    }

}