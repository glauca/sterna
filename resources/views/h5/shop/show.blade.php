@extends('h5.layouts.main')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ mix('/css/h5/shop/show.css') }}">
@endsection

@section('content')
<div id="app">
    <div id="mallPage" class="mui-page-cont mui-page-in-biz mui-global-biz-shop ">
        <div id="header">
            <div id="J_GlobalNav" class="mui-header-global-nav"><b></b></div>
            <h1 class="mui-header-title">陌上花开茶叶旗舰店</h1>
        </div>

        <div class="a-msp-index" id="tbh5v0">
            <div id="bodyCont" class="fullscreen index">
                <header id="mp-header" class="tm-mdv">
                    <section class="tm-shop-header">
                        <span class="classify" id="J_Shop_Category">分类</span>
                        <div class="shop-back-img">
                            <img src="//img.alicdn.com/imgextra/i2/896698873/T2hC7sXnVaXXXXXXXX_!!896698873.jpg_q90.jpg" class="back">
                        </div>

                        <div class="tm-shop-header-info">
                            <a class="shop_logo logo" href="/shop/shop_info.htm">
                                <img src="//img.alicdn.com/imgextra/i4/T1U9jjXkhfXXb1upjX.jpg" alt="logo"/>
                            </a>
                            <div class="collect-wrapper">
                                <div class="collect-btn collect-item">收藏</div>
                                <div class="collect-cnt collect-item">
                                    <p class="collect-counter"> 16.6万 </p>
                                    <p>粉丝</p>
                                </div>
                            </div>

                            <div class="contact">
                                <div class="ctn">
                                    <span class="name">陌上花开茶叶旗舰店</span>
                                </div>

                                <div class="brand-tag">品牌旗舰店</div>
                            </div>
                        </div>
                    </section>
                    <section class="collect-info-overlay collected">
                        <div class="success-info">
                            <span class="icon-success"></span>

                            <div class="info collected-info">收藏成功</div>
                            <div class="info uncollected-info">已取消收藏</div>
                        </div>
                        <div class="info fail-info"></div>
                    </section>
                </header>

                <section class="nav-bar-wrapper J_tabNavBar">
                    <div class="nav J_navBar ui-tab-slider-wrapper">
                        <a href="javascript: void(0)" class="item selected-tab J_tabItem" data-index="0" data-out="false" data-page="index">
                            <span class="count tm-shop-m-iconfont">&#xe60a;</span>
                            <span class="text">首页</span>
                        </a>
                        <a href="/shop/1/search/" class="item J_tabItem" data-index="1" data-out="false" data-page="allItems">
                            <span class="count tm-shop-m-iconfont">&#xe607;</span>
                            <span class="text">全部商品</span>
                        </a>
                        <a href="/shop/shop-new.htm" class="item J_tabItem" data-index="2" data-out="false" data-page="newItems">
                            <span class="count tm-shop-m-iconfont">&#xe609;</span>
                            <span class="text">上新</span>
                        </a>
                        <a href="/shop/shop-dynamic.htm" class="item J_tabItem" data-index="3" data-out="false" data-page="dynamic">
                            <span class="count tm-shop-m-iconfont">&#xe608;</span>
                            <span class="text">店铺活动</span>
                        </a>
                    </div>
                </section>

                <section class="search-ctn">
                    <div id="J_open_search" class="open-search">
                        <span class="icon-search"></span> 在店铺内搜索
                    </div>
                </section>

                <section class="ui-panel-slider J_panelSlider">
                    <div class="scroller J_panelScroller">
                        <div class="item shop-index" data-spm="1998705856" data-index="0">
                            <div class="tm-mdv tm-weex" id="J_shop_content"> </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="tm-btm-menu J_btmMenuCtn tm-mdv" mdv-cls="tm/shop-m/page/shop-m/btm-menu/">
                <ul class="tm-btm-menu-list muicell">
                    <li class="menu-item-index-0 menu-item muicell center more-sub-menu-items show-sub-menu">
                        宝贝分类
                        <ul class="sub-btm-menu-list">
                            <li class="sub-menu-item">
                                <a class="J_subMenuItemLink" href="/" target="_self">美丽花茶</a>
                            </li>

                            <li class="sub-menu-item">
                                <a class="J_subMenuItemLink" href="/" target="_self">天然粉粉</a>
                            </li>

                            <li class="sub-menu-item">
                                <a class="J_subMenuItemLink" href="/" target="_self">养生五谷</a>
                            </li>

                            <li class="sub-menu-item">
                                <a class="J_subMenuItemLink" href="/" target="_self">精品礼盒</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-index-1 menu-item muicell center more-sub-menu-items ">
                        领优惠券
                        <ul class="sub-btm-menu-list">
                            <li class="sub-menu-item">
                                <a class="J_subMenuItemLink" href="/" target="_self">3元优惠券</a>
                            </li>
                            <li class="sub-menu-item">
                                <a class="J_subMenuItemLink" href="/" target="_self">5元优惠券</a>
                            </li>
                            <li class="sub-menu-item">
                                <a class="J_subMenuItemLink" href="/" target="_self">30元优惠券</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-index-2 menu-item muicell center more-sub-menu-items ">
                        省钱攻略
                        <ul class="sub-btm-menu-list">
                            <li class="sub-menu-item">
                                <a class="J_subMenuItemLink" href="/" target="_self">陌上花开</a>
                            </li>
                            <li class="sub-menu-item">
                                <a class="J_subMenuItemLink" href="/" target="_self">会员中心</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="footer" data-spm="a2226n1">
        <div class=" mui-footer-note"  data-spm="1596998">
            <a id="J_FooterUser" class="mui-footer-username" href="#">登录</a>|
            <a id="J_FooterUserAction" href="//reg.taobao.com/member/new_register.jhtml?_devenv=MobileDeviceBrowser" style="display:none">注册</a>
            <a href="//www.tmall.com/">天猫首页</a>|
            <a href="//pages.tmall.com/wow/portal/act/app-download?mmstat=zebra_pf&src=zebrapf">下载客户端</a>
        </div>
        <p style="text-align:center;padding:30px 0 22px; color:#ccc; font-size: 12px">&copy;&nbsp;2003-2017&nbsp;Tmall.com&nbsp;版权所有</p>
    </div>
</div>
@endsection

@section('javascript')
@parent
<script type="text/javascript" src="{{ mix('/js/h5/shop/show.js') }}"></script>
@endsection
