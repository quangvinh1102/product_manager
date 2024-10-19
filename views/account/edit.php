<div class="container-fluid p-5 d-flex justify-content-center align-items-center">
    <div style="width: 80rem;">
        <form action="" method="POST">
            <h1>Sửa Tài khoản</h1>
            <div class="mb-3">
                <label for="product" class="form-label">Tên tài khoản</label>
                <input type="text" class="form-control" id="username" placeholder="Tên tài khoản" name="username"
                    required value="<?= $data["user"]["username"]; ?>">
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email"
                    required value="<?= $data["user"]["email"]; ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu mới</label>
                <input value="" type="text" class="form-control" id="password"
                    placeholder="Mật khẩu mới" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Mật khẩu phải có ít nhất 8 ký tự, bao gồm ít nhất một chữ hoa, một chữ thường và một số"
                    >
            </div>
            <div class="mb-3">
                <span id="message" class="text-danger"></span>
            </div>
            <button type="submit"
                class="px-2 py-1 lg:px-4 bg-primary  text-white text-sm  rounded hover:bg-primary-600 border border-primary-500 mb-2"
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
</script>