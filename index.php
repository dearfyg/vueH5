<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="css/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/csst9402.css"/>
		<script src="js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="body">
		<div class="header-sy">
			<h4><i class="iconfont">&#xe6c8;</i><input type="text" name="" id="" value="" placeholder="搜素商品" /></h4>
		</div>
		<div class="index-content">
			<div class="banner-border">
				<div class="swiper-container swiper-container-horizontal">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="img/banner.png">
						</div>
					
						<div class="swiper-slide">
							<img src="img/banner.png">
						</div>
					
						<div class="swiper-slide">
							<img src="img/banner.png">
						</div>
						
						<div class="swiper-slide">
							<img src="img/banner.png">
						</div>
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
					</div>
				</div>
			</div>
			<div class="gonggao">
				<span><img src="img/sytu9.png"/></span>
				<marquee><span>恭喜会员182*****546，抢购商品成功</span></marquee>
			</div>
			<div class="header-sy-nr">
				<ul>
					<a href="户外运动.html">
						<li>
							<img src="img/sytu2.png"/>
							<p>户外活动</p>
						</li>
					</a>
					<a href="户外运动.html">
						<li>
							<img src="img/sytu3.png"/>
							<p>家具家电</p>
						</li>
					</a>
					<a href="户外运动.html">
						<li>
							<img src="img/sytu1.png"/>
							<p>家居百货</p>
						</li>
					</a>
					<a href="户外运动.html">
						<li>
							<img src="img/sytu4.png"/>
							<p>精选箱包</p>
						</li>
					</a>
				</ul>
			</div>
		</div>
		<div class="header-sy-nr2">
			<p class="hwhd">户外活动</p>
			<i class="iconfont">&#xe6a7;</i>
			<span>更多</span>
		</div>
		<div class="header-sy-nr3" id="goods">
			<ul>
				<a href="产品详情.html">
					<li>
						<div class="spwai">
							<img src="img/sytu8.png"/>
							<div class="spxinxi">
								<p>S-易路达超轻折叠双肩包</p>
								<span>0金币+￥125</span>
							</div>
						</div>
					</li>
				</a>
			</ul>
		</div>
		<div style="height: 5em;"></div>
		<div class="dibu">
			<ul>
				<a href="index.html" class="active">
					<li>
						<i class="iconfont">&#xe897;</i>
						<p>首页</p>
					</li>
				</a>
				<a href="易抢购.html">
					<li>
						<i class="iconfont">&#xe88e;</i>
						<p>易抢购</p>
					</li>
				</a>
				<a href="产品秒杀.html">
					<li>
						<i class="iconfont">&#xe671;</i>
						<p>产品秒杀</p>
					</li>
				</a>
				<a href="wode.html">
					<li>
						<i class="iconfont">&#xe881;</i>
						<p>我的</p>
					</li>
				</a>
			</ul>
		</div>
		<!--轮播图-->
		<script type="text/javascript">
			var mySwiper = new Swiper('.swiper-container', {
				direction : 'horizontal',
				loop : true,
				autoplay : true
			})
		</script>
        <script src="js/jquery-1.12.3.js"></script>
        <script>
            //ajax请求
            $.ajax({
                //请求接口
                url : "http://api.1910.com/goods",
               //请求方式
                type : "get",
                //返回的数据格式
                dataType : "json",
                //携带cookie
                //正确的返回
                success:function(res){
                    console.log(res.data);
                    $.each(res.data,function(v,k){
                        console.log(k);
                        var node = "<ul>"
                                    +"<a href='产品详情.html'>"
                                        + "<li>"
                                            +"<div class='spwai'>"
                                            +"<img src='img/sytu8.png'>"
                                            +"<div>"
                                                +"<p>"
                                                    +k.goods_name
                                                +"</p>"
                                                +"<span>"
                                                    +k.goods_price
                                                +"</span>"
                                            +"</div>"
                                            +"</div>"
                                        + "</li>"
                                    +"</a>"
                                +"</ul>"
                        $("#goods").append(node);
                    })
                }
            });
        </script>
	</body>
</html>
