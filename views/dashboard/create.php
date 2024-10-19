<div class="container-fluid p-5 d-flex justify-content-center align-items-center">
    <div style="width: 80rem;">
        <form action="" method="POST" enctype="multipart/form-data">
            <h1>Sản phẩm</h1>
            <div class="mb-3">
                <label for="product" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="product" placeholder="Tên sản phẩm" name="name"
                    required>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="product" placeholder="Số lượng" name="quanlity"
                    required>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Đơn giá</label>
                <input type="number" class="form-control" id="product" placeholder="Đơn giá" name="price"
                    required>
            </div>

            <div class="mb-3">
                <label for="product" class="form-label">Mô tả sản phẩm</label>
                <input type="text" class="form-control" id="product" placeholder="Mô tả" name="description" placeholder
                    required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Ảnh sản phẩm</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            
            <button type="submit"
                class="bpx-2 py-1 lg:px-4 bg-primary  text-white text-sm  rounded hover:bg-primary-600 border border-primary-500 mb-2 align-items-center"
                name="submit">Thêm sản phẩm</button>
        </form>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");
var message = document.getElementById("message");

function validatePassword() {
    if (password.value != confirm_password.value) {
        message.innerHTML = "Mật khẩu không khớp";
    } else {
        message.innerHTML = "";
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>