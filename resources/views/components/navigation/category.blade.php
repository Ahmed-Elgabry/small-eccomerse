<div class="dropdown-menu">
    <ul class="mega-menu d-lg-flex">
        <li class="mega-menu-col col-lg-7">
            <ul class="d-lg-flex">
                <li class="mega-menu-col col-lg-6">
                    <ul>

                        @foreach ($category->children as $child)
                            @if ($child->children->count() > 0)
                                <li><span class="submenu-title">{{ $child->name }}</span>
                                </li>
                                @foreach ($child->children as $subChild)
                                    @if ($subChild->children->count() > 0)
                                        <li><span class="submenu-title">{{ $subChild->name }}</span>
                                        </li>
                                    @else
                                        <li><a class="dropdown-item nav-link nav_item"
                                            href="#">{{ $subChild->name }}</a></li>
                                    @endif
                                @endforeach
                            @else
                                <li><a class="dropdown-item nav-link nav_item"
                                    href="#">{{ $child->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
        </li>
        <li class="mega-menu-col col-lg-5">
            <div class="header-banner2">
                <img src="{{asset('assets/imgs/banner/menu-banner-2.jpg')}}"
                    alt="menu_banner1">
                <div class="banne_info">
                    <h6>خصم 10</h6>
                    <h4>وصول جديد</h4>
                    <a href="#">تسوق الآن</a>
                </div>
            </div>
            <div class="header-banner2">
                <img src="{{asset('assets/imgs/banner/menu-banner-3.jpg')}}"
                    alt="menu_banner2">
                <div class="banne_info">
                    <h6>خصم 15%</h6>
                    <h4>العروض الرائجة</h4>
                    <a href="#">تسوق الآن</a>
                </div>
            </div>
        </li>
    </ul>
</div>

