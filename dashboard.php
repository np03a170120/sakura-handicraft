<?php include 'header.php'?>
<section class="main-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">shop</li>
        </ol>
    </nav>
</section>

<section class="dashboard">
    <div class="container">
        <div class="sec-title">
            <h6>your profile</h6>
            <h2>dashboard</h2>
        </div>
        <!-- account information -->
        <div class="dashboard-navigation-tab">
            <div class="dasboard-title">
                <h3>My account</h3>
                <div class="learn-more">
                    <a href="#">Logout</a>
                </div>
            </div>
            <!-- contact information -->
            <div class="cs-info">
                <h4>Contact</h4>
                <div class="d_flex_wrapper">
                    <h3>czon.herald75@gmail.com</h3>
                    <a href="#" id="ed_btn"><i class="fas fa-cogs"></i>Edit</a>

                </div>
            </div>
            <!-- edit contact information -->
            <div class="edit-account-information">
                <div class="user-names">
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
                        <div class="form-group">
                            <label for="exampleInputEmail1">last name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                <div class="edi-buttons">
                    <a href="#" id="c_email">change email</a>
                    <a href="#" id="c_password">change password</a>
                    <!-- <button id="c_email"> change email</button>
                            <button id="c_password"> change password</button> -->
                </div>
                <div class="change-email">
                    <div class="c-title">
                        <h5>change your email address</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Current password</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="change-password">
                    <div class="c-title">
                        <h5>change your Password</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Current Password</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Password</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="confirmation">
                    <div class="learn-more">
                        <a href="#">Save</a>
                    </div>
                    <div class="learn-more return">
                        <a href="#">return</a>
                    </div>
                </div>
            </div>

            <!-- billing information -->
            <div class="cs-info">
                <h4>Billing Address</h4>
                <div class="d_flex_wrapper">
                    <h3>London, United Kingdom</h3>
                    <a href="#" id="bil_btn"><i class="fas fa-cogs"></i>Edit</a>
                </div>
            </div>

            <!-- edit billing information -->
            <div class="edit-billing-information">
                <div class="user-names">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Street Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Zip Postal Code</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="confirmation">
                    <div class="learn-more">
                        <a href="#">Save</a>
                    </div>
                    <div class="learn-more return">
                        <a href="#">return</a>
                    </div>
                </div>
            </div>

            <!-- shipping information -->
            <div class="cs-info">
                <h4>shipping Address</h4>
                <div class="d_flex_wrapper">
                    <h3>London, United Kingdom</h3>
                    <a href="#" id="ship_btn"><i class="fas fa-cogs"></i>Edit</a>
                </div>
            </div>

            <!-- edit shipping information -->
            <div class="edit-shipping-information">
                <div class="user-names">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Street Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Zip Postal Code</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="confirmation">
                    <div class="learn-more">
                        <a href="#">Save</a>
                    </div>
                    <div class="learn-more return">
                        <a href="#">return</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- orders -->
        <div class="dashboard-navigation-tab">
            <div class="dasboard-title">
                <h3>My orders</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="cart-item-single">
                        <div class="ci-image"><a href="#">
                                <img src="./images/card-one-1.jpg" alt="">
                                <a href="#">
                                    <i class="fas fa-cog"></i><span>Edit</span>
                                </a>
                            </a>
                        </div>
                        <div class="ci-title">
                            <h6>Light Yellow Cashmere Herringbone Reversible Blanket</h6>
                        </div>
                        <div class="size">
                            <span>120CM X 120CM / ocean night</span>
                        </div>
                        <div class="ci-cal">
                            <!-- <h5>2 x $1200 = $2400</h5> -->
                            <h5>2</h5><span>X</span>
                            <h5 class="price">$1200</h5><span>=</span>
                            <h3 class="total">$2400</h3>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cart-item-single">
                        <div class="ci-image"><a href="#">
                                <img src="./images/card-one-1.jpg" alt="">
                                <a href="#">
                                    <i class="fas fa-cog"></i><span>Edit</span>
                                </a>
                            </a>
                        </div>
                        <div class="ci-title">
                            <h6>Light Yellow Cashmere Herringbone Reversible Blanket</h6>
                        </div>
                        <div class="size">
                            <span>120CM X 120CM / ocean night</span>
                        </div>
                        <div class="ci-cal">
                            <!-- <h5>2 x $1200 = $2400</h5> -->
                            <h5>2</h5><span>X</span>
                            <h5 class="price">$1200</h5><span>=</span>
                            <h3 class="total">$2400</h3>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- wishlist -->
        <div class="dashboard-navigation-tab">
            <div class="dasboard-title">
                <h3>My wishlist</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="cart-item-single">
                        <a href="#">
                        </a>
                        <div class="ci-image"><a href="#">
                                <img src="./images/card-one-1.jpg" alt="">
                            </a><a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                        <div class="ci-title">
                            <h6>Light Yellow Cashmere Herringbone Reversible Blanket</h6>
                            <div class="size">
                                <span>120CM X 120CM / ocean night</span>
                            </div>
                        </div>
                        <div class="ci-cal">
                            <h3 class="total">$2400</h3>
                        </div>
                        <div class="learn-more">
                            <a href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cart-item-single">
                        <a href="#">
                        </a>
                        <div class="ci-image"><a href="#">
                                <img src="./images/card-one-1.jpg" alt="">
                            </a><a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                        <div class="ci-title">
                            <h6>Light Yellow Cashmere Herringbone Reversible Blanket</h6>
                            <div class="size">
                                <span>120CM X 120CM / ocean night</span>
                            </div>
                        </div>
                        <div class="ci-cal">
                            <h3 class="total">$2400</h3>
                        </div>
                        <div class="learn-more">
                            <a href="#">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
</section>
<?php include 'footer.php'?>