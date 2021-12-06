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
                    .Charact
                    <div class="size">
                        <h5>size</h5>
                        <span>120CM X 120CM</span>
                    </div>
                    <div class="color size">
                        <h5>Color</h5>
                        <span>Beet</span>
                    </div>
                    <div class="material size">
                        <h5>material</h5>
                        <span>voal</span>
                    </div>

                    <div class="co-quantity">
                        <h5>quantity</h5>

                        <input required="" type="number" name="quantity" value="1" min="0" max="100" tabindex="0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"?>