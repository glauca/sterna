@extends('h5.layouts.main')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ mix('/css/h5/item/show.css') }}">
@endsection

@section('content')
<div id="app">
    <div class="detail-header-bg">
        <div id="head" class="header-dom transparent">
            <div class="mui-flex main-dom">
                <div class="left-btns">
                    <a href="/" class="icon-link back-link">
                        <svg t="1516605784224" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1221" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200"><defs></defs><path d="M393.390114 512.023536l347.948667-336.348468c20.50808-19.85828 20.50808-51.997258 0-71.792093-20.507056-19.826558-53.778834-19.826558-74.28589 0L281.990954 476.135164c-20.476357 19.826558-20.476357 51.981908 0 71.746044l385.061936 372.236839c10.285251 9.91379 23.728424 14.869662 37.173644 14.869662 13.446243 0 26.889417-4.956895 37.112246-14.901385 20.50808-19.826558 20.50808-51.919487 0-71.746044L393.390114 512.023536" p-id="1222"></path></svg>
                        <span>返回</span>
                    </a>
                </div>
                <ul class="cell header-nav">
                    <li data-index="0" data-x="0" class="active" data-spm-anchor-id="a222m.7628550.0.i3">商品</li>
                    <li data-index="1" data-x="75" class="" data-spm-anchor-id="a222m.7628550.0.i1">评价</li>
                    <li data-index="2" data-x="150" class="" data-spm-anchor-id="a222m.7628550.0.i2">详情</li>
                </ul>
                <div class="right-btns">
                    <a href="//h5.m.taobao.com/awp/base/cart.htm" class="icon-link cart-link " target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 1077 1024"><path d="M267 879a70 70 0 1 1 0 139 70 70 0 0 1 0-139zm605 0a70 70 0 1 1 0 139 70 70 0 0 1 0-139zm37-131H255l-50-474h776l-72 474zm145-537a38 38 0 0 0-29-13H197L179 31a38 38 0 0 0-38-34H18v76h89l76 717c2 19 19 34 38 34h720a38 38 0 0 0 38-33l84-549a38 38 0 0 0-9-31z"></path></svg>
                        <span>购物车</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="content">
        <div class="group-warp">
            <div class="module-wrap" data-module="mods/preview">
                <div class="module-preview">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="/" class="item">
                                    <img src="//img.alicdn.com/imgextra/i1/896698873/TB1VrAzc1uSBuNjSsplXXbe8pXa_!!0-item_pic.jpg_760x760Q50s50.jpg_.webp">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/" class="item">
                                    <img src="//img.alicdn.com/imgextra/i3/896698873/TB26wQImR0kpuFjSsziXXa.oVXa_!!896698873.jpg_760x760Q50s50.jpg_.webp">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/" class="item">
                                    <img src="//img.alicdn.com/imgextra/i3/896698873/TB1pFsOh8HH8KJjy0FbXXcqlpXa_!!0-item_pic.jpg_760x760Q50s50.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="module-wrap" data-module="mods/module-title">
                <div class="module-title">
                    <div class="share-warp mui-flex">
                        <div class="main cell">买1送1 陌上花开荷叶茶 干荷叶花草茶 古法微山湖宜配冬瓜荷叶茶</div>
                        <span class="share-div mui-flex share-hidden">
                            <div class="share-bd mui-flex">
                                <i class="share-icon"></i>
                                <span>分享</span>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="module-wrap" data-module="mods/module-price">
                <div class="module-price">
                    <div class="real-price">
                        <span class="ui-yen ">
                            <i class="price-symbol">¥</i><span class="price">29.8</span>
                        </span>
                        <span class="icon-text">火热促销</span>
                    </div>
                    <div class="item-price"><label>价格:</label><del>¥58</del></div>
                </div>
            </div>
            <div class="module-wrap" data-module="mods/module-adds">
                <div class="module-adds">
                    <span class="postage">快递: 0.00</span>
                    <span class="sales">月销量 6964件</span>
                    <span class="delivery">浙江嘉兴</span>
                </div>
            </div>
        </div>

        <div class="group-warp">
            <div class="module-wrap" data-module="mods/module-props">
                <div class="module-props">
                    <div class="props-content">产品参数</div>
                </div>
            </div>
        </div>

        <div class="group-warp">
            <div class="module-wrap" data-module="mods/module-review">
                <div class="module-review" data-nav="评价">
                    <div id="mui-tagscloud-i" class="mui-tagscloud">
                        <div class="mui-tagscloud-main">
                            <div class="mui-tagscloud-title">商品评价 (32172)</div>
                            <div class="mui-tagscloud-comments">
                                <div class="mui-tagscloud-user">
                                    <img class="mui-tagscloud-img" src="//img.alicdn.com/tps/TB1l6dkOXXXXXXEXVXXXXXXXXXX-210-210.png_80x80Q90s50.jpg_.webp">
                                    <img class="mui-tagscloud-head-extra" src="//img.alicdn.com/tfs/TB19maGhm_I8KJjy0FoXXaFnVXa-69-69.png_80x80Q50s50.jpg_.webp">
                                    <span class="mui-tagscloud-name">田***语</span>
                                    <img class="mui-tagscloud-icon" src="//img.alicdn.com/tfs/TB1UqAjeOqAXuNjy1XdXXaYcVXa-130-42.png_80x80Q90s50.jpg_.webp">
                                </div>
                                <div class="mui-tagscloud-content">第一次买这家的茶，很喜欢这种玻璃瓶装的，很别致，这家的字体是印刷上去的，看上去质地要略差一些，荷叶很容易泡开，有微微的荷叶清香，和我的花茶一起泡的，口感清新，还是挺不错的！</div>
                                <div class="mui-tagscloud-date">2018-03-10</div>
                            </div>
                        </div>
                        <div class="mui-tagscloud-more"><button>查看更多评价</button></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="group-warp">
            <div class="module-wrap" data-module="mods/module-shop">
                <div class="module-shop">
                    <div class="shop-main">
                        <div class="shop-logo">
                            <img src="//img.alicdn.com/imgextra//90/66/T1U9jjXkhfXXb1upjX.jpg_120x120Q50s50.jpg_.webp" aria-label="店铺标志">
                        </div>
                        <div class="shop-info">
                            <div class="shop-name" title="陌上花开茶叶旗舰店">陌上花开茶叶旗舰店</div>
                            <div class="shop-title"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAYBAMAAABHOMOVAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAFZaVRYdFhNTDpjb20uYWRvYmUueG1wAAAAAAA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJYTVAgQ29yZSA1LjQuMCI+CiAgIDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+CiAgICAgIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICAgICAgICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIj4KICAgICAgICAgPHRpZmY6T3JpZW50YXRpb24+MTwvdGlmZjpPcmllbnRhdGlvbj4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+CkzCJ1kAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAwUExURf8ANP8AM/8AOv8BM/////8YPv8AAf/c4f8AJv+nsv9GZP/x9P+KmP/Ey/8AFv9qgZHOIC8AAAADdFJOU6v3FRl75c4AAAGxSURBVCjPdZIxS8NAGIaL/gT/gD9B+UgJgnU5CCFmCi3VwaU0REnN4GFRKw4lpRbpFCuCkkEoEqxTQDCCg4WCDh1MF2ldROliOogFa0UvSRuw6MflkvDwcc/dvaHJCfizpsdC4+QV9UsAMsAfAFMh0hQW/UrQYgLiUlSQXDYdIlMq7deDnL4BOSMqGcltI4hKcZaFLMvclE2+cMAcHjP6k49gxjAM3DOME7WP+8gtNjlAtNOWcLnoZCFX3f/i+x/8bXaAKGKHT4khreCSfCUpG8O1IEfscFkUVws2KuWLq06+PUCxGrEzybPd4Wzdc80M1opVLWJILHn6rXqEyKcZaCwaxhlqEE0QbZ2Pao2FAEWc9jJad5w2VUM6K1ZLcoBAWPq05pNAdZA50gVUFutcVwC1qem/twxLs3xYuyS/olbn0ubFVoCoFbypvnJdlaLxN5vTHncD9HLHnAsRjQ1HUoz8SyNSQffPALKZKdjXClO3m7X5YMs77pnFKqzClOO2q7E2PMO5snurlNR7ek/Se61Wqxn3kBsA1QuKIAG5eS8NWS8A4yNJcm8o6sfm/7D9AK6j7gcy6WVPAAAAAElFTkSuQmCC" aria-label="装饰图"></div>
                        </div>
                        <div class="shop-qualification "> </div>
                    </div>
                    <ul class="score">
                        <li>宝贝描述<b class="up">4.8 </b></li>
                        <li>卖家服务<b class="up">4.8 </b></li>
                        <li>物流服务<b class="up">4.8 </b></li>
                    </ul>
                    <div class="action mui-flex">
                        <a class="all-product cell" href="//moshanghuakaicy.m.tmall.com/shop/shop_auction_search.htm?sort=default" target="_blank">全部商品</a>
                        <a class="go-shop cell" href="//moshanghuakaicy.m.tmall.com" target="_blank">进入店铺</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="group-warp">
            <div class="module-wrap" data-module="mods/module-recommend">
                <div class="module-recommend">
                    <span class="title">看了又看</span>
                    <div class="scroller-wrap">
                        <div class="recommend-scroller" style="transition-property: transform; transition-timing-function: cubic-bezier(0, 0, 0.25, 1); transition-duration: 100ms; transform: translate3d(0px, 0px, 0px);">

                            <div class="panel">
                                @for ($i = 0; $i < 3; $i++)
                                <div class="item">
                                    <a href="/">
                                        <div class="img-wrap"><img src="//img.alicdn.com/bao/uploaded/TB1yT6acL9TBuNjy0FcXXbeiFXa_!!0-item_pic.jpg_320x320Q50s50.jpg_.webp" aria-label="买1送1 陌上花开玫瑰花茶 干玫瑰花 平阴玫瑰食用玫瑰花泡茶罐装"></div>
                                        <div class="title">
                                            买1送1 陌上花开玫瑰花茶 干玫瑰花 平阴玫瑰食用玫瑰花泡茶罐装
                                        </div>
                                        <div class="numbers">
                                            <del>¥58</del>
                                            <span class="price">¥26.8</span>
                                        </div>
                                    </a>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="group-warp">
            <div class="module-wrap" data-module="mods/module-desc">
                <div class="module-desc">
                    <div class="scrolltips">
                        <div class="part-title mui-flex align-center">
                            <div class="cell"><hr></div>
                            <span class="txt fixed">详情</span>
                            <div class="cell"><hr></div>
                        </div>
                    </div>
                    <div class="container" style=""><!--商品详情-->
                        <div class="subtitle">
                            <h3 class="newAttraction">"玻璃瓶炒制工艺 轻松享瘦 冬不藏肉更养润"</h3>
                        </div>
                        <div id="modules-desc">
                            <div class="module-container shop_discount">
                                <h3 class="module-title">店铺活动</h3>
                                <div class="module-content">
                                    <div class="mdv-shopactivity mui-shopactivity">
                                        <div class="mui-shopactivity-item mui-shopactivity-unload">
                                            <a href="http://detail.tmall.com/item.htm?id=545802713653&amp;spm=a1z09.5.0.0.mfjHF2&amp;_u=cqn52fp294a">
                                                <img class="lazyImg" src="//img.alicdn.com/imgextra/i2/896698873/TB2YiKqar9YBuNjy0FgXXcxcXXa_!!896698873.jpg_760x760Q50s50.jpg_.webp" aria-label="店铺活动图">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="module-container item_info">
                                <h3 class="module-title">商品信息</h3>
                                <div class="module-content">
                                    <div class="mui-standardItemProps mdv-standardItemProps">
                                        <div class="mui-standardItemProps-standardItemProps">
                                            <ul>
                                                <li class="mui-standardItemProps-props j-standardItemProps-props" style="">
                                                    <span class="">品牌</span>
                                                    <span class=""> 陌上花开 </span>
                                                </li>
                                                <li class="mui-standardItemProps-props j-standardItemProps-props" style="">
                                                    <span class="">茶种类</span>
                                                    <span class=""> 荷叶茶 </span>
                                                </li>
                                                <li class="mui-standardItemProps-props j-standardItemProps-props" style="">
                                                    <span class="">净含量</span>
                                                    <span class=""> 100g </span>
                                                </li>
                                                <li class="mui-standardItemProps-props j-standardItemProps-props" style="">
                                                    <span class="">包装种类</span>
                                                    <span class=""> 罐装 </span>
                                                </li>
                                                <li class="mui-standardItemProps-props j-standardItemProps-props" style="">
                                                    <span class="">适用季节</span>
                                                    <span class=""> 冬季、春季、夏季、秋季 </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="module-container item_picture">
                                <h3 class="module-title">商品图片</h3>
                                <div class="module-content">
                                    <div class="mui-custommodule mdv-custommodule">
                                        <div class="mui-custommodule-item">
                                            <img class="lazyImg" src="//img.alicdn.com/imgextra/i1/896698873/TB2ABQvaxuTBuNkHFNRXXc9qpXa_!!896698873.jpg_760x760Q50s50.jpg_.webp" aria-label="商品详情图">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="module-container custompriceDesc">
                                <div class="module-content">
                                    <div class="mui-custommodule mdv-custommodule">
                                        <div class="mui-custommodule-item unloaded">
                                            <img class="lazyImg" src="https://gw.alicdn.com/tfs/TB1k9XsQpXXXXXLXpXXXXXXXXXX-750-368.png" aria-label="商品详情图">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="actionBar-bg">
        <div id="s-downshelf" class="opened"></div>
        <div id="s-actionBar-container">
            <div class="action-bar-wrap j-bottom-bar  ">
                <a class="toshop cell" href="//moshanghuakaicy.m.tmall.com" target="_blank">
                    <svg t="1516606376961" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1336" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200"><defs></defs><path d="M940.960749 425.143816c0.093121-17.86488-2.838651-35.791158-8.207939-52.113915-0.061398-0.463558-0.153496-0.89437-0.246617-1.26583-0.370437-1.788739-0.86367-3.517103-1.573845-5.183046L858.609159 186.54565c-12.527314-37.334303-48.50369-60.228733-90.589205-60.32083L260.369006 126.22482c-42.641169 0-75.778894 22.678512-87.781252 58.531068L94.833879 368.463909c-0.370437 1.079588-0.771573 2.684132-1.110287 4.319375-5.646604 17.339924-8.485255 35.143405-8.485255 53.008284 0.047072 47.364751 19.658735 91.617627 53.040007 123.1856l0.214894 269.90315c0 43.50484 35.452443 78.895885 79.049381 78.895885l580.622914-0.370437c43.535539-0.093121 78.957283-35.57524 78.957283-79.111802l-0.058328-260.299421C917.076782 526.08888 940.986331 477.395878 940.960749 425.143816zM798.072411 835.695287l-580.529793 0.370437c-9.564843 0-17.339924-7.713682-17.339924-17.217127l-0.185218-232.914724c16.764825 5.293563 35.163871 7.983835 55.045687 7.983835 50.632167-0.153496 97.531314-22.400173 129.496329-60.47535 31.81152 37.766139 78.340229 59.858296 128.880299 60.166311 50.138934-0.401136 96.543823-22.586414 128.200824-60.32083 31.965016 38.075177 78.926584 60.228733 129.805368 60.228733 15.559371-0.077771 30.233582-1.77646 43.916209-5.060249l0.051165 229.867318C815.413358 827.889507 807.606555 835.664587 798.072411 835.695287zM823.065641 520.114818c-13.977339 7.652284-31.410384 11.570523-51.68208 11.69332-37.58092 0-71.828932-19.068288-91.823312-51.434439-1.419326-3.055592-3.795443-8.114818-8.238638-12.989849-5.090948-5.708002-14.346753-12.464893-29.588899-12.464893-12.279674 0-23.418362 5.028527-29.712719 12.743232-4.16588 4.689812-6.448876 9.348925-8.084119 12.742209-19.74674 31.966039-53.718459 51.218522-90.527806 51.496861-37.272905-0.215918-71.335698-19.407002-91.206258-51.619658-1.388627-2.838651-3.703345-7.621585-7.312546-11.663644-14.502295-17.309224-46.960545-16.414855-59.610656-1.326205-4.659113 5.090948-7.096628 10.212596-8.670473 13.700023-19.931958 31.965016-54.211692 51.126424-91.607394 51.249221-19.931958 0-36.994566-3.734044-50.755987-11.07729l-0.030699 0c0 0 0 0-0.030699 0-35.297924-18.789948-57.235562-55.32198-57.266261-95.309716 0-11.81714 1.974981-23.727401 5.92392-35.328623 0.277316-0.832971 0.523933-1.759063 0.740874-2.715855l76.581166-181.054589c1.573845-4.628414 6.325056-18.72855 30.144554-18.72855l507.805468 0c9.780761 0.586354 26.628474 2.313695 32.613792 19.931958l71.706135 178.555675c0.278339 1.295506 0.617054 2.529613 0.926092 3.547803 3.980661 11.631922 5.954619 23.449062 5.954619 35.175127C879.375112 464.761116 857.80791 501.107929 823.065641 520.114818z" p-id="1337"></path></svg>店铺
                </a>
                <a class="support cell" href="http://im.m.taobao.com/ww/ad_ww_dialog.htm?item_num_id=545802713653&amp;pds=wwseller%23h%23detail&amp;to_user=xLDJz7uov6qy6NK2xuy9orXq" target="_blank"><svg t="1516606307117" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1221" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200"><defs</defs><path d="M538.118867 370.480846c-27.866674 0-50.52779 25.586748-50.52779 57.036018l0 59.471486c0 31.449269 22.661116 57.020668 50.52779 57.020668 27.868721 0 50.529837-25.571399 50.529837-57.020668l0-59.471486C588.648704 396.067594 565.987588 370.480846 538.118867 370.480846z" p-id="1222"></path><path d="M716.378807 370.480846c-27.866674 0-50.529837 25.586748-50.529837 57.036018l0 59.471486c0 31.449269 22.663162 57.020668 50.529837 57.020668 27.868721 0 50.529837-25.571399 50.529837-57.020668l0-59.471486C766.908644 396.067594 744.247528 370.480846 716.378807 370.480846z" p-id="1223"></path><path d="M507.802398 76.264964c-72.883961 0-145.43023 18.558681-209.862705 53.682643-35.33988-24.300452-95.989191-50.575886-122.984009-56.256258-3.721765-1.086751-6.874571-1.545192-10.964726-1.606591l-2.539846 0.076748c-1.316995 0.01535-2.097778 0.046049-2.894933 0.199545-8.849552 1.468444-16.550954 6.246261-21.666462 13.427824-4.777817 6.691399-6.752798 14.852266-5.465478 22.231327 0.322341 4.869914 0.948605 10.120498 3.276626 15.558347 21.545712 44.573171 18.960841 106.86796 17.174148 131.273812-49.737798 62.889329-62.730717 114.53457-64.921615 125.002992-8.037047 22.661116-17.143449 103.403045-17.143449 121.708969 0 250.409167 192.391798 446.553429 437.992449 446.553429 241.803161 0 438.529685-195.563024 438.529685-435.926394C946.332083 271.812639 749.605559 76.264964 507.802398 76.264964zM507.694951 885.735983l-5.77247 0.061398c-100.780311 0-194.58065-40.943504-264.111237-115.297956-67.923996-72.638367-105.32993-168.152744-105.32993-268.965801 0-7.65126 1.084705-20.810978 2.629897-35.247782 0.917906-6.930853 1.828648-14.406105 2.718925-22.944572 0.072655-0.568958 0.145309-1.12973 0.220011-1.694595 5.935176-55.638181 37.546128-117.515461 63.932078-154.933675 0.178055-0.298805-0.011256-0.245593 0.222057-0.598634 10.019191-15.174608 8.230452-30.619368 9.740852-35.80753 1.224898-29.016871-1.6158-55.749722-1.746784-56.941873l-0.00614 0.00614c-0.693802-13.679557-1.823532-28.180829-3.450589-42.201148 20.455891 10.107195 39.810704 23.596418 57.632605 40.162722 11.56029 9.784854 27.822672 11.990079 41.648562 5.084808 61.537542-37.805024 131.313721-57.788148 201.778586-57.788148 207.259414 0 375.87367 167.573553 375.87367 373.531322C883.676068 718.409047 718.522634 882.490056 507.694951 885.735983z" p-id="1224"></path></svg>客服
                </a>
                <a class="addfav cell"><svg t="1516606477258" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1449" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200"><defs></defs><path d="M946.44567 407.179676c-3.706415-11.056823-13.268188-19.154245-24.823362-20.929682l-263.117606-40.614L540.930913 93.91802c-5.108345-10.93198-16.071024-17.939581-28.155247-17.971303-0.030699 0-0.062422 0-0.062422 0-12.021801 0-22.985504 6.945179-28.155247 17.84646L365.79001 345.247138l-263.917832 39.507806c-11.399631 1.961678-20.774139 10.060123-24.355711 21.054525-3.613294 10.963703-0.778736 23.047926 7.257288 31.332612l191.202717 196.684568-45.6282 277.132808c-1.930979 11.741415 3.0208 23.608697 12.769838 30.491455 9.717316 6.882757 22.549575 7.630794 32.983205 1.868557l235.366565-129.47177 234.868215 130.282229c4.703115 2.616594 9.904581 3.924379 15.106046 3.924379 6.291287 0 12.551874-1.868557 17.877159-5.699816 9.748015-6.852058 14.763239-18.687618 12.862959-30.460756L747.488339 634.635061l191.669344-195.84341C947.286828 430.476265 950.121386 418.2365 946.44567 407.179676zM691.986257 602.337471c-6.882757 7.039323-10.060123 16.974603-8.471952 26.722618l37.000706 229.480508L526.666024 751.025908c-9.343809-5.232165-20.74344-5.232165-30.117948-0.062422L302.262138 857.856006l37.779442-229.387387c1.588171-9.717316-1.52575-19.652596-8.40953-26.754341L170.703847 436.176081l220.156142-31.686676c2.191922-0.378623 4.288676-0.980327 6.274914-1.771343 7.674796-2.63092 14.32117-8.233522 18.061354-16.156982l97.392144-206.183919 96.550986 206.712969c4.422729 9.406231 13.205766 16.008602 23.483854 17.596773l219.638349 33.886785L691.986257 602.337471z" p-id="1450"></path></svg>收藏
                </a>
                <div class="mods-wrap"></div>
                <div class="trade">
                    <a class="cart " role="button">加入购物车</a>
                    <a class="info" role="button"></a>
                    <a class="buy " role="button">立即购买</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('javascript')
@parent
<script type="text/javascript" src="{{ mix('/js/h5/item/show.js') }}"></script>
@endsection
