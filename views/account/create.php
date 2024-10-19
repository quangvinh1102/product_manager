<div class="container-fluid p-5 d-flex justify-content-center align-items-center">
    <div style="width: 80rem;">
        <form action="" method="POST">
            <h1>Thêm tài khoản</h1>
            <div class="mb-3">
                <label for="product" class="form-label">Tên tài khoản</label>
                <input type="text" class="form-control" id="product" placeholder="Tên tài khoản" name="username"
                    required>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Email</label>
                <input type="text" class="form-control" id="product" placeholder="Địa chỉ" name="email"
                    required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Nhập mật khẩu</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Mật khẩu phải có ít nhất 8 ký tự, bao gồm ít nhất một chữ hoa, một chữ thường và một số"
                    required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="Nhập lại mật khẩu"
                    required>
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