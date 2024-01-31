<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">الرئيسية</a>
                    <span></span> الموضة
                    <span></span> فستان مرقع بطبعات تجريدية
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/products') }}/{{ $product->image }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-1.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-3.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-4.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-5.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-6.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-7.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-3.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-4.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-5.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-6.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-7.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-8.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-9.jpg') }}"
                                                    alt="product image"></div>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">مشاركة هذا:</strong></li>
                                            <li class="social-facebook"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $product->name }}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span>العلامات التجارية: <a href="#">Bootstrap</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span
                                                        class="text-brand">${{ $product->regular_price }}</span></ins>
                                                {{-- <ins><span class="old-price font-md ml-15">$200.00</span></ins> --}}
                                                {{-- <span class="save-price  font-md color3 ml-15">25% Off</span> --}}
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product->short_description }}</p>
                                        </div>
                                        {{-- <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand Warranty</li>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div> --}}
                                        <div class="attr-detail attr-color mb-15">
                                            <strong class="mr-10">اللون</strong>
                                            <ul class="list-filter color-filter">
                                                <li><a href="#" data-color="Red"><span
                                                            class="product-color-red"></span></a></li>
                                                <li><a href="#" data-color="Yellow"><span
                                                            class="product-color-yellow"></span></a></li>
                                                <li class="active"><a href="#" data-color="White"><span
                                                            class="product-color-white"></span></a></li>
                                                <li><a href="#" data-color="Orange"><span
                                                            class="product-color-orange"></span></a></li>
                                                <li><a href="#" data-color="Cyan"><span
                                                            class="product-color-cyan"></span></a></li>
                                                <li><a href="#" data-color="Green"><span
                                                            class="product-color-green"></span></a></li>
                                                <li><a href="#" data-color="Purple"><span
                                                            class="product-color-purple"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="attr-detail attr-size">
                                            <strong class="mr-10">الحجم</strong>
                                            <ul class="list-filter size-filter font-small">
                                                <li><a href="#">S</a></li>
                                                <li class="active"><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                                <li><a href="#">XXL</a></li>
                                            </ul>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i
                                                        class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i
                                                        class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <button type="button" class="button button-add-to-cart"
                                                    wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})">Add
                                                    to cart</button>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up"
                                                    href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">رمز التخزين التعريفي: <a href="#">FWM15VKT</a></li>
                                            <li class="mb-5">العلامات: <a href="#" rel="tag">قماش</a>, <a
                                                    href="#" rel="tag">نساء</a>, <a href="#"
                                                    rel="tag">فستان</a> </li>
                                            <li>التوفر:<span class="in-stock text-success ml-5">8 عناصر في المخزون</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                            href="#Description">المواصفات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                            href="#Additional-info">معلومات إضافية</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab"
                                            href="#Reviews">تقييمات (3)</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            {{ $product->description }}
                                            {{-- <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop
                                                tightly neurotic hungrily some and dear furiously this apart.</p>
                                            <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped
                                                besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.
                                            </p>
                                            <ul class="product-more-infor mt-30">
                                                <li><span>Type Of Packing</span> Bottle</li>
                                                <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                                                <li><span>Quantity Per Case</span> 100ml</li>
                                                <li><span>Ethyl Alcohol</span> 70%</li>
                                                <li><span>Piece In One</span> Carton</li>
                                            </ul>
                                            <hr class="wp-block-separator is-style-dots">
                                            <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward
                                                energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>
                                            <h4 class="mt-30">Packaging & Delivery</h4>
                                            <hr class="wp-block-separator is-style-wide">
                                            <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane
                                                went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.
                                            </p>
                                            <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian
                                                in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively
                                                dachshund.
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info">
                                        <table class="font-md">
                                            <tbody>
                                                <tr class="stand-up">
                                                    <th>الوقوف</th>
                                                    <td>
                                                        <p>35 بوصة طول × 24 بوصة عرض × 37-45 بوصة ارتفاع (العجلة الأمامية إلى الخلفية)</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-wo-wheels">
                                                    <th>مطوية (بدون عجلات)</th>
                                                    <td>
                                                        <p>32.5 بوصة طول × 18.5 بوصة عرض × 16.5 بوصة ارتفاع</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-w-wheels">
                                                    <th>مطوية (مع عجلات)</th>
                                                    <td>
                                                        <p>32.5″L x 24″W x 18.5″H</p>
                                                    </td>
                                                </tr>
                                                <tr class="door-pass-through">
                                                    <th>تمر عبر الباب</th>
                                                    <td>
                                                        <p>24</p>
                                                    </td>
                                                </tr>
                                                <tr class="frame">
                                                    <th>إطار</th>
                                                    <td>
                                                        <p>الألومنيوم</p>
                                                    </td>
                                                </tr>
                                                <tr class="weight-wo-wheels">
                                                    <th>الوزن (بدون عجلات)</th>
                                                    <td>
                                                        <p>20 رطل</p>
                                                    </td>
                                                </tr>
                                                <tr class="weight-capacity">
                                                    <th>سعة الوزن</th>
                                                    <td>
                                                        <p>60 رطل</p>
                                                    </td>
                                                </tr>
                                                <tr class="width">
                                                    <th>العرض</th>
                                                    <td>
                                                        <p>24″</p>
                                                    </td>
                                                </tr>
                                                <tr class="handle-height-ground-to-handle">
                                                    <th>ارتفاع المقبض (من الأرض إلى المقبض)</th>
                                                    <td>
                                                        <p>37-45″</p>
                                                    </td>
                                                </tr>
                                                <tr class="wheels">
                                                    <th>عجلات</th>
                                                    <td>
                                                        <p>مداس أملس بمسار عريض مقاس 12 بوصة</p>
                                                    </td>
                                                </tr>
                                                <tr class="seat-back-height">
                                                    <th>ارتفاع ظهر المقعد</th>
                                                    <td>
                                                        <p>21.5″</p>
                                                    </td>
                                                </tr>
                                                <tr class="head-room-inside-canopy">
                                                    <th>غرفة الرأس (داخل المظلة)</th>
                                                    <td>
                                                        <p>25″</p>
                                                    </td>
                                                </tr>
                                                <tr class="pa_color">
                                                    <th>لون</th>
                                                    <td>
                                                        <p>الأسود، الأزرق، الأحمر، الأبيض</p>
                                                    </td>
                                                </tr>
                                                <tr class="pa_size">
                                                    <th>الحجم</th>
                                                    <td>
                                                        <p>M, S</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">أسئلة وأجوبة العملاء</h4>
                                                    <div class="comment-list">
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{ asset('assets/imgs/page/avatar-6.jpg') }}"
                                                                        alt="">
                                                                    <h6><a href="#">Jacky Chan</a></h6>
                                                                    <p class="font-xxs">منذ عام 2012</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:90%">
                                                                        </div>
                                                                    </div>
                                                                    <p>شكرًا لك على الشحن السريع جدًا من بولندا خلال 3 أيام فقط.</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">4 ديسمبر 2020 الساعة 3:12 مساءً </p>
                                                                            <a href="#"
                                                                                class="text-brand btn-reply">الرد <i
                                                                                    class="fi-rs-arrow-right"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single-comment -->
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{ asset('assets/imgs/page/avatar-7.jpg') }}"
                                                                        alt="">
                                                                    <h6><a href="#">آنا روزي</a></h6>
                                                                    <p class="font-xxs">منذ 2008</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:90%">
                                                                        </div>
                                                                    </div>
                                                                    <p>سعر منخفض رائع ويعمل بشكل جيد.</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">4 ديسمبر 2020 الساعة 3:12 مساءً </p>
                                                                            <a href="#"
                                                                                class="text-brand btn-reply">الرد <i
                                                                                    class="fi-rs-arrow-right"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single-comment -->
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{ asset('assets/imgs/page/avatar-8.jpg') }}"
                                                                        alt="">
                                                                    <h6><a href="#">ستيفن كيني</a></h6>
                                                                    <p class="font-xxs">منذ عام 2010</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:90%">
                                                                        </div>
                                                                    </div>
                                                                    <p>أصلية وجميلة، أحب هذه الطريقة أكثر من أي وقت مضى، فهي سماعات أذن رائعة</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">4 ديسمبر 2020 الساعة 3:12 مساءً </p>
                                                                            <a href="#"
                                                                                class="text-brand btn-reply">الرد <i
                                                                                    class="fi-rs-arrow-right"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single-comment -->
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h4 class="mb-30">آراء العملاء</h4>
                                                    <div class="d-flex mb-30">
                                                        <div class="product-rate d-inline-block mr-15">
                                                            <div class="product-rating" style="width:90%">
                                                            </div>
                                                        </div>
                                                        <h6>4.8 من 5</h6>
                                                    </div>
                                                    <div class="progress">
                                                        <span>5 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100">50%
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>4 نجوم</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">25%
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>3 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 45%;" aria-valuenow="45" aria-valuemin="0"
                                                            aria-valuemax="100">45%
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>2 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100">65%
                                                        </div>
                                                    </div>
                                                    <div class="progress mb-30">
                                                        <span>1 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                                            aria-valuemax="100">85%
                                                        </div>
                                                    </div>
                                                    <a href="#" class="font-xs text-muted">كيف يتم حساب التقييمات؟</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--comment form-->
                                        <div class="comment-form">
                                            <h4 class="mb-15">أضف تعليقًا</h4>
                                            <div class="product-rate d-inline-block mb-30">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12">
                                                    <form class="form-contact comment_form" action="#"
                                                        id="commentForm">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                                                        placeholder="Write Comment"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="name"
                                                                        id="name" type="text"
                                                                        placeholder="Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="email"
                                                                        id="email" type="email"
                                                                        placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="website"
                                                                        id="website" type="text"
                                                                        placeholder="Website">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="button button-contactForm">تقديم المراجعة</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">منتجات ذات صله</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach ($rproducts as $rproduct)
                                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                <div class="product-cart-wrap small hover-up">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{ route('product.details', ['slug' => $rproduct->slug]) }}"
                                                                tabindex="0">
                                                                <img class="default-img"
                                                                    src="{{ asset('assets/imgs/shop/product-') }}{{ $rproduct->id }}-1.jpg"
                                                                    alt="{{ $rproduct->name }}">
                                                                <img class="hover-img"
                                                                    src="{{ asset('assets/imgs/shop/product-2-2.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        {{-- <div class="product-action-1">
                                                            <a aria-label="Quick view"
                                                                class="action-btn small hover-up"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#quickViewModal"><i
                                                                    class="fi-rs-search"></i></a>
                                                            <a aria-label="Add To Wishlist"
                                                                class="action-btn small hover-up" href="wishlist.php"
                                                                tabindex="0"><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn small hover-up"
                                                                href="compare.php" tabindex="0"><i
                                                                    class="fi-rs-shuffle"></i></a>
                                                        </div> --}}
                                                        <div
                                                            class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="hot">Hot</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <h2><a href="product-details.html" tabindex="0">سماعة رأس ألسترا باس</a></h2>
                                                        <div class="rating-result" title="90%">
                                                            <span>
                                                            </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>${{ $rproduct->regular_price }}</span>
                                                            {{-- <span class="old-price">$245.8</span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">فئات المنتج</h5>
                            <ul class="categories">
                                <li><a href="#">الأحذية والحقائب</a></li>
                                <li><a href="#">بلوزات وقمصان</a></li>
                                <li><a href="#">فساتين</a></li>
                                <li><a href="#">ملابس سباحة</a></li>
                                <li><a href="#">الجمال</a></li>
                                <li><a href="#">المجوهرات والساعات</a></li>
                                <li><a href="#">اكسسوارات</a></li>
                            </ul>
                        </div>
                        <!-- Fillter By Price -->
                        <div class="sidebar-widget price_range range mb-30">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">املأ بالسعر</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>يتراوح:</span><input type="text" id="amount" name="price"
                                                placeholder="Add Your Price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>احمر
                                                (56)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>اخضر
                                                (78)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>ازرق
                                                (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">حالة المنتج</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox11" value="">
                                        <label class="form-check-label" for="exampleCheckbox11"><span>جديد
                                                (1506)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox21" value="">
                                        <label class="form-check-label" for="exampleCheckbox21"><span>تم تجديده
                                                (27)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox31" value="">
                                        <label class="form-check-label" for="exampleCheckbox31"><span>مستعمل
                                                (45)</span></label>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i>
                                مرشح</a>
                        </div>
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">منتجات جديدة</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach ($nproducts as $nproduct)
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/shop/product-') }}{{ $nproduct->id }}-1.jpg"
                                            alt="{{ $nproduct->name }}">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a
                                                href="{{ route('product.details', ['slug' => $nproduct->slug]) }}">{{ $nproduct->name }}</a>
                                        </h5>
                                        <p class="price mb-0 mt-5">${{ $nproduct->regular_price }}</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:90%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
