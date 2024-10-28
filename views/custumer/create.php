<div class="container-fluid p-5 d-flex justify-content-center align-items-center">
    <div style="width: 80rem;">
        <form action="" method="POST">
            <h1>Thêm khách hàng</h1>
            <div class="mb-3">
                <label for="product" class="form-label">Chọn tài khoản người dùng</label>
                <select class="form-select" id="user1" name="user_id">
                    <?php  foreach($data["users"] as $value){?>
                    <option value="<?php echo $value["id"]; ?>"><?php echo $value["username"]; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="product" placeholder="Địa chỉ" name="address" required>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" id="product" placeholder="Số điện thoại" name="phone"
                    required>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Ghi chú</label>
                <input type="text" class="form-control" id="product" placeholder="Ghi chú" name="description" required>
            </div>

            <div class="mb-3">
                <span id="message" class="text-danger"></span>
            </div>
            <button type="submit"
                class="bpx-2 py-1 lg:px-4 bg-primary  text-white text-sm  rounded hover:bg-primary-600 border border-primary-500 mb-2 align-items-center"
                name="submit">Lưu</button>
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