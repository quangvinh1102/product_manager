<?php
$total = 0;
foreach ($data["products"] as $key => $row) {
    $total += $row["price"];
}
?>

<section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0">Giỏ hàng</h1>
                                        <h6 class="mb-0 text-muted"><?php echo count($data["products"]) ?> sản phẩm</h6>
                                    </div>
                                    <hr class="my-4">
                                    <?php foreach ($data['products'] as $key => $row) { ?>
                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="<?= $this->base_url($row["img"]); ?>" class="img-fluid rounded-3"
                                                alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-muted"><?= $row["name"]; ?></h6>
                                            <h6 class="mb-0"><?= $row["description"]; ?></h6>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateTotal()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="quantity-<?= $key; ?>" min="0" name="quantity" value="1"
                                                type="number" class="form-control form-control-sm"
                                                onchange="updateTotal()"
                                                oninput="this.value = this.value < 0 ? 0 : this.value; updateTotal()" />

                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateTotal()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0"><?= number_format($row["price"], 0); ?> VND</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="<?= _WEB_ROOT; ?>/product/delete/<?= $row["id"]; ?>"
                                                class="text-muted"><i class="fas fa-times"></i></a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <hr class="my-4">

                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="<?= _WEB_ROOT; ?>/home" class="text-body"><i
                                                    class="fas fa-long-arrow-alt-left me-2"></i>Về trang chủ</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-body-tertiary">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Chi tiết</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase">Số lượng sản phẩm</h5>
                                        <h5><?php echo count($data["products"]) ?></h5>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Mã giảm giá</h5>

                                    <div class="mb-5">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="form3Examplea2"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Examplea2">Nhập mã giảm giá</label>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Tổng tiền</h5>
                                        <h5 id="total-price"><?= number_format($total, 0); ?> VND</h5>
                                    </div>

                                    <a href="<?= _WEB_ROOT; ?>/product/payment"
                                        class="btn btn-dark btn-block btn-lg">Thanh
                                        toán</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function updateTotal() {
    let total = 0;
    <?php foreach ($cart as $key => $row) { ?>
    const quantity = parseInt(document.getElementById('quantity-<?= $key; ?>').value) || 0; // Lấy số lượng
    const price = <?= $row["price"]; ?>; // Lấy giá sản phẩm
    total += quantity * price; // Cập nhật tổng tiền
    <?php } ?>
    document.getElementById('total-price').innerText = total.toLocaleString('en-US') +
    ' VND'; // Cập nhật tổng tiền hiển thị
}

// Gọi hàm updateTotal khi tài liệu được tải
document.addEventListener('DOMContentLoaded', (event) => {
    updateTotal();
});
</script>