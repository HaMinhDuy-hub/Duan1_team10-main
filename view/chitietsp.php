<!-- Breadcrumb area Start -->
<section class="page-title-area bg-color" data-bg-color="#f4f4f4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Chi tiết sản phẩm</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="current"><span>Chi tiết sản phẩm</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--80 pt-md--60">
        <div class="container">
            <div class="row g-0 mb--80 mb-md--57">
                <div class="col-lg-7 product-main-image">
                    <div class="product-image">
                        <div class="product-gallery vertical-slide-nav">
                            <div class="product-gallery__large-image mb-sm--30">
                                <div class="product-gallery__wrapper">
                                    <div class="element-carousel main-slider image-popup" data-slick-options='{
                                                "slidesToShow": 1,
                                                "slidesToScroll": 1,
                                                "infinite": true,
                                                "arrows": false, 
                                                "asNavFor": ".nav-slider"
                                            }'>
                                        <div class="item">
                                            <figure class="product-gallery__image zoom">
                                                <img src=<?=$img_path.$product_image?> alt="Product">
                                                <span class="product-badge sale">Sale</span>
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i
                                                            class="fa fa-eye"></i></button>
                                                    <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM"
                                                        class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="product-gallery__image zoom">
                                                <img src=<?=$img_path.$product_image?> alt="Product">
                                                <span class="product-badge sale">Sale</span>
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i
                                                            class="fa fa-eye"></i></button>
                                                    <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM"
                                                        class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="product-gallery__image zoom">
                                                <img src="<?=$img_path.$product_image?>" alt="Product">
                                                <span class="product-badge sale">Sale</span>
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i
                                                            class="fa fa-eye"></i></button>
                                                    <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM"
                                                        class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="product-gallery__image zoom">
                                                <img src="<?=$img_path.$product_image?>" alt="Product">
                                                <span class="product-badge sale">Sale</span>
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i
                                                            class="fa fa-eye"></i></button>
                                                    <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM"
                                                        class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-gallery__nav-image">
                                <div class="element-carousel nav-slider product-slide-nav slick-center-bottom"
                                    data-slick-options='{
                                            "spaceBetween": 10,
                                            "slidesToShow": 3,
                                            "slidesToScroll": 1,
                                            "vertical": true,
                                            "swipe": true,
                                            "verticalSwiping": true,
                                            "infinite": true,
                                            "focusOnSelect": true,
                                            "asNavFor": ".main-slider",
                                            "arrows": true, 
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-up" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-down" }
                                        }' data-slick-responsive='[
                                            {
                                                "breakpoint":1200, 
                                                "settings": {
                                                    "slidesToShow": 2
                                                } 
                                            },
                                            {
                                                "breakpoint":992, 
                                                "settings": {
                                                    "slidesToShow": 3
                                                } 
                                            },
                                            {
                                                "breakpoint":767, 
                                                "settings": {
                                                    "slidesToShow": 4,
                                                    "vertical": false
                                                } 
                                            },
                                            {
                                                "breakpoint":575, 
                                                "settings": {
                                                    "slidesToShow": 3,
                                                    "vertical": false
                                                } 
                                            },
                                            {
                                                "breakpoint":480, 
                                                "settings": {
                                                    "slidesToShow": 2,
                                                    "vertical": false
                                                } 
                                            }
                                        ]'>
                                    <div class="item">
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="<?=$img_path.$product_image?>" alt="Products">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="<?=$img_path.$product_image?>" alt="Products">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="<?=$img_path.$product_image?>" alt="Products">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="<?=$img_path.$product_image?>" alt="Products">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-lg-5 product-main-details mt-md--50">
                    <div class="product-summary pl-lg--30 pl-md--0">
                        <div class="product-rating d-flex mb--20">
                            <div class="star-rating star-four">
                                <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                            </div>
                        </div>
                        <h3 class="product-title mb--20"><?=$name?></h3>
                        <p class="product-short-description mb--20">
                            <?php echo htmlspecialchars($description); ?>
                        </p>
                        <div class="product-price-wrapper mb--25">
                            <span class="money"><?=number_format($price,0, ',', '.')?> VNĐ</span>
                            <span class="price-separator">-</span>
                            <span class="money"><?=number_format($price,0, ',', '.')?> VNĐ</span>
                        </div>
                        <form action="#" class="variation-form mb--20">
                            <div class="product-size-variations d-flex align-items-center mb--15">
                                <p class="variation-label">Size:</p>
                                <div class="product-size-variation variation-wrapper">
                                    <div class="variation">
                                        <?php foreach ($load__size as $size): ?>
                                        <?php extract($size); ?>
                                        <a href="#"
                                            class="product-size-variation-btn <?php echo $name === 'S' ? 'selected' : ''; ?>"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="<?php echo htmlspecialchars($name); ?>">
                                            <span class="product-size-variation-label">
                                                <?php echo htmlspecialchars($name); ?>
                                            </span>
                                        </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                    </div>

                    </form>
                    <div
                        class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                        <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                            <label class="quantity-label" for="pro-qty">Số Lượng:</label>
                            <div class="quantity">
                                <input type="number" class="quantity-input" name="pro-qty" id="pro-qty" value="1"
                                    min="1">
                            </div>
                        </div>
                        <button type="button" class="btn btn-shape-square btn-size-sm"
                            onclick="window.location.href='index.php?act=giohang'">
                            Mua Ngay
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center mb--77 mb-md--57">
            <div class="col-12">
                <div class="tab-style-1">
                    <div class="nav nav-tabs mb--35 mb-sm--25" id="product-tab" role="tablist">
                        <button type="button" class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-description" role="tab" aria-selected="true">
                            <span>Thông Tin Bổ Sung</span>
                        </button>
                    </div>
                    <div class="tab-content" id="product-tabContent">
                        <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                            aria-labelledby="nav-description-tab">
                            <div class="product-description">
                                <p>Bản thân nỗi đau rất quan trọng, và do đó nó được nhuộm màu giống như một công
                                    việc và nỗi đau lớn lao nào đó. Vì để bản thân cơn đau có thể giảm bớt đến mức
                                    nhỏ nhất, thì sau đó sẽ là giảm béo, nhưng đồng thời chúng sẽ xảy ra giống như
                                    một cơn đau đớn và lao động nặng nhọc nào đó. Để đi đến chi tiết nhỏ nhất, không
                                    ai nên thực hiện bất kỳ loại công việc nào trừ khi anh ta thu được lợi ích nào
                                    đó từ nó. Đừng nổi giận với nỗi đau trong sự quở trách trong niềm vui anh muốn
                                    trở thành một chiếc lông trong nỗi đau em trốn tránh không paNgoại trừ họ bị ám
                                    ảnh bởi ham muốn họ không thoát ra, họ có lỗi với việc từ bỏ nhiệm vụ của mình
                                    làm mềm tâm hồn đó công việc vất vả. từ đó tất cả những sai lầm sinh ra này là
                                    niềm vui của những người buộc tội </p>

                                <p>Bản thân nỗi đau rất quan trọng, và do đó nó được nhuộm màu giống như một công
                                    việc và nỗi đau lớn lao nào đó. Vì để bản thân cơn đau có thể giảm bớt đến mức
                                    nhỏ nhất, thì sau đó sẽ là giảm béo, nhưng đồng thời chúng sẽ xảy ra giống như
                                    một cơn đau đớn và lao động nặng nhọc nào đó. Thực ra, để đi đến từng chi tiết
                                    nhỏ nhất, không ai nên thực hiện bất kỳ điều nào trong số đó.</p>

                                <h5 class="product-description__heading">Đặc Điểm :</h5>
                                <ul>
                                    <li><i class="fa fa-circle"></i><span>Nó sẽ xảy ra, nó sẽ xảy ra, nhưng tôi sẽ
                                            dành thời gian cho nó.</span></li>
                                    <li><i class="fa fa-circle"></i><span>họ có lỗi khi bỏ bê nhiệm vụ của
                                            mình;</span></li>
                                    <li><i class="fa fa-circle"></i><span>Việc có được một khách hàng là rất quan
                                            trọng nên tôi cũng sẽ làm điều tương tự.</span></li>
                                </ul>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="nav nav-tabs mb--35 mb-sm--25" id="product-tab" role="tablist">
            <button type="button" class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                data-bs-target="#nav-description" role="tab" aria-selected="true">
                <span>Sản Phẩm Liên Quan</span>
            </button>
        </div>
        <?php
        foreach ($load__sp__cungloai as $cungloai) {
        extract($cungloai);

        // Xử lý biến an toàn
        $productImage = htmlspecialchars($img_path . $product_image);
        $productLink = "index.php?act=chitietsp&id=" . htmlspecialchars($category_id);
        $productName = htmlspecialchars($name);
        $productPrice = htmlspecialchars($price);

        echo '
        <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
            <div class="payne-product">
                <div class="product__inner">
                    <div class="product__image">
                        <figure class="product__image--holder">
                            <img src="' . $productImage . '" alt="' . $productName . '">
                        </figure>
                        <a href="' . $productLink . '" class="product-overlay"></a>
                        <div class="product__action">
                            <a href="' . $productLink . '" class="action-btn" title="Quick view">
                                <i class="fa fa-eye"></i>
                                <span class="sr-only">Quick view</span>
                            </a>
                            <a href="' . $productLink . '" class="action-btn" title="Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                                <span class="sr-only">Add to wishlist</span>
                            </a>
                            <a href="' . $productLink . '" class="action-btn" title="Add to compare">
                                <i class="fa fa-repeat"></i>
                                <span class="sr-only">Add To Compare</span>
                            </a>
                            <a href="index.php?act=giohang" class="action-btn" title="Mua Ngay">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="sr-only">Mua Ngay</span>
                            </a>
                        </div>
                    </div>
                    <div class="product__info">
                        <div class="product__info--left">
                            <h3 class="product__title">
                                <a href="' . $productLink . '">' . $productName . '</a>
                            </h3>
                            <div class="product__price">
                                <span class="money">' . $productPrice . '</span>
                                <span class="sign">VND</span>
                            </div>
                        </div>
                        <div class="product__info--right">
                            <span class="product__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        ?>
    </div>

</div>
</section>