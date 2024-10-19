<div class="container-fluid p-5 d-flex justify-content-center align-items-center">
    <div style="width: 80rem;">
        <form action="" method="POST">
            <h1>Sửa thông tin khách hàng</h1>
            <div class="mb-3">
                <label for="product" class="form-label">Tên khách hàng</label>
                <input type="text" class="form-control" id="name" placeholder="Tên khách hàng" name="name"
                    required value="<?= $data["user"]["name"]; ?>">
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="address" placeholder="Địa chỉ" name="address"
                    required value="<?= $data["user"]["address"]; ?>">
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" id="product" placeholder="Số điện thoại" name="phone"
                    required value="<?= $data["user"]["phone"]; ?>">
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Ghi chú</label>
                <input type="text" class="form-control" id="product" placeholder="Ghi chú" name="desciption"
                    required value="<?= $data["user"]["desciption"]; ?>">
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