@extends('h5.layouts.main')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ mix('/css/h5/shop/search.css') }}">
@endsection

@section('content')
<div id="app">
    <div class="page">
        <section id="J_head" class="list_m_mdv head">
            <div class="filter_back"><a href="/shop/1/" class="to-shop-mp">&nbsp;</a> </div>
            <div class="searchbar_wrap">
                <div class="searchbar j_searchbar">
                    <ul>
                        <li class="search-word-tag" data-value="发送到反倒是">
                            <label>发送到反倒是</label>
                            <span class="J_deleteSearchTag">&#xe60c;</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="J_Shop_Category" class="filter shop-category"> 分类 </div>
            <div id="mallPage" class="mui-page-cont mui-page-in-biz mui-global-biz-shop ">
                <div id="header" data-spm="a2226n0">
                        <div id="J_GlobalNav" class="mui-header-global-nav"><b></b></div>
                    <h1 class="mui-header-title">陌上花开茶叶旗舰店</h1>
                </div>
            </div>
        </section>

        <div class="J_orderWrapper">
            <section id="J_order" class="list_m_mdv order">
                <div class="o_item J_itemSort J_sortType_s o_cur" data-param="sort=s">综合</div>

                <div class="o_item J_itemSort J_sortType_d" data-param="sort=d">销量</div>

                <div class="o_item J_itemSort J_sortType_oldstarts" data-param="sort=oldstarts">上新</div>

                <div class="o_item J_itemSort order-pirce-item J_sortType_price " data-param="sort=pd">
                    价格
                    <div class="price-icon-wrapper J_priceIcon ">
                        <i class="J_price_up_icon list_m_font oi_icon"></i>
                        <i class="J_price_down_icon list_m_font oi_icon"></i>
                    </div>
                </div>
                <div class="list_m_font o_item o_style">

                    <span class="order-style-wrapper J_styleIcon J_itemSort" data-param="style=list"></span>

                </div>
            </section>
        </div>

        <section id="J_srp" class="list_m_mdv srp">
            <div id="J_listPanel1" class="tile_box">
                @for ($i = 0; $i < 5; $i++)
                <a class="tile_item" href="/" target="_blank">
                    <div class="ti_img_wrap">
                        <img class="ti_img" src="//img.alicdn.com/bao/uploaded/i4/896698873/TB1PWoNcTlYBeNjSszcXXbwhFXa_!!0-item_pic.jpg_Q50s50.jpg_.webp" alt="桂圆红枣枸杞茶花茶组合   补饮品枸杞养女人茶气血泡水喝的茶生">
                    </div>
                    <div class="ti_info">
                        <div class="tii_title">
                            <h3>桂圆红枣枸杞茶花茶组合   补饮品枸杞养女人茶气血泡水喝的茶生</h3>
                        </div>
                        <div class="tii_icon">  </div>
                        <div class="tii_price">
                            <i class="list_m_font"></i>39<span class="tii_small">.90</span>
                            <span class="tii_sold">月销2706笔</span>
                        </div>
                    </div>
                </a>
                @endfor
            </div>
            <div id="J_listPanel2" class="tile_box">
                @for ($i = 0; $i < 5; $i++)
                <a class="tile_item" href="/" target="_blank">
                    <div class="ti_img_wrap">
                        <img class="ti_img" src="//img.alicdn.com/bao/uploaded/i1/896698873/TB1yT6acL9TBuNjy0FcXXbeiFXa_!!0-item_pic.jpg_Q50s50.jpg_.webp" alt="买1送1 陌上花开玫瑰花茶 干玫瑰花 平阴玫瑰食用玫瑰花泡茶罐装">
                    </div>
                    <div class="ti_info">
                        <div class="tii_title">
                            <h3>买1送1 陌上花开玫瑰花茶 干玫瑰花 平阴玫瑰食用玫瑰花泡茶罐装</h3>
                        </div>
                        <div class="tii_icon">  </div>
                        <div class="tii_price">
                            <i class="list_m_font"></i>26<span class="tii_small">.80</span>
                            <span class="tii_sold">月销3397笔</span>
                        </div>
                    </div>
                </a>
                @endfor
            </div>
        </section>

        <section class="state">
            <i class="loading"></i>正在搜索中，请稍等
        </section>
        <section class="state">已经看到最后啦~</section>
    </div>

    <div id="footer" data-spm="a2226n1">
        <div class=" mui-footer-note" data-spm="1596998">
            <a id="J_FooterUser" class="mui-footer-username" href="/">登录</a>|
            <a id="J_FooterUserAction" href="//reg.taobao.com/member/new_register.jhtml?_devenv=MobileDeviceBrowser" style="display:none">注册</a>
            <a href="//www.tmall.com/">天猫首页</a>|
            <a href="//pages.tmall.com/wow/portal/act/app-download?mmstat=zebra_pf&amp;src=zebrapf">下载客户端</a>
        </div>
        <p style="text-align:center;padding:30px 0 22px; color:#ccc; font-size: 12px">©&nbsp;2003-2017&nbsp;Tmall.com&nbsp;版权所有</p>
    </div>
</div>
@endsection

@section('javascript')
@parent
<script type="text/javascript" src="{{ mix('/js/h5/shop/search.js') }}"></script>
@endsection
