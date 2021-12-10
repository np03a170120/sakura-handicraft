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

<section class="checkout">
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
                <div class="contact-form-content">
                    <div class="checkout-title">
                        <h4>contact information</h4>
                    </div>
                    <div class="contact_form">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address or phone number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shipping-form-content">
                    <div class="checkout-title">
                        <h4>shipping address</h4>
                    </div>
                    <div class="shipping-form">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">first name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-6">
                                <form action="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">last name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <form action="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">country / region</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <form action="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">street address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">state</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Tasmania</option>
                                        <option>New south wales</option>
                                        <option>queensland</option>
                                        <option>victoria</option>
                                        <option>Western Australia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">postal code</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="learn-more">
                                    <a href="checkout_shipping.php">Continue to shipping</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="learn-more return">
                                    <a href="cart.php">return to cart</a>
                                </div>
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
                        <h6 class="t-title">shipping charge</h6>
                        <h6 class="italic">calculated at the next step</h6>
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