<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div id="slideshow">
    <div>
        <ul class="allinone_bannerRotator_list">
            <li data-text-id="#content_ss_1"><img src="/images/slideshow.jpg" alt="img"/></li>
            <li data-text-id="#content_ss_2"><img src="/images/slideshow2.jpg" alt="img"/></li>
            <li data-text-id="#content_ss_3"><img src="/images/slideshow3.jpg" alt="img"/></li>
            <li data-text-id="#content_ss_4"><img src="/images/slideshow4.jpg" alt="img"/></li>
        </ul>
        <div id="content_ss_1" class="allinone_bannerRotator_texts">
            <div class="content-slideshow" data-duration="0.5" data-fade-start="0" data-delay="0.3">
                <div class="container">
                    <h3>RESPONSIVE<br/>PSD <span>&</span> BAGS STORE</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="discount"><span class="big">20</span><span class="small">%</span><br/>off</div>
                    <a href="#">SHOP NOW</a>
                </div>
            </div>
        </div>
        <div id="content_ss_2" class="allinone_bannerRotator_texts">
            <div class="content-slideshow" data-initial-top="400" data-final-top="0" data-duration="0.8"
                 data-fade-start="0" data-delay="0">
                <div class="container">
                    <h3>RESPONSIVE<br/>PSD <span>&</span> BAGS STORE</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="discount"><span class="big">20</span><span class="small">%</span><br/>off</div>
                    <a href="#">SHOP NOW</a>
                </div>
            </div>
        </div>
        <div id="content_ss_3" class="allinone_bannerRotator_texts">
            <div class="content-slideshow" data-initial-top="-400" data-final-top="0" data-duration="0.8"
                 data-fade-start="0" data-delay="0">
                <div class="container">
                    <h3>RESPONSIVE<br/>PSD <span>&</span> BAGS STORE</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="discount"><span class="big">20</span><span class="small">%</span><br/>off</div>
                    <a href="#">SHOP NOW</a>
                </div>
            </div>
        </div>
        <div id="content_ss_4" class="allinone_bannerRotator_texts">
            <div class="content-slideshow" data-initial-left="-200" data-final-left="0" data-duration="0.5"
                 data-fade-start="0" data-delay="0">
                <div class="container">
                    <h3>RESPONSIVE<br/>PSD <span>&</span> BAGS STORE</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="discount"><span class="big">20</span><span class="small">%</span><br/>off</div>
                    <a href="#">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#slideshow -->
<div class="services">
    <div class="container">
        <div class="sale">
            <a href="#">
                <h4>BIG SALE FOR</h4>
                <h3>SUMMER</h3>
                <div class="discount"><span class="big">10</span><span class="small">%</span><br/>off</div>
            </a>
        </div>
        <!-- /.sale -->
        <div class="trending">
            <a href="#">
                <h3>2014</h3>
                <h4>FASHION BAG</h4>
            </a>
        </div>
        <!-- /.trending -->
        <div class="shipping">
            <a href="#">
                <h3>FREE</h3>
                <h4>SHIPPING</h4>
                <h5>WITH ORDER OVER $100</h5>
            </a>
        </div>
        <!-- /.shipping -->
        <div class="toolbars">
            <ul>
                <li><a href="#" class="heart-icon">heart</a></li>
                <li><a href="#" class="cart-icon">cart</a></li>
                <li><a href="#" class="cog-icon">cog</a></li>
            </ul>
        </div>
        <!-- /.toolbars -->
    </div>
</div>
<!-- /.services -->
<div class="hot-bags">
    <div class="container">
        <h3 class="border-caption with-dots">HOT BAGS</h3>
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="/images/bag-1.jpg" alt="img"/></a>
                            <span class="saleoff style1">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Minim Veniam</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="/images/bag-2.jpg" alt="img"/></a>
                            <span class="saleoff style2">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Coccaecat</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="/images/bag-1.jpg" alt="img"/></a>
                            <span class="saleoff style1">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Mollit Anim</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="/images/bag-2.jpg" alt="img"/></a>
                            <span class="saleoff style2">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Minim Veniam</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            <p class="pages">Page 01/10</p>
        </div>
    </div>
