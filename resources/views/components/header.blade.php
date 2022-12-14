<header class="Header">
    <div class="ControlPanel">
        <div class="wrap">
            <div class="row ControlPanel-row">
                <div class="row-block">
                    <div class="row ControlPanel-rowSplit">
                        <div class="row-block"><a class="ControlPanel-title" href="sale.html">Скидки</a>
                        </div>
                        <div class="row-block hide_700"><span class="ControlPanel-title">Мы в соцсетях</span>
                            <ul class="menu menu_img menu_smallImg ControlPanel-menu">
                                <li class="menu-item"><a class="menu-link" href="#"><img src="{{asset('storage/img/icons/socialHeader/fb.svg')}}" alt="fb.svg"/></a></li>
                                <li class="menu-item"><a class="menu-link" href="#"><img src="{{asset('storage/img/icons/socialHeader/tw.svg')}}" alt="tw.svg"/></a></li>
                                <li class="menu-item"><a class="menu-link" href="#"><img src="{{asset('storage/img/icons/socialHeader/in.svg')}}" alt="in.svg"/></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="row-block">
                    <div class="row ControlPanel-rowSplit">
                        @guest
                        <div class="row-block"><a class="ControlPanel-title" href="login.html">Войти</a>&nbsp;/&nbsp;<a class="ControlPanel-title" href="register.html">Регистрация</a>
                        </div>
                        @else
                        <div class="row-block"><a class="ControlPanel-title" href="cabinet.html">Личный кабинет</a></div>
                        @endguest
                    </div>
                </nav>
            </div>
        </div>

    </div>
    <div class="wrap">
        <div class="row Header-rowMain">
            <div class="row-block Header-logo"><a class="logo" href="{{route('products.index')}}"><img class="logo-image" src="{{asset('storage/img/logo.png')}}" alt="logo.png"/></a>
            </div>
            <nav class="row-block row-block_right Header-menu">
                <div class="menuModal" id="navigate">
                    <ul class="menu menu_main">
                        <li class="menu-item"><a class="menu-link" href="{{route('products.index')}}">Главная</a></li>
                        <li class="menu-item"><span class="menu-label menu-label_danger">Hot</span><a class="menu-link" href="catalog.html">Каталог</a></li>
                        <li class="menu-item"><span class="menu-label menu-label_success">New</span><a class="menu-link" href="sale.html">Скидки</a></li>
                        <li class="menu-item"><a class="menu-link" href="contacts.html">Контакты</a></li>
                    </ul>
                </div>
            </nav>
            @auth
            <div class="row-block">
                <div class="CartBlock"><a class="CartBlock-block" href="compare.html"><img class="CartBlock-img" src="{{asset('storage/img/icons/exchange.svg')}}" alt="exchange.svg"/><span class="CartBlock-amount">4</span></a><a class="CartBlock-block" href="cart.html"><img class="CartBlock-img" src="{{asset('storage/img/icons/cart.svg')}}" alt="cart.svg"/><span class="CartBlock-amount">0</span></a>
                    <div class="CartBlock-block"><span class="CartBlock-price">0.00$</span>
                    </div>
                </div>
            </div>
            @endauth
            <div class="row-block Header-trigger"><a class="menuTrigger" href="#navigate">
                    <div class="menuTrigger-content">Показать навигацию
                    </div><span></span><span></span><span></span></a>
            </div>
        </div>
    </div>
    <div class="Header-searchWrap">
        <div class="wrap">
            <div class="Header-categories">
                <div class="CategoriesButton">
                    <div class="CategoriesButton-title">
                        <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/allDep.svg')}}" alt="allDep.svg"/></div>
                        <span class="CategoriesButton-text">Категории</span>
                        <div class="CategoriesButton-arrow"></div>
                    </div>
                    <div class="CategoriesButton-content">
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/1.svg')}}" alt="1.svg"/>
                                </div><span class="CategoriesButton-text">Accessories</span></a>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/2.svg')}}" alt="2.svg"/>
                                </div><span class="CategoriesButton-text">Bags</span></a>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/3.svg')}}" alt="3.svg"/>
                                </div><span class="CategoriesButton-text">Cameras</span></a><a class="CategoriesButton-arrow" href="#"></a>
                            <div class="CategoriesButton-submenu"><a class="CategoriesButton-link" href="#">
                                    <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/1.svg')}}" alt="1.svg"/>
                                    </div><span class="CategoriesButton-text">Accessories</span></a><a class="CategoriesButton-link" href="#">
                                    <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/2.svg')}}" alt="2.svg"/>
                                    </div><span class="CategoriesButton-text">Bags</span></a>
                            </div>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/4.svg')}}" alt="4.svg"/>
                                </div><span class="CategoriesButton-text">Clothings</span></a>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/5.svg')}}" alt="5.svg"/>
                                </div><span class="CategoriesButton-text">Electronics</span></a>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/6.svg')}}" alt="6.svg"/>
                                </div><span class="CategoriesButton-text">Fashion</span></a>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/7.svg')}}" alt="7.svg"/>
                                </div><span class="CategoriesButton-text">Furniture</span></a><a class="CategoriesButton-arrow" href="#"></a>
                            <div class="CategoriesButton-submenu"><a class="CategoriesButton-link" href="#">
                                    <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/1.svg')}}" alt="1.svg"/>
                                    </div><span class="CategoriesButton-text">Accessories</span></a><a class="CategoriesButton-link" href="#">
                                    <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/2.svg')}}" alt="2.svg"/>
                                    </div><span class="CategoriesButton-text">Bags</span></a>
                            </div>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/8.svg')}}" alt="8.svg"/>
                                </div><span class="CategoriesButton-text">Lightings</span></a>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/9.svg')}}" alt="9.svg"/>
                                </div><span class="CategoriesButton-text">Mobiles</span></a>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/10.svg')}}" alt="10.svg"/>
                                </div><span class="CategoriesButton-text">Trends</span></a>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/11.svg')}}" alt="11.svg"/>
                                </div><span class="CategoriesButton-text">More</span></a><a class="CategoriesButton-arrow" href="#"></a>
                            <div class="CategoriesButton-submenu"><a class="CategoriesButton-link" href="#">
                                    <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/1.svg')}}" alt="1.svg"/>
                                    </div><span class="CategoriesButton-text">Accessories</span></a><a class="CategoriesButton-link" href="#">
                                    <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/2.svg')}}" alt="2.svg"/>
                                    </div><span class="CategoriesButton-text">Bags</span></a>
                            </div>
                        </div>
                        <div class="CategoriesButton-link"><a href="#">
                                <div class="CategoriesButton-icon"><img src="{{asset('storage/img/icons/departments/12.svg')}}" alt="12.svg"/>
                                </div><span class="CategoriesButton-text">Lightings</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Header-searchLink"><img src="{{asset('storage/img/icons/search.svg')}}" alt="search.svg')}}"/>
            </div>
            <div class="Header-search">
                <div class="search">
                    <form class="form form_search" action="#" method="post">
                        <input class="search-input" id="query" name="query" type="text" placeholder="Найти..."/>
                        <button class="search-button" type="submit" name="search" id="search"><img src="{{asset('storage/img/icons/search.svg')}}" alt="search.svg"/>Поиск</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>
