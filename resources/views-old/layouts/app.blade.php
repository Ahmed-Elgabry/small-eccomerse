<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>E-shop Media</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @livewireStyles
</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i>
                                        Arabic <i class="fi-rs-angle-small-down"></i></a>
                                    {{-- <ul class="language-dropdown">
                                        <li><a href="#"><img src="{{asset('assets/imgs/theme/flag-fr.png')}}"
                                                    alt="">Français</a></li>
                                        <li><a href="#"><img src="{{asset('assets/imgs/theme/flag-dt.png')}}"
                                                    alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="{{asset('assets/imgs/theme/flag-ru.png')}}"
                                                    alt="">Pусский</a></li>
                                    </ul> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>احصل على أجهزة رائعة بخصم يصل إلى 50% <a href="#">مشاهدة التفاصيل</a></li>
                                    <li>عروض القيمة الفائقة - وفر المزيد مع القسائم</li>
                                    <li>25 مجوهرات فضية عصرية، وفر ما يصل إلى 35% خصم اليوم <a href="#">تسوق الآن</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                                <ul>
                                    <li><i class="fi-rs-user"></i> {{ Auth::user()->name }} /
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();"> تسجيل خروج
                                            </a>
                                        </form>
                                </ul>
                            @else
                                <ul>
                                    <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">تسجيل الدخول </a> / <a
                                            href="{{ route('register') }}">قم بالتسجيل</a></li>
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="/"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                        </div>
                         <div class="header-right">
                            @livewire('header-search-component')
                            <div class="header-action-right">
                                {{--<div class="header-action-2">
                                    @livewire('wishlist-icon-component')
                                    @livewire('cart-icon-component')
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div dir="rtl" class="header-bottom header-bottom-bg-color sticky-bar">
                        <div class="container">
                            <div class="header-wrap header-space-between position-relative">
                                <div class="logo logo-width-1 d-block d-lg-none">
                                    <a href="#"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                                </div>
                                <div class="header-nav d-none d-lg-flex">
                                    <div class="main-categori-wrap d-none d-lg-block">
                                        <a class="categori-button-active" href="#">
                                            <span class="fi-rs-apps"><span></span></span>   قائمة المنتجات
                                        </a>
                                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                            <ul>
                                                @foreach (App\Models\Category::whereNull('parent_id')->get() as $category)
                                                    @if ($category->children->count() > 0)
                                                        <li class="has-children">
                                                            <a href="#"><i class="surfsidemedia-font-dress"></i>{{ $category->name }}</a>
                                                            <x-navigation-category :category="$category" />
                                                        </li>
                                                    @else
                                                        <li><a href="#"><i class="surfsidemedia-font-desktop"></i>{{ $category->name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <div class="more_categories">إظهار المزيد ...</div>
                                        </div>
                                    </div></span>
                                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                                        <nav>
                                            <ul>
                                                <li><a class="active" href="/">الرئيسية </a></li>
                                                <li><a href="#">حولنا</a></li>
                                                <li><a href="{{ route('shop') }}">فئة المنتجات</a></li>
                                                <li class="position-static"><a href="#">لدينا مجموعات <i
                                                            class="fi-rs-angle-down"></i></a>
                                                    <ul class="mega-menu">
                                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                                            <a class="menu-title" href="#">أزياء نسائية</a>
                                                            <ul>
                                                                <li><a href="#">فساتين</a></li>
                                                                <li><a href="#">بلوزات وقمصان</a>
                                                                </li>
                                                                <li><a href="#">هوديس وبلوزات</a></li>
                                                                <li><a href="#">فساتين زفاف</a></li>
                                                                <li><a href="#">فساتين حفلة موسيقية</a></li>
                                                                <li><a href="#">أزياء تنكرية</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                                            <a class="menu-title" href="#">أزياء رجالي</a>
                                                            <ul>
                                                                <li><a href="#">جاكيتات</a></li>
                                                                <li><a href="#">كاجوال جلد صناعي</a>
                                                                </li>
                                                                <li><a href="#">الجلد الاصلى الممتاز</a></li>
                                                                <li><a href="#">السراويل</a></li>
                                                                <li><a href="#">بنطال رياضي</a></li>
                                                                <li><a href="#">سراويل النساء</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                                            <a class="menu-title" href="#">تكنولوجيا</a>
                                                            <ul>
                                                                <li><a href="#">أجهزة الكمبيوتر المحمولة المخصصة للألعاب</a></li>
                                                                <li><a href="#">أجهزة الكمبيوتر المحمولة فائقة النحافة</a>
                                                                </li>
                                                                <li><a href="#">أجهزة لوحية</a></li>
                                                                <li><a href="#">ملحقات الكمبيوتر المحمول</a>
                                                                </li>
                                                                <li><a href="#">ملحقات التابلت</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                                            <div class="menu-banner-wrap">
                                                                <a href="#"><img
                                                                        src="assets/imgs/banner/menu-banner.jpg"
                                                                        alt="Surfside Media"></a>
                                                                <div class="menu-banner-content">
                                                                    <h4>العروض الرائجة</h4>
                                                                    <h3>لا تفوت<br> الشائع</h3>
                                                                    <div class="menu-banner-price">
                                                                        <span class="new-price text-success">وفر حتى 50%</span>
                                                                    </div>
                                                                    <div class="menu-banner-btn">
                                                                        <a href="#">تسوق الآن</a>
                                                                    </div>
                                                                </div>
                                                                <div class="menu-banner-discount">
                                                                    <h3>
                                                                        <span>35%</span> خصم
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">مدونة </a></li>
                                                <li><a href="#">اتصل بنا</a></li>
                                                @auth
                                                <li><a href="#">Merchant Account<i class="fi-rs-angle-down"></i></a>
                                                        @if (Auth::user()->utype == 'ADM')
                                                            <ul class="sub-menu">
                                                                {{-- <li><a href="{{ route('admin.dashboard') }}"> Dashboard</a></li> --}}
                                                                <li><a href="{{ route('admin.products') }}">Products</a></li>
                                                                <li>
                                                                    <a href="{{ route('admin.stores') }}">Stores</a>
                                                                </li>
                                                                <li><a href="{{ route('admin.categories') }}">Product Categories</a>
                                                                </li>

                                                                {{-- <li><a href="#">كوبونات</a></li>
                                                                <li><a href="#">الطلبات</a></li>
                                                                <li><a href="#">العملاء</a></li>  --}}
                                                            </ul>
                                                        @else
                                                            <ul class="sub-menu">
                                                                {{-- <li><a href="{{ route('user.dashboard') }}">Dashboard </a></li> --}}
                                                                <li><a href="{{ route('admin.products') }}">Products</a></li>
                                                            </ul>
                                                        @endif
                                                    </li>
                                                    @endif
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="hotline d-none d-lg-block">
                                        <p><i class="fi-rs-smartphone"></i><span>الرقم مجاني</span><span></span> (+3) 0000-000 </p>
                                    </div>
                                    <p class="mobile-promotion">سعيد <span class="text-brand">عيد الأم</span>. تنزيلات كبيرة تصل إلى 40%
                                    </p>
                                    {{-- <div class="header-action-right d-block d-lg-none">
                                        <div class="header-action-2">
                                            <div class="header-action-icon-2">
                                                <a href="shop-wishlist.php">
                                                    <img alt="Surfside Media" src="{{asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                                    <span class="pro-count white">4</span>
                                                </a>
                                            </div>
                                            <div class="header-action-icon-2">
                                                <a class="mini-cart-icon" href="#">
                                                    <img alt="Surfside Media" src="{{asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                                    <span class="pro-count white">2</span>
                                                </a>
                                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                                    <ul>
                                                        <li>
                                                            <div class="shopping-cart-img">
                                                                <a href="#"><img alt="Surfside Media"
                                                                        src="{{asset('assets/imgs/shop/thumbnail-3.jpg')}}"></a>
                                                            </div>
                                                            <div class="shopping-cart-title">
                                                                <h4><a href="#">قمصان ستريولا سادة</a>
                                                                </h4>
                                                                <h3><span>1 × </span>800.00 دولار</h3>
                                                            </div>
                                                            <div class="shopping-cart-delete">
                                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shopping-cart-img">
                                                                <a href="#"><img alt="Surfside Media"
                                                                        src="assets/imgs/shop/thumbnail-4.jpg"></a>
                                                            </div>
                                                            <div class="shopping-cart-title">
                                                                <h4><a href="#">ماك بوك برو 2022</a></h4>
                                                                <h3><span>1 × </span>3500.00 دولار</h3>
                                                            </div>
                                                            <div class="shopping-cart-delete">
                                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="shopping-cart-footer">
                                                        <div class="shopping-cart-total">
                                                            <h4>الإجمالي الكلي <span>$383.00</span></h4>
                                                        </div>
                                                        <div class="shopping-cart-button">
                                                            <a href="#">عرض عربة التسوق</a>
                                                            <a href="shop-checkout.php">الدفع</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="header-action-icon-2 d-block d-lg-none">
                                                <div class="burger-icon burger-icon-white">
                                                    <span class="burger-icon-top"></span>
                                                    <span class="burger-icon-mid"></span>
                                                    <span class="burger-icon-bottom"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
            </header>
            <div class="mobile-header-active mobile-header-wrapper-style">
                <div class="mobile-header-wrapper-inner">
                    <div class="mobile-header-top">
                        <div class="mobile-header-logo">
                            <a href="#"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                        </div>
                        <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                            <button class="close-style search-close">
                                <i class="icon-top"></i>
                                <i class="icon-bottom"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-header-content-area">
                        <div class="mobile-search search-style-3 mobile-header-border">
                            <form action="#">
                                <input type="text" placeholder="Search for items…">
                                <button type="submit"><i class="fi-rs-search"></i></button>
                            </form>
                        </div>
                        <div class="mobile-menu-wrap mobile-header-border">
                            <div class="main-categori-wrap mobile-header-border">
                                <a class="categori-button-active-2" href="#">
                                    <span class="fi-rs-apps"></span> تصفح فئات المنتج
                                </a>
                                <div class="categori-dropdown-wrap categori-dropdown-active-small">
                                    <ul>
                                        <li><a href="#"><i class="surfsidemedia-font-dress"></i>ملابس نسائية</a>
                                        </li>
                                        <li><a href="#"><i class="surfsidemedia-font-tshirt"></i>ملابس رجالي</a>
                                        </li>
                                        <li> <a href="#"><i class="surfsidemedia-font-smartphone"></i> الهواتف المحمولة</a>
                                        </li>
                                        <li><a href="#"><i class="surfsidemedia-font-desktop"></i>الحاسبات المكتبية</a></li>
                                        <li><a href="#"><i class="surfsidemedia-font-cpu"></i>الالكترونيات الاستهلاكية</a>
                                        </li>
                                        <li><a href="#"><i class="surfsidemedia-font-home"></i>المنزل والحديقة</a></li>
                                        <li><a href="#"><i class="surfsidemedia-font-high-heels"></i>أحذية</a></li>
                                        <li><a href="#"><i class="surfsidemedia-font-teddy-bear"></i>الأم والأطفال</a>
                                        </li>
                                        <li><a href="#"><i class="surfsidemedia-font-kite"></i>امتعة الهواء الطلق</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- mobile menu start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="/">الرئيسية</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">فئة المنتجات</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">لدينا مجموعات</a>
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                                    href="#">أزياء نسائية</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">فساتين</a></li>
                                                    <li><a href="#">بلوزات وقمصان</a></li>
                                                    <li><a href="#">هوديز وبلوزات</a></li>
                                                    <li><a href="#">أطقم نسائية</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                                    href="#">أزياء رجالي</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">جاكيتات</a></li>
                                                    <li><a href="#">كاجوال جلد صناعي</a></li>
                                                    <li><a href="#">جلد اصلي</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                                    href="#">تكنولوجيا</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">أجهزة الكمبيوتر المحمولة المخصصة للألعاب</a></li>
                                                    <li><a href="#">أجهزة الكمبيوتر المحمولة فائقة النحافة</a></li>
                                                    <li><a href="#">أجهزة لوحية</a></li>
                                                    <li><a href="#">ملحقات الكمبيوتر المحمول</a></li>
                                                    <li><a href="#">ملحقات التابلت</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">مدونة</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">اللغة</a>
                                        <ul class="dropdown">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">German</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- mobile menu end -->
                        </div>
                        <div class="mobile-header-info-wrap mobile-header-border">
                            <div class="single-mobile-header-info mt-30">
                                <a href="#"> موقعنا </a>
                            </div>
                            <div class="single-mobile-header-info">
                                <a href="#">تسجيل دخول </a>
                            </div>
                            <div class="single-mobile-header-info">
                                <a href="#">قم بالتسجيل</a>
                            </div>
                            <div class="single-mobile-header-info">
                                <a href="#">(+1) 0000-000-000 </a>
                            </div>
                        </div>
                        <div class="mobile-social-icon">
                            <h5 class="mb-15 text-grey-4">تابعنا</h5>
                            <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            {{ $slot }}

            <footer class="main">
                <section class="newsletter p-30 text-white wow fadeIn animated">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 mb-md-3 mb-lg-0">
                                <div class="row align-items-center">
                                    <div class="col flex-horizontal-center">
                                        <img class="icon-email" src="{{asset('assets/imgs/theme/icons/icon-email.svg')}}" alt="">
                                        <h4 class="font-size-20 mb-0 ml-3">قم بالتسجيل في النشرة الإخبارية</h4>
                                    </div>
                                    <div class="col my-4 my-md-0 des">
                                        <h5 class="font-size-15 ml-4 mb-0">.. واستقبل <strong>قسيمة بقيمة 25 دولارًا للتسوق الأول.</strong></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <!-- Subscribe Form -->
                                <form class="form-subcriber d-flex wow fadeIn animated">
                                    <input type="email" class="form-control bg-white font-small"
                                        placeholder="Enter your email">
                                    <button class="btn bg-dark text-white" type="submit">الإشتراك</button>
                                </form>
                                <!-- End Subscribe Form -->
                            </div>
                        </div>
                    </div>
                </section><span style="margin-left: 150px;"></span>
                <section class="section-padding footer-mid">
                    <div class="container pt-15 pb-20">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="widget-about font-md mb-md-5 mb-lg-0">
                                    <div class="logo logo-width-1 wow fadeIn animated">
                                        <a href="#"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                                    </div>
                                    <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">اتصل بنا</h5>
                                    <p class="wow fadeIn animated">
                                        <strong>العنوان: </strong>0000 Road
                                    </p>
                                    <p class="wow fadeIn animated">
                                        <strong>الهاتف: </strong>+3 0000-000
                                    </p>
                                    <p class="wow fadeIn animated">
                                        <strong>البريد الالكتروني: </strong>contact@surfsidemedia.in
                                    </p>
                                    <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">تابعنا</h5>
                                    <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}"
                                                alt=""></a>
                                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}"
                                                alt=""></a>
                                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}"
                                                alt=""></a>
                                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}"
                                                alt=""></a>
                                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <h5 class="widget-title wow fadeIn animated">عنا</h5>
                                <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                                    <li><a href="#">حولنا</a></li>
                                    <li><a href="#">معلومات التوصيل</a></li>
                                    <li><a href="#">سياسة الخصوصية</a></li>
                                    <li><a href="#">الشروط &amp; والاحكام</a></li>
                                    <li><a href="#">اتصل بنا</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2  col-md-3">
                                <h5 class="widget-title wow fadeIn animated">حسابي</h5>
                                <ul class="footer-list wow fadeIn animated">
                                    <li><a href="#">حسابي</a></li>
                                    <li><a href="#">عرض عربة التسوق</a></li>
                                    <li><a href="#">قائمة امنياتي</a></li>
                                    <li><a href="#">تابع طلبي</a></li>
                                    <li><a href="#">الطلب</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 mob-center">
                                <h5 class="widget-title wow fadeIn animated">حمل التطبيق</h5>
                                <div class="row">
                                    <div class="col-md-8 col-lg-12">
                                        <p class="wow fadeIn animated">من متجر التطبيقات أو جوجل بلاي</p>
                                        <div class="download-app wow fadeIn animated mob-app">
                                            <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active"
                                                    src="{{asset('assets/imgs/theme/app-store.jpg')}}" alt=""></a>
                                            <a href="#" class="hover-up"><img src="{{asset('assets/imgs/theme/google-play.jpg')}}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                        <p class="mb-20 wow fadeIn animated">بوابات الدفع الآمنة</p>
                                        <img class="wow fadeIn animated" src="{{asset('assets/imgs/theme/payment-method.png')}}"
                                            alt="">
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container pb-20 wow fadeIn animated mob-center">
                    <div class="row">
                        <div class="col-12 mb-20">
                            <div class="footer-bottom"></div>
                        </div>
                        <div class="col-lg-6">
                            <p class="float-md-left font-sm text-muted mb-0">
                                <a href="#">سياسة الخصوصية</a> | <a href="#">الشروط والاحكام</a>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-lg-end text-start font-sm text-muted mb-0">
                                &copy; <strong class="text-brand">e-shop Media</strong> كل الحقوق محفوظة
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Vendor JS-->
            <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
            <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
            <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
            <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
            <!-- Template  JS -->
            <script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
            <script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>
            @livewireScripts
            @stack('scripts')
        </body>

        </html>
