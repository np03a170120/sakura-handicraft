<?php include "header.php"?>
<section class="main-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">product detail page</li>
        </ol>
    </nav>
</section>

<section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pd-image">
                    <div class="img-zoom-container">
                        <img id="myimage" src="./images/product-detail.jpg">
                        <div id="myresult" class="img-zoom-result">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="pd-detail">
                    <div class="pd-top">
                        <div class="pd-title">
                            <h3>AIRY VOAL SCARF PLAIN BEET</h3>
                        </div>
                        <div class="pd-stock">
                            <div class="green_sig">

                            </div>
                            <h6><span>99</span> in stock</h6>
                        </div>
                    </div>
                    <div class="pc-rates">
                        <div class="pcr-discounted-rate">
                            <h4>$300</h4>
                        </div>
                    </div>
                    <div class="description">
                        <div class="pd-text">
                            <p>
                                Having a soft and airy material, is what we seek for our daily hijab needs. Wearing
                                hijab
                                neatly and and straight on front head area is what we want. Fulfilling both your needs
                                and
                                wishes, we present you the Airy voal scarf!
                            </p>
                        </div>
                        <ul class="specification">
                            <li>Handcrafted in 7 Days</li>
                            <li>100% Cashmere</li>
                            <li>Handwoven on traditional looms</li>
                            <li>Certified Authenticty</li>
                            <li>Ethical & Sustainable</li>
                        </ul>
                    </div>
                    <div class="feature">
                        <div class="color size">
                            <h5>Color</h5>
                            <p>( please select your color )</p>
                            <!-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                </label>
                            </div> -->
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Indian Red</option>
                                <option value="1">Antique White</option>
                                <option value="2">Ocean Blue</option>
                                <option value="3">Orange Yellow</option>
                            </select>
                        </div>
                        <div class="size">
                            <h5>size</h5>
                            <p>( please select your size )</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>120CM X 120CM</option>
                                <option value="1">120CM X 120CM</option>
                                <option value="2">120CM X 10CM</option>
                                <option value="3">160CM X 120CM</option>
                            </select>
                            <!-- <span>120CM X 120CM</span> -->
                        </div>

                        <div class="material size">
                            <h5>material</h5>
                            <p>( please select your material )</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>vola</option>
                                <option value="1">Cashmere</option>
                                <option value="2">Pashmina</option>
                                <option value="3">Woolen</option>
                            </select>
                        </div>
                    </div>

                    <div class="co-quantity">
                        <h5>quantity</h5>

                        <input required="" type="number" name="quantity" value="1" min="0" max="100" tabindex="0">
                    </div>
                    <!-- add to cart -->
                    <div class="learn-more">
                        <a href="#" tabindex="-1">add to
                            bag</a>
                    </div>
                    <!-- add to wishlist -->
                    <div class="learn-more wishlist">
                        <a href="#" tabindex="-1">add wishlist</a>
                    </div>
                    <ul class="share-option">
                        <li>
                            <a href="#"> <i class="fab fa-facebook-f"></i><span></span>share</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i><span></span>tweet</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest-p"></i><span></span>pin it</a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- extra images at the bottom -->
            <div class="col-md-6">
                <div class="pdi-image">
                    <img src="./images/product-detail-0.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="pdi-image">
                    <img src="./images/product-detail-1.jpg" alt="">
                </div>
            </div>
            <!--  -->
        </div>
        <!-- reviews -->
        <div class="reviews">
            <!-- <div class="review-title">
                <h2>reviews</h2>
            </div> -->
            <div class="sec-title">
                <h2>reviews</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="sticky_wrapper">
                        <div class="write-review">
                            <div class="wr-title">
                                <h6>write your review</h6>
                            </div>
                            <div class="info">
                                <span>you are reviewing: <h6>AIRY VOAL SCARF PLAIN BEET</h6></span>
                            </div>
                            <div class="your_rating">
                                <h6>Your rating *</h6>
                                <div class="rating">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-star"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- write review -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="review" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn btn-submit" type="button" data-toggle="modal"
                                        data-target="#exampleModal">Submit</button>
                                </div>
                            </div>

                        </div>
                        <div class="return_delivery">

                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@mdo">Returns</button>
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@fat">Delivery</button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Returns</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, culpa
                                                laboriosam. Accusamus vitae iste quos modi ullam ratione, quaerat fuga
                                                odit amet repudiandae expedita, reiciendis numquam ad. Itaque, nam a!
                                            </p>

                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="profile">
                        <div class="profile-image">
                            <div class="profile-top">
                                <div class="pm-image">
                                    <img src="./images/insta-four.jpg" alt="">
                                </div>
                                <div class="pm-name">
                                    <h6>Naive Shrestha</h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="pm-content">
                                <p>The materila is awsome and i think it is the best when it comes to improvement and
                                    specially we are the man with an iron nail</p>
                            </div>
                        </div>
                    </div>
                    <div class="profile">
                        <div class="profile-image">
                            <div class="profile-top">
                                <div class="pm-image">
                                    <img src="./images/insta-two.jpg" alt="">
                                </div>
                                <div class="pm-name">
                                    <h6>Naive Shrestha</h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="pm-content">
                                <p>The materila is awsome and i think it is the best when it comes to improvement and
                                    specially we are the man with an iron nail</p>
                            </div>
                        </div>
                    </div>
                    <div class="profile">
                        <div class="profile-image">
                            <div class="profile-top">
                                <div class="pm-image">
                                    <img src="./images/insta-four.jpg" alt="">
                                </div>
                                <div class="pm-name">
                                    <h6>Naive Shrestha</h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="pm-content">
                                <p>The materila is awsome and i think it is the best when it comes to improvement and
                                    specially we are the man with an iron nail</p>
                            </div>
                        </div>
                    </div>
                    <div class="profile">
                        <div class="profile-image">
                            <div class="profile-top">
                                <div class="pm-image">
                                    <img src="./images/insta-two.jpg" alt="">
                                </div>
                                <div class="pm-name">
                                    <h6>Naive Shrestha</h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="pm-content">
                                <p>The materila is awsome and i think it is the best when it comes to improvement and
                                    specially we are the man with an iron nail</p>
                            </div>
                        </div>
                    </div>
                    <div class="profile">
                        <div class="profile-image">
                            <div class="profile-top">
                                <div class="pm-image">
                                    <img src="./images/insta-four.jpg" alt="">
                                </div>
                                <div class="pm-name">
                                    <h6>Naive Shrestha</h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-star"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="pm-content">
                                <p>The materila is awsome and i think it is the best when it comes to improvement and
                                    specially we are the man with an iron nail</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<section class="featured-product sec-padding">
    <div class="container">
        <div class="sec-title">
            <h2>related product</h2>
        </div>
        <div class="row">
            <div class="col mx-1">
                <div class="product-card">
                    <div class="pcs-image">
                        <img src="./images/card-one-1.jpg" alt="">
                        <img src="./images/card-two-1.jpg" class="img-top" alt="">
                    </div>
                    <div class="pc-title">
                        <h6>Colour Arc Ombre Pashmina Shawl</h6>
                    </div>
                    <div class="pc-rates">
                        <div class="pcr-regular-rate">
                            <h5><s>$100</s></h5>
                        </div>
                        <div class="pcr-discounted-rate">
                            <h4>$300</h4>
                        </div>
                    </div>
                    <!-- modal -->
                    <div class="quick-view uk-button uk-button-default" href="#modal-center" uk-toggle>
                        <i class="far fa-eye"></i><span>quick peek</span>
                    </div>
                    <div class="modal-product-card">
                        <div id="modal-center" class="uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                                    uk-slider="center: true">
                                    <div class="modal-slider">
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mx-1">
                <div class="product-card">
                    <div class="pcs-image">
                        <img src="./images/card-one-2.jpg" alt="">
                        <img src="./images/card-two-2.jpg" class="img-top" alt="">
                    </div>
                    <div class="pc-title">
                        <h6>Colour Arc Ombre Pashmina Shawl</h6>
                    </div>
                    <div class="pc-rates">
                        <div class="pcr-regular-rate">
                            <h5><s>$100</s></h5>
                        </div>
                        <div class="pcr-discounted-rate">
                            <h4>$300</h4>
                        </div>
                    </div>
                    <!-- modal -->
                    <div class="quick-view uk-button uk-button-default" href="#modal-center" uk-toggle>
                        <i class="far fa-eye"></i><span>quick peek</span>
                    </div>
                    <div class="modal-product-card">
                        <div id="modal-center" class="uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                                    uk-slider="center: true">
                                    <div class="modal-slider">
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mx-1">
                <div class="product-card">
                    <div class="pcs-image">
                        <img src="./images/card-one-3.jpg" alt="">
                        <img src="./images/card-two-3.jpg" class="img-top" alt="">
                    </div>
                    <div class="pc-title">
                        <h6>Colour Arc Ombre Pashmina Shawl</h6>
                    </div>
                    <div class="pc-rates">
                        <div class="pcr-regular-rate">
                            <h5><s>$100</s></h5>
                        </div>
                        <div class="pcr-discounted-rate">
                            <h4>$300</h4>
                        </div>
                    </div>
                    <!-- modal -->
                    <div class="quick-view uk-button uk-button-default" href="#modal-center" uk-toggle>
                        <i class="far fa-eye"></i><span>quick peek</span>
                    </div>
                    <div class="modal-product-card">
                        <div id="modal-center" class="uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                                    uk-slider="center: true">
                                    <div class="modal-slider">
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mx-1">
                <div class="product-card">
                    <div class="pcs-image">
                        <img src="./images/card-one-4.jpg" alt="">
                        <img src="./images/card-two-4.jpg" class="img-top" alt="">
                    </div>
                    <div class="pc-title">
                        <h6>Colour Arc Ombre Pashmina Shawl</h6>
                    </div>
                    <div class="pc-rates">
                        <div class="pcr-regular-rate">
                            <h5><s>$100</s></h5>
                        </div>
                        <div class="pcr-discounted-rate">
                            <h4>$300</h4>
                        </div>
                    </div>
                    <!-- modal -->
                    <div class="quick-view uk-button uk-button-default" href="#modal-center" uk-toggle>
                        <i class="far fa-eye"></i><span>quick peek</span>
                    </div>
                    <div class="modal-product-card">
                        <div id="modal-center" class="uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                                    uk-slider="center: true">
                                    <div class="modal-slider">
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mx-1">
                <div class="product-card">
                    <div class="pcs-image">
                        <img src="./images/card-one-5.jpg" alt="">
                        <img src="./images/card-two-5.jpg" class="img-top" alt="">
                    </div>
                    <div class="pc-title">
                        <h6>Colour Arc Ombre Pashmina Shawl</h6>
                    </div>
                    <div class="pc-rates">
                        <div class="pcr-regular-rate">
                            <h5><s>$100</s></h5>
                        </div>
                        <div class="pcr-discounted-rate">
                            <h4>$300</h4>
                        </div>
                    </div>
                    <!-- modal -->
                    <div class="quick-view uk-button uk-button-default" href="#modal-center" uk-toggle>
                        <i class="far fa-eye"></i><span>quick peek</span>
                    </div>
                    <div class="modal-product-card">
                        <div id="modal-center" class="uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                                    uk-slider="center: true">
                                    <div class="modal-slider">
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ms-single">
                                            <div class="mss-img">
                                                <img src="./images/category-sec-1.jpg" alt="">
                                            </div>
                                            <div class="mss-desc">
                                                <div class="mss-title">
                                                    <h4>Colour Arc Ombre Pashmina Shawl</h4>
                                                </div>
                                                <div class="pc-rates">
                                                    <div class="pcr-regular-rate">
                                                        <h5><s>$100</s></h5>
                                                    </div>
                                                    <div class="pcr-discounted-rate">
                                                        <h4>$300</h4>
                                                    </div>
                                                </div>
                                                <ul class="product-specification">
                                                    <li>Handcrafted in 10 Days</li>
                                                    <li>100% Cashmere</li>
                                                    <li>Handwoven on traditional looms</li>
                                                    <li>Certified Authenticty</li>
                                                    <li>Ethical & Sustainable</li>
                                                </ul>

                                                <div class="co-quantity">
                                                    <h6>quantity</h6>

                                                    <input required="" type="number" name="quantity" value="1" min="0"
                                                        max="100">
                                                </div>
                                                <div class="learn-more">
                                                    <a href="#">add to bag</a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="#">
                                                        <h5>view product detail</h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include "footer.php"?>