</div>
<!-- /.hot-bags -->
<div class="new-bags">
    <div class="container">
        <h3 class="border-caption with-dots">NEW BAGS</h3>
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="/images/bag-1.jpg" alt="img"/></a>
                            <span class="saleoff style1">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Minim Veniam</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="/images/bag-2.jpg" alt="img"/></a>
                            <span class="saleoff style2">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Coccaecat</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="/images/bag-1.jpg" alt="img"/></a>
                            <span class="saleoff style1">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Mollit Anim</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="/images/bag-2.jpg" alt="img"/></a>
                            <span class="saleoff style2">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Minim Veniam</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            <p class="pages">Page 01/10</p>
        </div>
    </div>
</div>
<!-- /.new-bags -->
<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="testimonials-item">
                    <div class="testimonials-left">
                        <span>“</span>
                    </div>
                    <div class="testimonials-body">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna
                        </div>
                        <p class="testimonials-name">- Kidesigner</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonials-item">
                    <div class="testimonials-left">
                        <span>“</span>
                    </div>
                    <div class="testimonials-body">
                        <div>
                            <div>Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo
                            </div>
                            <p class="testimonials-name">- Voluptat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.testimonials -->
<div class="custom-blocks">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="border-caption">From blog</h3>
                <div class="list-blogs">
                    <div class="media blog-item">
                        <div class="media-body">
                            <span class="blog-date">Today, 3.20 AM</span>
                            <h4 class="blog-name">Minim Veniam</h4>
                            <div>
                                <p>Viris phaedrum ad cum, in usu ipsum percipit. Ut ponderum percipitur este</p>
                                <p class="blog-by">- by
                                    <mark>Mr.Customer</mark>
                                </p>
                            </div>
                        </div>
                        <div class="media-right">
                            <img src="/images/small-bag.jpg" alt="img"/>
                        </div>
                    </div>
                    <div class="media blog-item">
                        <div class="media-body">
                            <span class="blog-date">Today, 3.20 AM</span>
                            <h4 class="blog-name">Minim Veniam</h4>
                            <div>
                                <p>Viris phaedrum ad cum, in usu ipsum percipit. Ut ponderum percipitur este</p>
                                <p class="blog-by">- by
                                    <mark>Mr.Customer</mark>
                                </p>
                            </div>
                        </div>
                        <div class="media-right">
                            <img src="/images/small-bag.jpg" alt="img"/>
                        </div>
                    </div>
                </div>
                <a href="#" class="loadmore mgl-30">LOAD MORE</a>
            </div>
            <div class="col-md-4">
                <h3 class="border-caption">VIDEO BAGS</h3>
                <div class="wrap-video-bags">
                    <a class="video-player-link" href="#">
                        <img class="video-bg" alt="alt" src="/images/video.png"/>
                        <div class="play-button">
                            <img alt="alt" src="/images/play-btn.png">
                        </div>
                    </a>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <a href="#" class="loadmore">LOAD MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.custom-blocks -->
<div class="usertip">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pdr-70">
                <h3 class="border-caption briefcase-icon">FAQs</h3>
                <ul>
                    <li><a href="#">Duis aute irure dolor in..</a></li>
                    <li><a href="#">Henderit in voluptate velit</a></li>
                    <li><a href="#">Cllum dolore eu fugiat..</a></li>
                    <li><a href="#">Henderit in voluptate</a></li>
                    <li><a href="#">Voluptate velit esse cillum</a></li>
                </ul>
                <p>More questions in <a href="#" class="border-link">Help Center</a></p>
            </div>
            <div class="col-md-4 pdlr-50">
                <h3 class="border-caption comments-icon">NEED HELP?</h3>
                <p>Monday to Sunday., 9h AM - 6h PM</p>
                <div class="live-chat">
                    <a href="#">
                        <div class="icon-headphones"></div>
                        LiveChat</a>
                </div>
                <div class="bottom-info">
                    <p><a href="mailto:kysbag@email.com"><i class="fa fa-envelope"></i>kysbag@email.com</a></p>
                    <p><a href="tel:(+000)-0000-000"><i class="fa fa-phone"></i>(+000)-0000-000</a></p>
                </div>
            </div>
            <div class="col-md-4 pdl-70">
                <h3 class="border-caption envelope-icon">SIGNUP</h3>
                <p>Find the ferfect coupon for friends</p>
                <form action="#" class="signup-form">
                    <input type="email" placeholder="Your email here.."/>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.usertip -->
