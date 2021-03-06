<?php include 'header.php'?>
<section class="main-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">cart</a></li>
            <li class="breadcrumb-item"><a href="#">shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">checkout</li>
        </ol>
    </nav>
</section>

<section class="checkout-shipping">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="checkout_breadcrumb">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">cart</a></li>
                            <li class="breadcrumb-item"><a href="#">information</a></li>
                            <li class="breadcrumb-item active" aria-current="page">shipping</li>
                        </ol>
                    </nav>
                </div>
                <div class="contact_shipping">
                    <div class="cs-info">
                        <h4>Contact</h4>
                        <div class="d_flex_wrapper">
                            <h3>czon.herald75@gmail.com</h3>
                            <a href="#">change</a>
                        </div>
                    </div>
                    <div class="cs-info">
                        <h4>ship to</h4>
                        <div class="d_flex_wrapper">
                            <h3>Auburn, Australia</h3>
                            <a href="#">change</a>
                        </div>
                    </div>
                    <div class="cs-info">
                        <h4>shipping Charge</h4>
                        <div class="d_flex_wrapper">
                            <h3>$12000</h3>
                        </div>
                    </div>
                    <div class="cs-info">
                        <h4>Payment method</h4>

                        <div class="size">
                            <p>(Please choose your payment method)</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected="">Cash On Delivery</option>
                                <option value="1">Direct Bank Transfer</option>

                            </select>
                            <!-- <span>120CM X 120CM</span> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="learn-more">
                                <a href="checkout_payment.php">Continue to Payment</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="learn-more return">
                                <a href="checkout_information.php">return to information</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="cart-details-right">
                    <div class="cart-item-single">
                        <div class="ci-image"><a href="#">
                                <img src="./images/card-one-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="ci-title">
                            <h6>Light Yellow Cashmere Herringbone Reversible Blanket</h6>

                        </div>
                        <div class="ci-cal">
                            <!-- <h5>2 x $1200 = $2400</h5> -->
                            <h5>2</h5><span>X</span>
                            <h5 class="price">$1200</h5><span>=</span>
                            <h3 class="total">$2400</h3>
                        </div>

                    </div>
                    <div class="cart-item-single">
                        <div class="ci-image"><a href="#">
                                <img src="./images/card-one-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="ci-title">
                            <h6>Light Yellow Cashmere Herringbone Reversible Blanket</h6>

                        </div>
                        <div class="ci-cal">
                            <!-- <h5>2 x $1200 = $2400</h5> -->
                            <h5>2</h5><span>X</span>
                            <h5 class="price">$1200</h5><span>=</span>
                            <h3 class="total">$2400</h3>
                        </div>
                    </div>
                    <div class="sub-total-cart">
                        <h6 class="t-title">sub-total:</h6>
                        <h6>$3000</h6>
                    </div>
                    <div class="sub-total-cart">
                        <h6 class="t-title">Billing Address</h6>
                        <h6 class="italic">Newroad, Kathmandu</h6>
                    </div>
                    <div class="sub-total-cart">
                        <h6 class="t-title">shipping Address</h6>
                        <h6 class="italic">Newroad, Kathmandu</h6>
                    </div>
                    <div class="sub-total-cart">
                        <h6 class="t-title">shipping charge</h6>
                        <h6 class="italic">$1200</h6>
                    </div>

                    <div class="sub-total-cart">
                        <h6 class="t-title">Total:</h6>
                        <h6>$3000</h6>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<?php include 'footer.php'?>