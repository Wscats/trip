<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">
	<title>携程</title>
	<link rel="stylesheet" href="swiper-3.3.1.min.css">
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<header>
		<div class="head_left">
			<input type="text" placeholder="搜索：目的地/酒店/景点/航班号">
		</div>
		<div class="head_right"><a href="#"></a><span><?php echo "php"; ?></span></div>
	</header>
	<section>
		<div class="swiper-container">
	        <div class="swiper-wrapper">
	            <div class="swiper-slide"><img src="img/lunbo_1.jpg" alt=""></div>
	            <div class="swiper-slide"><img src="img/lunbo_2.jpg" alt=""></div>
	            <div class="swiper-slide"><img src="img/lunbo_3.jpg" alt=""></div>
	            <div class="swiper-slide"><img src="img/lunbo_4.jpg" alt=""></div>
	        </div>
	        <div class="swiper-pagination"></div>
	    </div>
	    <script src="swiper-3.3.1.min.js"></script>
	    <script>

	        var myswiper = new Swiper('.swiper-container', {
	            // direction: 'vertical',  // 一个垂直方向的
	            loop: true,             // 一个循环的滑动
	            pagination: '.swiper-pagination',  // 分页器
	            prevButton: '.swiper-button-prev',
	            autoplay: '1000',

	        });
    	</script>
    	<div class="main1">
    		<div class="main1_1"><a href="#">酒店</a></div>
    		<div class="main1_2">
	    		<div class="main1_2_1"><a href="#">海外酒店</a></div>
	    		<div><a href="#">特价酒店</a></div>
	    	</div>
    		<div class="main1_3">
    			<div class="main1_3_1"><a href="#">团购</a></div>
	    		<div><a href="#">民宿·客栈</a></div>
    		</div>
    	</div>
    	<div class="main2">
    		<div class="main2_1"><a href="#">机票</a></div>
    		<div class="main2_2">
	    		<div class="main2_2_1"><a href="#">火车票·抢票</a></div>
	    		<div><a href="#">特价机票</a></div>
	    	</div>
    		<div class="main2_3">
    			<div class="main2_3_1"><a href="#">汽车票·船票</a></div>
	    		<div><a href="#">专车·租车</a></div>
    		</div>
    	</div>
    	<div class="main3">
    		<div class="main3_1"><a href="#">旅游</a></div>
    		<div class="main3_2">
	    		<div class="main3_2_1"><a href="#">目的地攻略</a></div>
	    		<div><a href="#">周边游</a></div>
	    	</div>
    		<div class="main3_3">
    			<div class="main3_3_1"><a href="#">邮轮</a></div>
	    		<div><a href="#">定制·包团</a></div>
    		</div>
    	</div>
    	<div class="main4">
    		<div class="main4_1">
    			<div class="main4_1_1"><a href="#">景点·玩乐</a></div>
    			<div><a href="#">礼品卡</a></div>
    		</div>
    		<div class="main4_2">
	    		<div class="main4_2_1"><a href="#">美食</a></div>
	    		<div><a href="#">出境WiFi</a></div>
	    	</div>
    		<div class="main4_3">
    			<div class="main4_3_1"><a href="#">全球购·换汇</a></div>
	    		<div><a href="#">保险·签证</a></div>
    		</div>
    	</div>
    	<div class="main5">
    		<div class="main5_1"><a href="#">自由行</a></div>
    		<div class="main5_2"><a href="#">主题游</a></div>
    		<div class="main5_3"><a href="#">一日游</a></div>
    		<div class="main5_4"><a href="#">顶级游</a></div>
    		<div class="main5_5"><a href="#">酒店+景点</a></div>
    		<div class="main5_6"><a href="#">亲子·游学</a></div>
    		<div class="main5_7"><a href="#">外币兑换</a></div>
    		<div class="main5_8"><a href="#">更多</a></div>
    	</div>
    	<div class="main6">
			<ul class="main6_top">
				<li><a href="#">特卖汇</a></li>
				<li><a href="#">领红包再下单 ></a></li>
			</ul>  	
    		<div class="main6_bottom">
    			<div class="main6_bl">
    				<img src="img/1391.jpg" alt="">
					<p>菲律宾长滩岛5日4晚半自助游(4钻)·携程自...</p>
					<div><b><dfn>¥</dfn>999<i>起</i></b><span>2折</span></div>
    			</div>
    			<div class="main6_br">
    				<div class="qiankuan">
    					<dl>
    						<dt>千款特价</dt>
    						<dd>走过路过不要错过</dd>
    					</dl>
    					<img src="img/pic-tmh-02.png" alt="">
    				</div>
    				<div class="qiankuan_xia">
    					<div class="haiwai">
    						<dl>
    							<dt>海外精选</dt>
    							<dd>百元出境游</dd>
    						</dl>
    						<img src="img/pic-tmh-03.png" alt=""> 
    					</div>
    					<div class="zhoubian" >
    						<dl>
    							<dt>周边玩乐</dt>
    							<dd>十元度周末</dd>
    						</dl>
    						<img src="img/pic-tmh-04.png" alt="">
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="main7">
    		<ul class="main7_top">
				<li><a href="#">热门活动</a></li>
				<li><a href="#">获取更多福利 ></a></li>
			</ul>  
			<div class="main7_bottom">
				<ul>
					<li><img src="img/smhl320_ad02.jpg" alt=""><img src="img/app_home_ad03_mmls320160.png" alt=""></li>
					
				</ul>
				<ul>
					<li>
						<img src="img/app_home_ad1_320x160_15k_new.jpg" alt="">
						<img src="img/app_home_ad03_sh320_160.jpg" alt="">
						<img src="img/app_home_ad05_qx320160.jpg" alt="">
					</li>
				</ul>
			</div>	
    	</div>
    	<div class="box">
    		<div class="phone"><a href="#"></a>电话预定</div>
    		<div class="download"><a href="#"></a>下载客户端</div>
    		<div class="my"><a href="#"></a>我 的</div>
    	</div>
	</section>
	<footer>
		<div class ="foot">
			<div class="foot1">
				<a href="#">网站地图</a>|
				<a href="#">ENGLISH</a>|
				<a href="#">电脑版</a>
			</div>
		</div>
		<div class="foot2">&copy 2016携程旅行</div>
	</footer>
    <script>
        (function(doc, win) {
            var docEl = doc.documentElement,
                recalc = function() {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if (clientWidth >= 740) {
                        clientWidth = 740;
                    }
                    if (clientWidth <= 320) {
                        clientWidth = 320;
                    }
                    docEl.style.fontSize = 100 * (clientWidth / 320) + 'px';
                };
            if (!doc.addEventListener) return;
            win.addEventListener('resize', recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);
    </script>
</body>
</html>