<div>
    <main class="main">
        {{-- <section class="home-slider position-relative pt-50">
                <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                    <div class="single-hero-slider single-animation-wrap">
                        <div class="container">
                            <div class="row align-items-center slider-animated-1">
                                <div class="col-lg-5 col-md-6">
                                    <div class="hero-slider-content-2">
                                        <h4 class="animated">عروض التجارة</h4>
                                        <h2 class="animated fw-900">صفقات ذات قيمة فائقة</h2>
                                        <h1 class="animated fw-900 text-brand">على جميع المنتجات</h1>
                                        <p class="animated">وفر المزيد مع الكوبونات وخصم يصل إلى 70%</p>
                                        <a class="animated btn btn-brush btn-brush-3" href="#"> تسوق الآن </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="single-slider-img single-slider-img-1">
                                        <img class="animated slider-1-1" src="{{ asset('assets/imgs/slider/slider-1.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-hero-slider single-animation-wrap">
                        <div class="container">
                            <div class="row align-items-center slider-animated-1">
                                <div class="col-lg-5 col-md-6">
                                    <div class="hero-slider-content-2">
                                        <h4 class="animated">عروض ترويجية ساخنة</h4>
                                        <h2 class="animated fw-900">تجاه الموضة</h2>
                                        <h1 class="animated fw-900 text-7">مجموعة رائعة</h1>
                                        <p class="animated">وفر المزيد مع الكوبونات وخصم يصل إلى 20%</p>
                                        <a class="animated btn btn-brush btn-brush-2" href="#"> اكتشف الآن </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="single-slider-img single-slider-img-1">
                                        <img class="animated slider-1-2" src="{{ asset('assets/imgs/slider/slider-2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-arrow hero-slider-1-arrow"></div>
            </section> --}}
        {{-- <section class="featured section-padding position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="{{ asset('assets/imgs/theme/icons/feature-1.png') }}" alt="">
                                <h4 class="bg-1">ًالشحن مجانا</h4>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="{{ asset('assets/imgs/theme/icons/feature-2.png') }}" alt="">
                                <h4 class="bg-3">طلب الشراء عبر الإنترنت</h4>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="{{ asset('assets/imgs/theme/icons/feature-3.png') }}" alt="">
                                <h4 class="bg-2">توفير المال</h4>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="{{ asset('assets/imgs/theme/icons/feature-4.png') }}" alt="">
                                <h4 class="bg-4">العروض الترويجية</h4>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="{{ asset('assets/imgs/theme/icons/feature-5.png') }}" alt="">
                                <h4 class="bg-5">بيع سعيد</h4>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="{{ asset('assets/imgs/theme/icons/feature-6.png') }}" alt="">
                                <h4 class="bg-6">دعم 24/7</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab"
                                data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one"
                                aria-selected="true"> مميز</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two"
                                type="button" role="tab" aria-controls="tab-two" aria-selected="false">
                            عرض خاص</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three"
                                type="button" role="tab" aria-controls="tab-three" aria-selected="false">
                                جديد</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">عرض المزيد<i
                            class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        @if(!count($featuredProducts))
                        <div class="container-fluid p-3 text-center">

                            <div class="card mb-3">
                                <img src="https://dlinkmea.com/images/no-product.png" class="card-img-top img-fluid"  style="max-width: 40%;margin: auto;">
                                <div class="card-body">
                                    <h5 class="card-title">عفوا</h5>
                                    <p class="card-text">لا توجد منتجات مميزه حاليا</p>
                                    <p class="card-text"><small class="text-muted">برجاء تصفح الاقسام الاخرى وسوف تجد مايسرك</small></p>
                                </div>
                            </div>


                        </div>
                        @endif
                        <div class="row product-grid-4">
                            @foreach ($featuredProducts as $newProduct)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a target="_blank" href="{{ $newProduct->link }}">
                                                    <img class="default-img"
                                                        src="{{ $newProduct->image }}"
                                                        alt="">
                                                    <img class="hover-img"
                                                        src="{{ $newProduct->store->image }}"
                                                        alt="">
                                                </a>
                                            </div>
                                            {{-- <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div> --}}
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot" style="background-color: #589c66 !important;">مميز</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="#">{{ $newProduct->category->name }}</a>
                                            </div>
                                            <h2><a href="#">{{ $newProduct->name }}</a></h2>
                                            <div class="rating-result" title="{{ $newProduct->rating }}%">
                                                <span>
                                                    <span>{{ $newProduct->rating }}%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span style='color:#008000;'>{{ $newProduct->sale_price }} </span>
                                                <span class="old-price">{{ $newProduct->regular_price }} </span>
                                            </div>
                                            <div style="color: #F15412;font-weight: bold;">
                                                {{ $newProduct->discount_code }}
                                            </div>
                                            {{-- <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="#"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Special Offer)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            @foreach ($specialOfferProducts as $specialOfferProduct)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a target="_blank" href="{{ $specialOfferProduct->link }}">
                                                    <img class="default-img"
                                                        src="{{ $specialOfferProduct->image }}"
                                                        alt="">
                                                    <img class="hover-img"
                                                        src="{{ $specialOfferProduct->store->image }}"
                                                        alt="">
                                                </a>
                                            </div>
                                            {{-- <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div> --}}
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <!--<span class="last" >خصم خاص</span>-->
                                                <span style="background-color:#F15412" >عرض خاص</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="#">{{ $specialOfferProduct->category->name }}</a>
                                            </div>
                                            <h2><a href="#">{{ $specialOfferProduct->name }}</a></h2>
                                            <div class="rating-result" title="{{ $specialOfferProduct->rating }}%">
                                                <span>
                                                    <span>{{ $specialOfferProduct->rating }}%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span style='color:#008000;'>{{ $specialOfferProduct->sale_price }} </span>
                                                <span class="old-price">{{ $specialOfferProduct->regular_price }} </span>
                                            </div>
                                             <div style="color: #F15412;font-weight: bold;">
                                                {{ $specialOfferProduct->discount_code }}
                                            </div>
                                            {{-- <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="#"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>



                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            @foreach ($newProducts as $newProduct)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a target="_blank" href="{{ $newProduct->link }}">
                                                <img class="default-img"
                                                    src="{{ $newProduct->image }}"
                                                    alt="">
                                                <img class="hover-img"
                                                    src="{{ $newProduct->store->image }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        {{-- <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div> --}}
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot" style='background-color:#7ac4ef;'>جديد</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="#">{{ $newProduct->category->name }}</a>
                                        </div>
                                        <h2><a href="#">{{ $newProduct->name }}</a></h2>
                                        <div class="rating-result" title="{{ $newProduct->rating }}%">
                                            <span>
                                                <span>{{ $newProduct->rating }}%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span style='color:#008000;'>{{ $newProduct->sale_price }} </span>
                                            <span class="old-price">{{ $newProduct->regular_price }} </span>
                                        </div>
                                         <div style="color: #F15412;font-weight: bold;">
                                                {{ $newProduct->discount_code }}
                                            </div>
                                        {{-- <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="#"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
        {{-- <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="{{ asset('assets/imgs/banner/banner-4.png') }}" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">خدمات الشركة</h4>
                        <h1 class="fw-600 mb-20">نحن شركة رائجة معتمدة <br>مزود الخدمة المعتمد</h1>
                        <a href="#" class="btn">تعرف على المزيد <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>فئات</span> المنتجات</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows">
                    </div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="#"><img src="{{ asset('assets/imgs/shop/category-thumb-1.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="#"> ازياء البنات </a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="#"> <img src="{{ asset('assets/imgs/shop/category-thumb-2.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="#"> احذيه هاف بوت</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="#"><img src="{{ asset('assets/imgs/shop/category-thumb-3.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="#">شميز حريمي </a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="#"><img src="{{ asset('assets/imgs/shop/category-thumb-4.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="#"> اثاث ومفروشات </a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="#"><img src="{{ asset('assets/imgs/shop/category-thumb-5.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="#">فساتين اطفال شيك</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="#"><img src="{{ asset('assets/imgs/shop/category-thumb-6.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="#"> بدل رجالي </a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="#"><img src="{{ asset('assets/imgs/shop/category-thumb-7.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="#">سيدة الموضة للنظارات الشمسية</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="#"><img src="{{ asset('assets/imgs/shop/category-thumb-8.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="#">شوز بناتي</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('assets/imgs/banner/banner-1.png') }}" alt="">
                            <div class="banner-text">
                                <span>العرض الذكي</span>
                                <h4>وفر 20% على <br>حقيبة المرأة</h4>
                                <a href="#">تسوق الآن <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('assets/imgs/banner/banner-2.png') }}" alt="">
                            <div class="banner-text">
                                <span>البيع معطل</span>
                                <h4>الصيف العظيم <br>مجموعة</h4>
                                <a href="#">تسوق الآن <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="{{ asset('assets/imgs/banner/banner-3.png') }}" alt="">
                            <div class="banner-text">
                                <span>الوافدين حديثاً</span>
                                <h4>تسوق اليوم <br>العروض والصفقات</h4>
                                <a href="#">تسوق الآن <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding brand_sec">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>الوافدين</span> حديثاً</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                        id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="#">
                                        <img class="default-img"
                                            src="{{ asset('assets/imgs/shop/product-2-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/imgs/shop/product-2-2.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                {{-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div> --}}
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">الاكثر شعبية</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="#">الملابس النسائية </a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>238.85 </span>
                                    <span class="old-price">245.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="#">
                                        <img class="default-img"
                                            src="{{ asset('assets/imgs/shop/product-4-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/imgs/shop/product-4-2.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                {{-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div> --}}
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">جديد</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="#"> جيمي شو </a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>173.85 </span>
                                    <span class="old-price">185.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="#">
                                        <img class="default-img"
                                            src="{{ asset('assets/imgs/shop/product-15-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/imgs/shop/product-15-2.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                {{-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div> --}}
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">مميز</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="#">حقيبة يد </a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>215.85 </span>
                                    <span class="old-price">235.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="#">
                                        <img class="default-img"
                                            src="{{ asset('assets/imgs/shop/product-3-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/imgs/shop/product-3-2.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                {{-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div> --}}
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">.33%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="#">فستان اطفال شيك </a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>83.8 </span>
                                    <span class="old-price">125.2</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="#">
                                        <img class="default-img"
                                            src="{{ asset('assets/imgs/shop/product-9-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/imgs/shop/product-9-2.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                {{-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div> --}}
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">-25%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="#">سيدة الموضة للنظارات الشمسية </a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>1238.85 </span>
                                    <span class="old-price">1245.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="#">
                                        <img class="default-img"
                                            src="{{ asset('assets/imgs/shop/product-7-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/imgs/shop/product-7-2.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                {{-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div> --}}
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">جديد</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="#">مكياج اكريلك </a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>123 </span>
                                    <span class="old-price">156</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="#">
                                        <img class="default-img"
                                            src="{{ asset('assets/imgs/shop/product-1-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/imgs/shop/product-1-2.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                {{-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div> --}}
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="#"> ازياء البنات </a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>238.85 </span>
                                    <span class="old-price">245.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding brand_sec" >
            <div class="container">
                <h3 class="section-title mb-20 wow fadeIn animated"><span>العلامات التجارية </span> المميزة </h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                        id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-1.png') }}"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-2.png') }}"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-3.png') }}"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-4.png') }}"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-5.png') }}"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-6.png') }}"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-3.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>
