@extends('layouts.master')
@section('content')

    <!-- =====  BANNER STRAT  ===== -->
    <div class="banner">
      <div class="main-banner owl-carousel">
        <div class="item"><a href="#"><img src='{{url("images/main_banner1.jpg")}}' alt="Main Banner" class="img-responsive" /></a></div>
        <div class="item"><a href="#"><img src='{{url("images/main_banner2.jpg")}}' alt="Main Banner" class="img-responsive" /></a></div>
      </div>
    </div>
    <!-- =====  BANNER END  ===== -->
    <div class="row">
    </div>
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <div class="row ">
        <div id="brand_special" class="pt_30 text-center">
          <div class="type-01">
              <div class="col-sm-12">
                <div class="sunglasses owl-carousel ptb_20">
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-1.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-2.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-3.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-4.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-5.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-6.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-7.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-8.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-9.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-10.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-11.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-12.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-13.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-14.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-15.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-16.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-17.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-18.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-19.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                  <div class="item text-center"> <a href="#"> <img src='{{url("images/sunglasses/sunglasses-20.png")}}' alt="Disney" class="img-responsive"/> </a> </div>
                </div>
              </div>
          </div>
        </div>
        <!-- =====  SUB BANNER  STRAT ===== -->
        <div class="cms_banner">
          <div class="col-xs-5 col-sm-5 col-md-5 mt_30">
            <div id="subbanner1" class="sub-hover"> <a href="#"><img src='{{url("images/sub1.jpg")}}' alt="Sub Banner1" class="img-responsive"></a>
              <div class="bannertext">
                <h2><span>use code : w48sdc</span><br>highest quality designer frames.</h2>
              </div>
            </div>
          </div>
          <div class="col-xs-7 col-sm-7 col-md-7 mt_30">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div id="subbanner2" class="sub-hover"> <a href="#"><img src='{{url("images/sub2.jpg")}}' alt="Sub Banner2" class="img-responsive"></a>
                  <div class="bannertext">
                    <h2>Women<br>Sunglasses</h2>
                    <p class="mt_10">Discover wide range</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div id="subbanner3" class="sub-hover"> <a href="#"><img src='{{url("images/sub3.jpg")}}' alt="Sub Banner3" class="img-responsive"></a>
                  <div class="bannertext">
                    <h2>Men's<br>Sunglasses</h2>
                    <p class="mt_10">Great collection</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- =====  SUB BANNER END  ===== -->
        <div class="col-sm-12">
          <!-- =====  PRODUCT TAB  ===== -->
          <div id="product-tab" class="mt_60">
            <div class="heading-part mb_20 ">
              <h2 class="main_title">Special Products</h2>
            </div>
            <ul class="nav text-right">
              <li class="active"> <a href="#nArrivals" data-toggle="tab">New Arrivals</a> </li>
              <li><a href="#Bestsellers" data-toggle="tab">Bestsellers</a> </li>
              <li><a href="#Featured" data-toggle="tab">Featured</a> </li>
            </ul>
            <div class="tab-content clearfix box">
              <div class="tab-pane active" id="nArrivals">
                <div class="nArrivals owl-carousel">
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="Bestsellers">
                <div class="Bestsellers owl-carousel">
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="Featured">
                <div class="Featured owl-carousel">
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-thumb  mb_30">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                        <div class="caption product-detail text-left">
                          <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                          </div>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- =====  PRODUCT TAB  END ===== -->
          <!-- =====  SUB BANNER  STRAT ===== -->
          <div class="row">
            <div class="cms_banner mt_40 mb_60">
              <div class="col-xs-12">
                <div id="subbanner5" class="banner"> <a href="#"><img src='{{url("images/sub5.png")}}' alt="Sub Banner5" class="img-responsive"></a>
                  <div class="bannertext">
                    <h2>Buy sunglasses</h2>
                    <span>A great collection of 600+ stylish and trendy</span>
                    <button class="btn">Shop now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- =====  SUB BANNER END  ===== -->          
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9 mt_60">
              <!-- =====  sale product  ===== -->
              <div id="sale-product">
                <div class="heading-part mb_20 ">
                  <h2 class="main_title">Best Trending Deals</h2>
                </div>
                <div class="Specials owl-carousel">
                  <div class="item product-layout product-list">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                      <div class="caption product-detail text-left">
                        <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                        <div class="rating">
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                        </div>
                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                        </span>
                        <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                        <div class="timer mt_80">
                          <div class="days"></div>
                          <div class="hours"></div>
                          <div class="minutes"></div>
                          <div class="seconds"></div>
                        </div>
                        <div class="button-group text-center">
                          <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                          <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                          <div class="compare"><a href="#"><span>Compare</span></a></div>
                          <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item product-layout product-list">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                      <div class="caption product-detail text-left">
                        <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                        <div class="rating">
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                        </div>
                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                        </span>
                        <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                        <div class="timer mt_80">
                          <div class="days"></div>
                          <div class="hours"></div>
                          <div class="minutes"></div>
                          <div class="seconds"></div>
                        </div>
                        <div class="button-group text-center">
                          <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                          <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                          <div class="compare"><a href="#"><span>Compare</span></a></div>
                          <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item product-layout product-list">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                      <div class="caption product-detail text-left">
                        <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                        <div class="rating">
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                        </div>
                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                        </span>
                        <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                        <div class="timer mt_80">
                          <div class="days"></div>
                          <div class="hours"></div>
                          <div class="minutes"></div>
                          <div class="seconds"></div>
                        </div>
                        <div class="button-group text-center">
                          <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                          <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                          <div class="compare"><a href="#"><span>Compare</span></a></div>
                          <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- =====  sale product end ===== -->
            </div>
            <!-- =====  testimonial  ===== -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt_60">
              <div class="Testimonial right-sidebar-widget">
                <div class="heading-part mb_20 ">
                  <h2 class="main_title">Testimonial</h2>
                </div>
                <div class="client owl-carousel text-center">
                  <div class="item client-detail">
                    <div class="client-avatar"> <img alt="" src='{{url("images/user1.jpg")}}'> </div>
                    <div class="client-title  mt_30"><strong>joseph Lui</strong></div>
                    <div class="client-designation mb_10">php Developer</div>
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                  </div>
                  <div class="item client-detail">
                    <div class="client-avatar"> <img alt="" src='{{url("images/user2.jpg")}}'> </div>
                    <div class="client-title  mt_30"><strong>joseph Lui</strong></div>
                    <div class="client-designation mb_10">php Developer</div>
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                  </div>
                  <div class="item client-detail">
                    <div class="client-avatar"> <img alt="" src='{{url("images/user3.jpg")}}'> </div>
                    <div class="client-title  mt_30"><strong>joseph Lui</strong></div>
                    <div class="client-designation mb_10">php Developer</div>
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- =====  testimonial end ===== -->
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="heading-part text-center">
                <h2 class="main_title mt_50">Top Products</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="related-pro  owl-carousel mb_50 mt_10">
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                  <div class="caption product-detail text-left">
                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                    <div class="rating">
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                    </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    <div class="button-group text-center">
                      <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                      <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                      <div class="compare"><a href="#"><span>Compare</span></a></div>
                      <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                  <div class="caption product-detail text-left">
                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                    <div class="rating">
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                    </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    <div class="button-group text-center">
                      <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                      <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                      <div class="compare"><a href="#"><span>Compare</span></a></div>
                      <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                  <div class="caption product-detail text-left">
                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                    <div class="rating">
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                    </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    <div class="button-group text-center">
                      <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                      <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                      <div class="compare"><a href="#"><span>Compare</span></a></div>
                      <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                  <div class="caption product-detail text-left">
                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                    <div class="rating">
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                    </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    <div class="button-group text-center">
                      <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                      <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                      <div class="compare"><a href="#"><span>Compare</span></a></div>
                      <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                  <div class="caption product-detail text-left">
                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                    <div class="rating">
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                    </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    <div class="button-group text-center">
                      <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                      <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                      <div class="compare"><a href="#"><span>Compare</span></a></div>
                      <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src='{{url("images/product/product9.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src='{{url("images/product/product9-1.jpg")}}' alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                  <div class="caption product-detail text-left">
                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                    <div class="rating">
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                    </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    <div class="button-group text-center">
                      <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                      <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                      <div class="compare"><a href="#"><span>Compare</span></a></div>
                      <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- =====  Blog ===== -->
          <div id="Blog" class="mt_60">
            <div class="heading-part mb_20 ">
              <h2 class="main_title">Latest from the Blog</h2>
            </div>
            <div class="blog-contain box">
              <div class="blog owl-carousel ">
                <div class="item">
                  <div class="box-holder">
                    <div class="thumb post-img"><a href="#"> <img src='{{url("images/blog/blog_img_01.jpg")}}' alt="Cools"> </a> </div>
                    <div class="post-info mtb_20 ">
                      <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                      <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                      <div class="date-time">
                        <div class="day"> 11</div>
                        <div class="month">Aug</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-holder">
                    <div class="thumb post-img"><a href="#"> <img src='{{url("images/blog/blog_img_02.jpg")}}' alt="Cools"> </a></div>
                    <div class="post-info mtb_20 ">
                      <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                      <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                      <div class="date-time">
                        <div class="day"> 11</div>
                        <div class="month">Aug</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-holder">
                    <div class="thumb post-img"><a href="#"> <img src='{{url("images/blog/blog_img_01.jpg")}}' alt="Cools"> </a></div>
                    <div class="post-info mtb_20 ">
                      <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                      <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                      <div class="date-time">
                        <div class="day"> 11</div>
                        <div class="month">Aug</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-holder">
                    <div class="thumb post-img"><a href="#"> <img src='{{url("images/blog/blog_img_02.jpg")}}' alt="Cools"> </a></div>
                    <div class="post-info mtb_20 ">
                      <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                      <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                      <div class="date-time">
                        <div class="day"> 11</div>
                        <div class="month">Aug</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- =====  Blog end ===== -->
          </div>
        </div>
      </div>
      <div id="brand_carouse" class="mtb_40 text-center">
        <div class="type-01">
          <div class="heading-part mb_20 ">
            <h2 class="main_title">Brand Logo</h2>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="brand owl-carousel ptb_20">
                <div class="item text-center"> <a href="#"><img src='{{url("images/brand/brand1.png")}}' alt="Disney" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src='{{url("images/brand/brand1.png")}}' alt="Dell" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src='{{url("images/brand/brand1.png")}}' alt="Harley" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src='{{url("images/brand/brand1.png")}}' alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src='{{url("images/brand/brand1.png")}}' alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src='{{url("images/brand/brand1.png")}}' alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src='{{url("images/brand/brand1.png")}}' alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src='{{url("images/brand/brand1.png")}}' alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src='{{url("images/brand/brand1.png")}}' alt="Canon" class="img-responsive" /></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
        
@endsection
   