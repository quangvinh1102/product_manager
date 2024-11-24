<?php
include_once "models/m_nav.php";  
class c_nav extends Controller{

    function __construct()
    {
        $this->auth();
    }
    
    public function index(){
        $result = new m_nav();
        $navs = $result->getNav();
        $this->view('navigation/index', compact('navs'));
    }

    public function create(){
        $result = new m_nav();
        if (isset($_POST["submit"])) {
            $name = $_POST["name"];

            $insert = $result->addNav($name);
            if ($insert) {
                setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                $this->redirect($this->base_url("nav/index"));
            }
        }
        $this->view('navigation/create');
    }

    public function update() {
        $result = new m_nav();
        $nav = $result->getNavBy($_GET["id"]);
        if (isset($_GET["id"])) {
            if (isset($_POST["submit"])) {
                $result = new m_nav();
                $name = $_POST["name"];
                $insert = $result->updateNav($_GET["id"], $name);
                if ($insert) {
                    setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                    $this->redirect($this->base_url("nav/index"));
                    return;
                }
            }
            $this->view('navigation/edit', compact('nav'));
        }
    }

    public function delete(){
        if (isset($_GET["id"])) {
            $result = new m_nav();
            $deletee = $result->deleteNav($_GET["id"]);
            if ($deletee) {
                setcookie("suc", "Xóa hóa đơn thành công!", time() + 1, "/", "", 0);
            }
            $this->redirect($this->base_url("nav/index"));
        }
    }
}