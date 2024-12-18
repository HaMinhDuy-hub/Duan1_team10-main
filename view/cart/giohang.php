<!-- Breadcrumb area Start -->
<section class="page-title-area bg-color" data-bg-color="#f4f4f4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Giỏ Hàng</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">trang chủ</a></li>
                    <li class="current"><span>Giỏ Hàng</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner ptb--80 pt-md--40 pb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-md--50">
                    <form class="cart-form" action="#">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="table-content table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                                <th class="text-start">Sản Phẩm</th>
                                                <th>Giá</th>
                                                <th>Số Lượng</th>
                                                <th>Thành Tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-remove text-start"><a href="#"><i
                                                            class="flaticon-cross"></i></a></td>
                                                <td class="product-thumbnail text-start">
                                                    <img src="img/products/product-11-70x88.jpg" alt="Product Thumnail">
                                                </td>
                                                <td class="product-name text-start wide-column">
                                                    <h3>
                                                        <a href="product-details.html">Golden Easy Spot Chair.</a>
                                                    </h3>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$49.00</span>
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity">
                                                        <input type="number" class="quantity-input" name="qty"
                                                            id="qty-1" value="1" min="1">
                                                    </div>
                                                </td>
                                                <td class="product-total-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$49.00</span>
                                                    </span>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="cart-collaterals">
                        <div class="cart-totals">
                            <h5 class="font-size-14 font-bold mb--15">Giỏ Hàng</h5>
                            <div class="cart-calculator">
                                <div class="cart-calculator__item">
                                    <div class="cart-calculator__item--head">
                                        <span>Tổng Cộng</span>
                                    </div>
                                    <div class="cart-calculator__item--value">
                                        <span>$196.00</span>
                                    </div>
                                </div>
                                <div class="cart-calculator__item">
                                    <div class="cart-calculator__item--head">
                                        <span>Phí Shipper</span>
                                    </div>
                                    <div class="cart-calculator__item--value">
                                        <span>Phí cố định: $20.00</span>
                                        <div class="shipping-calculator-wrap">
                                            <a href="#shipping_calculator" class="expand-btn">Calculate Shipping</a>
                                            <form id="shipping_calculator"
                                                class="form shipping-calculator-form hide-in-default">
                                                <div class="form__group">
                                                    <select id="calc_shipping_country" name="calc_shipping_country"
                                                        class="nice-select form__input form__input--select">
                                                        <option value="">Select a country…</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD" selected="selected">Bangladesh</option>
                                                        <option value="BD">Brazil</option>
                                                        <option value="CN">China</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="FR">France</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom (UK)</option>
                                                        <option value="US">United States (US)</option>
                                                    </select>
                                                </div>
                                                <div class="form__group">
                                                    <select id="calc_shipping_district" name="calc_shipping_district"
                                                        class="nice-select form__input form__input--select">
                                                        <option value="">Select a District…</option>
                                                        <option>BARISAL</option>
                                                        <option>BHOLA</option>
                                                        <option>BANDARBAN</option>
                                                        <option>BRAHMANBARIA</option>
                                                        <option>CHANDPUR</option>
                                                        <option>CHITTAGONG</option>
                                                        <option>COMILLA</option>
                                                        <option>COX'S BAZAR</option>
                                                        <option>DHAKA</option>
                                                        <option>FARIDPUR</option>
                                                        <option>FENI</option>
                                                        <option>GAZIPUR</option>
                                                        <option>GOPALGANJ</option>
                                                        <option>JAMALPUR</option>
                                                        <option>KHAGRACHHARI</option>
                                                        <option>KISHOREGONJ</option>
                                                        <option>LAKSHMIPU</option>
                                                        <option>RMADARIPUR</option>
                                                        <option>MUNSHIGANJ</option>
                                                        <option>MYMENSINGH</option>
                                                        <option>NARAYANGANJ</option>
                                                        <option>NARSINGDI</option>
                                                        <option>NETRAKONA</option>
                                                        <option>NOAKHALI</option>
                                                        <option>RANGAMATI </option>
                                                        <option>RAJBARI</option>
                                                        <option>SHARIATPUR</option>
                                                        <option>SHERPUR</option>
                                                        <option>TANGAIL</option>
                                                    </select>
                                                </div>
                                                <div class="form__group mb--10">
                                                    <input type="text" name="calc_shipping_city" id="calc_shipping_city"
                                                        class="form__input" placeholder="Town / City">
                                                </div>

                                                <div class="form__group mb--10">
                                                    <input type="text" name="calc_shipping_zip" id="calc_shipping_zip"
                                                        class="form__input" placeholder="Postcode / Zip">
                                                </div>

                                                <div class="form__group">
                                                    <input type="submit" value="Update Totals" class="btn btn-size-sm">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-calculator__item order-total">
                                    <div class="cart-calculator__item--head">
                                        <span>Tổng Cộng</span>
                                    </div>
                                    <div class="cart-calculator__item--value">
                                        <span class="product-price-wrapper">
                                            <span class="money">$226.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php?act=thanhtoan" class="btn btn-size-md btn-shape-square btn-fullwidth">
                            Mua hàng
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->