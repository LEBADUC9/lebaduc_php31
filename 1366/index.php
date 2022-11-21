<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ 1/lebaduc</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.green.min.css">
    <link rel="stylesheet" href="css/trang_chu_1.css">
    <script src="js/jquery-3.6.0.min.js"></script>

</head>
<body>
   <header>
        <?php
            require_once('header.php')
        ?>
   </header>
   <main>
        <div class="wrap">
            <div class="banner">
                <div class="banner-item1">
                    <h1 class="banner-title">Máy chấm công giá rẻ</h1>
                    <div class="banner-sub-title1">
                        <h2>
                            Tặng "Phần Mềm Chấm Công"
                        </h2>
                    </div>
                    <div class="banner-sub-title2">
                        <h2>
                            Cung cấp giải pháp quản lí nhân sự tối ưu
                        </h2>
                    </div>
                    <img src="images/line1.png" alt="">
                    <div class="banner-content">
                        Chúng tôi mang đến dịch vụ tuyệt vời nhất <br> <br>
                        cho công ty quản lí và ngưởi lao động
                    </div>
                    <a href="categories.php">
                        <button class="learn-about">
                            Tìm hiểu ngay
                            <img src="images/right.png" alt="">
                        </button>
                    </a>
                    <div class="banner-user-box">
                        <div class="banner-user">
                            <div class="banner-user-amount">
                                150+
                            </div>
                            <div class="banner-user-content">
                                Công ty đã sử dụng
                            </div>
                        </div>
                        <div class="banner-user">
                            <div class="banner-user-amount">
                                2000+
                            </div>
                            <div class="banner-user-content">
                                Người lao động
                            </div>
                        </div>
                        <div class="banner-user">
                            <div class="banner-user-amount">
                                4,5/5
                            </div>
                            <div class="banner-user-content">
                                Đánh giá ứng dụng
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active banner-page" aria-current="true" aria-label="Slide 1">
                        <img src="images/dot1.png" alt="">
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="banner-page" aria-label="Slide 2">
                        <img src="images/dot2.png" alt="">
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="banner-page" aria-label="Slide 3">
                        <img src="images/dot2.png" alt="">
                      </button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="banner-item2">
                            <div class="locate">
                                <img src="images/spaceship.png" alt="">
                                <div class="locate-title">
                                    Kết nối định vị
                                </div>
                                
                                
                            </div>
                            <img class="map" src="images/map.png" alt="">
                            <div class="security">
                                <div class="security-title">Bảo mật thông tin</div>
                                <img src="images/shield.png" alt="">
                            </div>
                            
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="banner-item3">  
                            <img class="banner2" src="images/banner2.png" alt="">
                            <div class="clock">
                                <div class="clock-title">
                                    Tiết kiệm thời gian
                                </div>
                                <img src="images/clock.png" alt="">
                                
                            </div>
                            
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="banner-item4">  
                            <img class="banner3" src="images/banner3.png" alt="">
                            <div class="date">
                                <img src="images/date.png" alt="">
                                <div class="date-title">
                                    Dễ dàng quản lí công
                                </div>
                            </div>
                            <div class="square">
                                <div class="square-title">
                                    Thao tác nhanh chóng
                                </div>
                                <img src="images/square.png" alt="">
                            </div>
                            
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div> -->
                <div class="down"><img src="images/down.png" alt=""></div>
            </div>
            <div class="product">
                <div class="product-title"><h2>SẢN PHẨM BÁN CHẠY</h2></div>
                <div class="product-item-box ">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-more">Xem thêm</div>
            </div>
            <div class="product">
                <div class="product-title"><h2>SẢN PHẨM GIẢM GIÁ</h2></div>
                <div class="product-item-box ">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-more">Xem thêm</div>
            </div>
            <div class="product">
                <div class="product-title"><h2>SẢN PHẨM MỚI VỀ</h2></div>
                <div class="product-item-box ">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-more">Xem thêm</div>
            </div>
            <div class="product">
                <div class="product-title"><h2>SẢN PHẨM NỔI BẬT</h2></div>
                <div class="product-item-box ">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item ">
                                <div class="product-thumbnail">
                                    <img src="images/product.png" alt="">
                                    <div class="product-sale">30%</div>
                                </div>
                                <div class="product-vote">
                                    <img src="images/vote.png" alt="">
                                    <div class="point">(0)</div>
                                </div>
                                <div class="product-code">MSP: CCR0037</div>
                                <div class="product-content">MÁY CHẦM CÔNG VÂN TAY RONALD JACK 5000 AID</div>
                                <div class="product-price">
                                    <div class="product-price1">2.249.000 đ</div>
                                    <div class="product-price2">3.729.000 đ</div>
                                    <div class="product-add"><img src="images/add.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-more">Xem thêm</div>
            </div>
            <div class="detail">
                <div class="detail-item">
                    <div class="detail-title">
                        <div class="punclock"> Punclock</div>
                        <div class="365">365</div>
                    </div>
                    <div class="detail-sub-title">App chấm công bằng công nghệ mới nhất hiện nay</div>
                    <div class="detail-content">Chúng tôi mang đến dịch vụ tốt nhất cho các công ty và người quản lí lao động</div>
                    <button class="detail-btn">
                        Xem chi tiết
                        <img src="images/right.png" alt="">
                    </button>
                </div>
                <div class="detail-item2">
                    <img src="images/bg-detail.png" alt="">
                    <img src="images/logo.png" alt="">
                </div>
            </div>
            <div class="trademark">
                <div class="trademark-title"><h2>CÁC HÃNG THƯƠNG HIỆU</h2></div>
                <div class="trademark-logo">
                    <img src="images/trademark1.png" alt="">
                    <img src="images/trademark2.png" alt="">
                    <img src="images/trademark3.png" alt="">
                    <img src="images/trademark4.png" alt="">
                    <img src="images/trademark5.png" alt="">
                    <img src="images/trademark6.png" alt="">
                </div>
            </div>
            <div class="evaluate">
                <div class="evaluate-title"><h2>MỘT SỐ BÀI ĐÁNH GIÁ</h2></div>
                <div class="evaluate-box">
                    <div class="evaluate-content1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt sequi odio vel nam praesentium officiis in reiciendis, illo quae velit aliquam fugit
                         repellat autem hic ipsam eos voluptatem pariatur perspiciatis et commodi voluptatum aliquid. Dignissimos tempore officiis deserunt? Ipsa ea consequatur 
                         dignissimos ad quibusdam numquam! Impedit recusandae minima sapiente iusto suscipit in tenetur non at? Ab eum eius nostrum fugiat dolore adipisci nobis
                          molestiae accusantium perspiciatis distinctio, consectetur illum aperiam assumenda natus reiciendis magni quo quisquam veritatis consequuntur, minima 
                          vero deserunt tempore facere iste? Neque iure repudiandae temporibus quia odio? Illum labore nulla molestiae eveniet enim ipsa cumque necessitatibus ea
                           omnis unde. Omnis velit quasi enim earum ex.<br><br>
                           Eius, repudiandae asperiores atque, deserunt repellendus laboriosam reprehenderit expedita eligendi magnam 
                           quas repellat. Animi esse consequatur quos similique omnis, nisi atque exercitationem a unde laborum provident officia sapiente? Dolorum saepe minima 
                           architecto obcaecati nihil sed, iure ipsa incidunt! Iusto ipsam fugiat veniam deleniti repudiandae odio, veritatis ad aperiam debitis pariatur voluptate 
                           voluptatem rem accusamus voluptas, reprehenderit quaerat nisi dolorem inventore? At doloremque aut laborum corporis cumque. Accusantium incidunt
                            consequuntur odit architecto rem aspernatur, iusto tenetur. Quaerat expedita in officiis aliquid obcaecati sunt, excepturi commodi enim earum, nemo 
                            nostrum qui, ut nam repellendus. Sit explicabo omnis adipisci esse, voluptatibus, provident neque quibusdam animi minima exercitationem laborum fuga 
                            qui laboriosam.
                    </div>
                    <div class="evaluate-thumbnail">
                        <img src="images/product.png" alt="">
                    </div>
                    <div class="evaluate-content2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt sequi odio vel nam praesentium officiis in reiciendis, illo quae velit aliquam fugit
                         repellat autem hic ipsam eos voluptatem pariatur perspiciatis et commodi voluptatum aliquid. Dignissimos tempore officiis deserunt? Ipsa ea consequatur 
                         dignissimos ad quibusdam numquam! Impedit recusandae minima sapiente iusto suscipit in tenetur non at? Ab eum eius nostrum fugiat dolore adipisci nobis
                          molestiae accusantium perspiciatis distinctio, consectetur illum aperiam assumenda natus reiciendis magni quo quisquam veritatis consequuntur, minima 
                          vero deserunt tempore facere iste? Neque iure repudiandae temporibus quia odio? Illum labore nulla molestiae eveniet enim ipsa cumque necessitatibus ea
                           omnis unde. Omnis velit quasi enim earum ex.<br><br>
                           Eius, repudiandae asperiores atque, deserunt repellendus laboriosam reprehenderit expedita eligendi magnam 
                           quas repellat. Animi esse consequatur quos similique omnis, nisi atque exercitationem a unde laborum provident officia sapiente? Dolorum saepe minima 
                           architecto obcaecati nihil sed, iure ipsa incidunt! Iusto ipsam fugiat veniam deleniti repudiandae odio, veritatis ad aperiam debitis pariatur voluptate 
                           voluptatem rem accusamus voluptas, reprehenderit quaerat nisi dolorem inventore? At doloremque aut laborum corporis cumque. Accusantium incidunt
                            consequuntur odit architecto rem aspernatur, iusto tenetur. Quaerat expedita in officiis aliquid obcaecati sunt, excepturi commodi enim earum, nemo 
                            nostrum qui, ut nam repellendus. Sit explicabo omnis adipisci esse, voluptatibus, provident neque quibusdam animi minima exercitationem laborum fuga 
                            qui laboriosam.
                    </div>
                    <div class="evaluate-collapse">Thu gọn</div>
                    <div class="evaluate-more">Xem thêm</div>
                </div>
                <div class="evaluate-list">
                    <div class="evaluate-list-title"><h4>MỤC LỤC</h4></div>
                    <hr>
                    <div class="evaluate-list-sub-title">
                        1. Lorem ipsum dolor sit amet.
                    </div>
                    <ul>
                        <li>1.1 Lorem ipsum dolor sit amet.</li>
                    </ul>
                    <div class="evaluate-list-sub-title">
                        2. Lorem ipsum dolor sit amet.
                        
                    </div>
                    <ul>
                        <li>2.1 Lorem ipsum dolor sit amet.</li>
                        <li>2.2 Lorem ipsum dolor sit amet.</li>
                        <li>2.3 Lorem ipsum dolor sit amet.</li>
                        <li>2.4 Lorem ipsum dolor sit amet.</li>
                    </ul>
                    <div class="evaluate-list-sub-title">
                        3. Lorem ipsum dolor sit amet.
                    </div>
                    <ul>
                        <li>3.1 Lorem ipsum dolor sit amet.</li>
                        <li>3.2 Lorem ipsum dolor sit amet.</li>
                        <li>3.3 Lorem ipsum dolor sit amet.</li>
                    </ul>
                    <div class="evaluate-list-sub-title">
                        4. Lorem ipsum dolor sit amet.
                    </div>
                    <ul>
                        <li>4.1 Lorem ipsum dolor sit amet.</li>
                        <li>4.2 Lorem ipsum dolor sit amet.</li>
                    </ul>
                    <div class="evaluate-list-sub-title">
                        5. Lorem ipsum dolor sit amet.
                    </div>
                    <ul>
                        <li>5.1 Lorem ipsum dolor sit amet.</li>
                        <li>5.2 Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
            </div>
        </div>
   </main>
   <?php
        require_once('footer.php')
   ?>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/trang_chu_1.js"></script>
</body>
</html>