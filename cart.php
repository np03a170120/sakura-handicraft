<?php include 'header.php'?>

<section class="cart sec-padding">
    <div class="container">
        <div class="sec-title">
            <h2>Cart</h2>
        </div>
        <div class="cart-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">product</th>
                        <th scope="col">quantity</th>
                        <th scope="col">total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart-single-item">
                        <th scope="row">1</th>
                        <td>
                            <div class="cart-product">
                                <div class="cp-image">
                                    <img src="./images/card-one-1.jpg" alt="">
                                </div>

                                <div class="desc">
                                    <div class="cp-title">
                                        <h6>airy voile scarf plain</h6>
                                    </div>
                                    <div class="size">
                                        <span>120CM X 120CM / ocean night</span>
                                    </div>
                                    <div class="remove">
                                        <button>Remove</button>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="co-quantity">
                                <input required="" type="number" name="quantity" value="1" min="0" max="100"
                                    tabindex="0">
                            </div>
                        </td>
                        <td class="sub_total">
                            <h3>
                                $100
                            </h3>
                        </td>
                    </tr>
                    <tr class="cart-single-item">
                        <th scope="row">1</th>
                        <td>
                            <div class="cart-product">
                                <div class="cp-image">
                                    <img src="./images/card-one-1.jpg" alt="">
                                </div>

                                <div class="desc">
                                    <div class="cp-title">
                                        <h6>airy voile scarf plain</h6>
                                    </div>
                                    <div class="size">
                                        <span>120CM X 120CM / ocean night</span>
                                    </div>
                                    <div class="remove">
                                        <button>Remove</button>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="co-quantity">
                                <input required="" type="number" name="quantity" value="1" min="0" max="100"
                                    tabindex="0">
                            </div>
                        </td>
                        <td class="sub_total">
                            <h3>
                                $100
                            </h3>
                        </td>
                    </tr>
                    <tr class="cart-single-item">
                        <th scope="row">1</th>
                        <td>
                            <div class="cart-product">
                                <div class="cp-image">
                                    <img src="./images/card-one-1.jpg" alt="">
                                </div>

                                <div class="desc">
                                    <div class="cp-title">
                                        <h6>airy voile scarf plain</h6>
                                    </div>
                                    <div class="size">
                                        <span>120CM X 120CM / ocean night</span>
                                    </div>
                                    <div class="remove">
                                        <button>Remove</button>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="co-quantity">
                                <input required="" type="number" name="quantity" value="1" min="0" max="100"
                                    tabindex="0">
                            </div>
                        </td>
                        <td class="sub_total">
                            <h3>
                                $100
                            </h3>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="instruction_seller">
                    <div class="is-title">
                        <span>Special instruction for the seller</span>
                    </div>
                </div>
                <div class="instruction">
                    <div class="form-group">
                        <textarea class="form-control" name="review" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="cart-cost">
                    <div class="text_right">
                        <div class="sub-total-cart">
                            <h6 class="t-title">sub-total:</h6>
                            <h5>$3000</h5>
                        </div>
                        <!-- shipping -->
                        <div class="sub-total-cart">
                            <h6 class="t-title">shipping to:</h6>
                            <h5>Bagmati</h5>
                        </div>

                        <div class="sub-total-cart">
                            <h6 class="t-title">shipping charge:</h6>
                            <h5>$100</h5>

                        </div>
                        <!-- total -->
                        <div class="sub-total-cart total">
                            <h6 class="t-title">total:</h6>
                            <h5>$3000</h5>
                        </div>
                    </div>

                </div>
                <div class="change_location">
                    <button>change location</button>
                </div>
                <div class="buttons">
                    <div class="learn-more">
                        <a href="#" tabindex="-1">proceed to check out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>