<div class="container-fluid p-5 d-flex justify-content-center align-items-center">
    <div style="width: 80rem;">
        <form action="" method="POST" enctype="multipart/form-data">
            <h1>Sửa sản phẩm</h1>
            <div class="mb-3">
                <label for="product" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" placeholder="Tên tài khoản" name="name"
                    required value="<?= $data["product"]["name"]; ?>">
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="quanlity" placeholder="quanlity" name="quanlity"
                    required value="<?= $data["product"]["quanlity"]; ?>">
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Đơn giá</label>
                <input type="number" class="form-control" id="product" placeholder="Đơn giá" name="price"
                    required value="<?= $data["product"]["price"]; ?>">
            </div>

            <div class="mb-3">
                <label for="product" class="form-label">Mô tả sản phẩm</label>
                <input type="text" class="form-control" id="product" placeholder="Mô tả" name="description" placeholder
                    required value="<?= $data["product"]["description"]; ?>">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Ảnh sản phẩm</label>
                <input type="file" class="form-control" id="img" name="img" required value="<?= $data["product"]["img"]; ?>">
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