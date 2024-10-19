<?php 
include_once "models/m_product.php";
class c_dashboard extends Controller{


    public function index() {
        $result = new m_product();
        $products = $result->getAllProduct();
        $this->view('dashboard/dashboard', compact('products'));
    }

    public function list() {
        $result = new m_product();
        $products = $result->getAllProduct();
        $this->view('dashboard/index', compact('products'));
    }

    public function create() {
        if (isset($_POST["submit"])) {
            $result = new m_product();
            $name = $_POST["name"];
            $quanlity = $_POST["quanlity"];
            $price = $_POST["price"];
            $des = $_POST["description"];
            
            // Xử lý ảnh
            $target_dir = "public/uploads/";  // Đường dẫn thư mục để lưu ảnh
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $imgPath = "";
    
            // Kiểm tra nếu file thực sự là ảnh
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $imgPath = $target_file;  // Lưu đường dẫn ảnh
                } else {
                    echo "Có lỗi khi tải lên ảnh.";
                    return;
                }
            } else {
                echo "Tệp không phải là ảnh.";
                return;
            }
    
            // Thêm sản phẩm cùng với đường dẫn ảnh
            $insert = $result->addProduct($name, $quanlity, $price,  $imgPath, $des);
            if ($insert) {
                setcookie("suc", "Tạo đơn hàng thành công!!", time() + 1);
                $this->redirect($this->base_url("dashboard/index"));
            }
        }
        $this->view('dashboard/create');
    }
    

    public function update() {
        if (isset($_GET["id"])) {
            $result = new m_product();
            $product = $result->getProductBy($_GET["id"]);
    
            if (isset($_POST["submit"])) {
                $name = $_POST["name"];
                $quanlity = $_POST["quanlity"];
                $price = $_POST["price"];
                $des = $_POST["description"];
                
                // Kiểm tra xem có file ảnh mới không
                if (isset($_FILES["img"]) && $_FILES["img"]["error"] == UPLOAD_ERR_OK) {
                    // Đường dẫn lưu ảnh
                    $uploadDir = 'public/uploads/';
                    $uploadFile = $uploadDir . basename($_FILES["img"]["name"]);
    
                    // Di chuyển file ảnh vào thư mục
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $uploadFile)) {
                        // Gọi hàm updateProduct với đường dẫn ảnh mới
                        $insert = $result->updateProduct($_GET["id"], $name, $quanlity, $price, $uploadFile, $des);
                    } else {
                        // Xử lý lỗi nếu không thể upload file
                        echo "Có lỗi khi tải lên ảnh.";
                        return;
                    }
                } else {
                    // Nếu không có ảnh mới, sử dụng ảnh cũ
                    $insert = $result->updateProduct($_GET["id"], $name, $quanlity, $price, $product['img'], $des);
                }
    
                if ($insert) {
                    setcookie("suc", "Cập nhật sản phẩm thành công!!", time() + 1);
                    $this->redirect($this->base_url("dashboard/index"));
                }
            }
            $this->view('dashboard/edit', compact('product'));
        }
    }
    

    public function delete(){
        if (isset($_GET["id"])) {
            $result = new m_product();
            $deletee = $result->deleteProduct($_GET["id"]);
            if ($deletee) {
                setcookie("suc", "Xóa hóa đơn thành công!", time() + 1, "/", "", 0);
            }
            $this->redirect($this->base_url("dashboard/index"));
        }
    }

}