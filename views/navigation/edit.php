<div class="container-fluid p-5 d-flex justify-content-center align-items-center">
    <div style="width: 80rem;">
        <form action="" method="POST">
            <h1>Sửa menu</h1>
            <div class="mb-3">
                <label for="product" class="form-label">Tên menu</label>
                <input type="text" class="form-control" id="name" placeholder="Tên menu" name="name"
                    required value="<?= $data["nav"]["name"]; ?>">
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