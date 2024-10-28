<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="<?= _WEB_ROOT ?>/public/img/carousel-1.jpg"
                            style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion
                                </h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem
                                    magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                    href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="<?= _WEB_ROOT ?>/public/img/offer-1.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="<?= _WEB_ROOT ?>/public/img/offer-2.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->

<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured
            Products</span></h2>
    <div class="row px-xl-5">
    <?php foreach ($data['products'] as $key => $row) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?= $this->base_url($row["img"]); ?>" alt="<?= $row["name"]; ?>">
                    <div class="product-action flex-column">
                        <a class="btn btn-outline-dark btn-square w-100" href="<?= _WEB_ROOT; ?>/dashboard/buy/<?= $row["id"]; ?>">Mua ngay</a>
                        <a class="btn btn-outline-dark btn-square w-100" data-mdb-ripple-init data-mdb-modal-init
                                data-mdb-target="#exampleModal<?= $row["id"]; ?>" data-id="<?= $row["id"];?>">Thêm vào giỏ hàng</a>
                    </div>
                    <div class="modal fade" id="exampleModal<?= $row["id"]; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel<?= $row["id"]; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel<?= $row["id"]; ?>">Thêm
                                            sản phẩm vào giỏ hàng</h5>
                                        <button type="button" class="btn-close" data-mdb-ripple-init
                                            data-mdb-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <div class="image_4">
                                            <img src="<?= $this->base_url($row["img"]); ?>" class="card-img-top"
                                                alt="<?= $row["name"]; ?>"
                                                style="max-height: 200px; object-fit: cover;">
                                        </div>
                                        <h2 class="dolor_text"><span
                                                style="color: #ebc30a;"><?= number_format($row["price"], 0); ?></span>
                                            VND</h2>
                                        <h2 class="dolor_text"><?= $row["name"]; ?></h2>
                                        <h2 class="dolor_text_1">Còn <?= $row["quanlity"]; ?> cái</h2>
                                        <p class="tempor_text"><?= $row["description"]; ?></p>
                                        <div class="d-flex w-100 justify-content-center">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="1" type="number"
                                                class="form-control form-control-sm quantity_product"
                                                style="width: 25%" />

                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary add-to-cart" data-mdb-ripple-init
                                            data-mdb-dismiss="modal" data-id="<?= $row["id"];?>">Mua</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href=""><?= $row["name"]; ?></a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5><?= number_format($row["price"], 0); ?> VND</h5>
                        <!-- <h6 class="text-muted ml-2"><del>$123.00</del></h6> -->
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(<?= $row["quanlity"]; ?>)</small>
                    </div>
                </div>
            </div>
        </div>
    <?php }; ?>
    </div>
</div>
<!-- Products End -->

<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="row px-xl-5">
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="<?= _WEB_ROOT ?>/public/img/offer-1.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="<?= _WEB_ROOT ?>/public/img/offer-2.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->

<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class=" px-xl-5">
        <div class="owl-carousel vendor-carousel row">
            <div class="bg-light p-4 col-3 text-center">
                <img src="<?= _WEB_ROOT ?>/public/img/vendor-1.jpg" alt="">
            </div>
            <div class="bg-light p-4 col-3 text-center">
                <img src="<?= _WEB_ROOT ?>/public/img/vendor-2.jpg" alt="">
            </div>
            <div class="bg-light p-4 col-3 text-center">
                <img src="<?= _WEB_ROOT ?>/public/img/vendor-3.jpg" alt="">
            </div>
            <div class="bg-light p-4 col-3 text-center">
                <img src="<?= _WEB_ROOT ?>/public/img/vendor-4.jpg" alt="">
            </div>
            <div class="bg-light p-4 col-3 text-center">
                <img src="<?= _WEB_ROOT ?>/public/img/vendor-5.jpg" alt="">
            </div>
            <div class="bg-light p-4 col-3 text-center">
                <img src="<?= _WEB_ROOT ?>/public/img/vendor-6.jpg" alt="">
            </div>
            <div class="bg-light p-4 col-3 text-center">
                <img src="<?= _WEB_ROOT ?>/public/img/vendor-7.jpg" alt="">
            </div>
            <div class="bg-light p-4 col-3 text-center">
                <img src="<?= _WEB_ROOT ?>/public/img/vendor-8.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
            <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum
                tempor no vero est magna amet no</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                    <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                by
                <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->

<script>
$(document).ready(function() {
    $('.add-to-cart').off('click').on('click', function() {
        var productId = $(this).data('id');
        var quantityProduct = $(this).closest('.modal-content').find(".quantity_product").val();
        $.ajax({
            url: 'dashboard/addcart',
            type: 'POST',
            data: {
                add_to_cart: true,
                product_id: productId,
                quantity: quantityProduct
            },
            success: function(response) {
                var result = JSON.parse(response);
                if (result.success) {
                    alert('Sản phẩm đã được thêm vào giỏ hàng!');
                } else {
                    alert('Có lỗi xảy ra, vui lòng thử lại!');
                }
            }
        });
    });
});
</script>