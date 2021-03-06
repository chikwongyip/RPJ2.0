<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-cn">

	<head>
		<title><?php echo ($companyInfo["comname"]); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/rpj/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/rpj/Public/css/main.css" />
	</head>

	<body class="bodypg">
		<div class="top-intr">
			<div class="container">
				<p class="pull-left">
					<?php echo ($companyInfo["comname"]); ?>
				</p>
				<p class="pull-right">
					<a><i class="glyphicon glyphicon-earphone"></i>联系电话：<?php echo ($companyInfo["comphone"]); ?> </a>
				</p>
			</div>
		</div>
		<nav class="navbar-default">
			<div class="container">
				<div class="navbar-header">
					<!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>-->
					<a href="index.html">
						<h1><?php echo ($companyInfo["comname"]); ?></h1>
						<p><?php echo ($companyInfo["comenglist"]); ?></p>
					</a>
				</div>
				<div class="pull-left search">
					<input type="text" placeholder="输入搜索的内容"/>
						<a><i class="glyphicon glyphicon-search"></i>搜索</a>
					</div>
				<div class="nav-list"><!--class="collapse navbar-collapse" id="bs-example-navbar-collapse"-->
					<ul class="nav navbar-nav">
						<li class="active hidden-xs">
							<a href="index.html">网站首页</a>
						</li>
						<li>
							<a href="about.html">关于瑞谱佳</a>
						</li>
						<li>
							<a href="products.html">产品介绍</a>
						</li>
						<li>
							<a href="news.html">新闻中心</a>
						</li>
						<li>
							<a href="contact.html">联系我们</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="fl hidden-lg hidden-md hidden-sm">
			<ul>
				<li>
					<a href="index.html">
						<p><i class="glyphicon glyphicon-home"></i>
						网站首页</p>
					</a>
				</li>
				<li>
					<a href="tel:<?php echo ($companyInfo["comphone"]); ?>" >
						<p><i class="glyphicon glyphicon-earphone"></i>
						拨号联系</p>
					</a>
				</li>
				<li>
					<a href="contact.html#message">
						<p><i class="glyphicon glyphicon-comment"></i>
						在线留言</p>
					</a>
				</li>
			</ul>
		</div>
		<!--banner-->
		<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="/rpj/Public/images/banner/banner2.jpg">
				</div>
				<div class="item">
					<img src="/rpj/Public/images/banner/banner3.jpg">
				</div>
				<div class="item">
					<img src="/rpj/Public/images/banner/banner1.jpg">
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!--main-->
		<div class="main container">
			<div class="row">
				<div class="col-sm-3 col-xs-12">
					<div class="pro-list">
						<div class="list-head">
							<h2>产品分类</h2>
							<a href="products.html">更多+</a>
						</div>
						<dl>
							<dt>净洗剂</dt>
							<dd><a href="products-detail.html">6501</a></dd>
							<dt>酸度调节剂</dt>
							<dd><a href="products-detail1.html">一水柠檬酸/无水柠檬酸</a></dd>
							<dt>防腐剂</dt>
							<dd><a href="products-detail2.html">苯甲酸钠</a></dd>
							<dt>磷酸盐</dt>
							<dd><a href="products-detail3.html">96%/98%磷酸三钠</a></dd>
							<dd><a href="products-detail4.html">三聚磷酸钠</a></dd>
							<dt>其他醚</dt>
							<dd><a href="products-detail5.html">二乙二醇己醚</a></dd>
							<dd><a href="products-detail6.html">二丙二醇丙醚</a></dd>
							<dd><a href="products-detail7.html">三丙二醇甲醚</a></dd>
						</dl>
					</div>

				</div>
				<div class="col-sm-9 col-xs-12">
					<div class="about-list row">
						<div class="col-md-9 col-sm-12">
							<div class="about">
								<div class="list-head">
									<h2>公司简介</h2>
									<a href="about.html">更多+</a>
								</div>
								<div class=" about-con row">
									<div class="col-sm-6 col-xs-12">
										<img src="/rpj/Public/images/ab.jpg"/>
									</div>
									<div class="col-sm-6 col-xs-12">
										<h3><?php echo ($companyInfo["comname"]); ?></h3>
										<p>
											<?php echo ($companyInfo["combrief"]); ?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-12">
							<div class="con-list">
								<div class="list-head">
									<h2>联系我们</h2>
								</div>
								<div class="con-det">
									<a href="contact.html"><img src="/rpj/Public/images/listcon.jpg"/></a>
									<ul>
										<li>公司地址：<?php echo ($companyInfo["comaddress"]); ?></li>
										<li>移动电话：<br /><?php echo ($companyInfo["comphone"]); ?></li>
										<li>联系邮箱：<?php echo ($companyInfo["comemail"]); ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="pro-show">
						<div class="list-head">
							<h2>产品展示</h2>
							<a href="products.html">更多+</a>
						</div>
						<ul class="row">
							<li class="col-sm-3 col-xs-6">
								<a href="products-detail.html">
									<img src="/rpj/Public/images/products/pro1.jpg"/>
									<p>6501</p>
								</a>
							</li>
							<li class="col-sm-3 col-xs-6">
								<a href="products-detail1.html">
									<img src="/rpj/Public/images/products/pro2.jpg"/>
									<p>一水柠檬酸/无水柠檬酸</p>
								</a>
							</li>
							<li class="col-sm-3 col-xs-6">
								<a href="products-detail2.html">
									<img src="/rpj/Public/images/products/pro3.jpg"/>
									<p>苯甲酸钠</p>
								</a>
							</li>
							<li class="col-sm-3 col-xs-6">
								<a href="products-detail3.html">
									<img src="/rpj/Public/images/products/pro4.jpg"/>
									<p>96%/98%磷酸三钠</p>
								</a>
							</li>
							<li class="col-sm-3 col-xs-6">
								<a href="products-detail4.html">
									<img src="/rpj/Public/images/products/pro5.jpg"/>
									<p>三聚磷酸钠</p>
								</a>
							</li>
							<li class="col-sm-3 col-xs-6">
								<a href="products-detail5.html">
									<img src="/rpj/Public/images/products/pro6.jpg"/>
									<p>二乙二醇己醚</p>
								</a>
							</li>
							<li class="col-sm-3 col-xs-6">
								<a href="products-detail6.html">
									<img src="/rpj/Public/images/products/pro7.jpg"/>
									<p>二丙二醇丙醚</p>
								</a>
							</li>
							<li class="col-sm-3 col-xs-6">
								<a href="products-detail7.html">
									<img src="/rpj/Public/images/products/pro8.jpg"/>
									<p>三丙二醇甲醚</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<a class="move-top">
			<p><i class="glyphicon glyphicon-chevron-up"></i></p>
		</a>
		<footer>
			<div class="footer02">
				<div class="container">
					<div class="col-sm-4 col-xs-12 footer-address">
						<h4><?php echo ($companyInfo["comname"]); ?></h4>
						<ul>
							<li><i class="glyphicon glyphicon-home"></i>公司地址：<?php echo ($companyInfo["comaddress"]); ?></li>
							<li><i class="glyphicon glyphicon-phone"></i>移动电话：<?php echo ($companyInfo["comphone"]); ?></li>
							<li><i class="glyphicon glyphicon-envelope"></i>联系邮箱：<?php echo ($companyInfo["comemail"]); ?></li>
						</ul>
					</div>
					<ul class="footerlink col-sm-4 hidden-xs">
						<li>
							<a href={ $U('Home/About/About')}>关于我们</a>
						</li>
						<li>
							<a href="U('Home/About/About')">产品介绍</a>
						</li>
						<li>
							<a href="news.html">新闻中心</a>
						</li>
						<li>
							<a href="contact.html">联系我们</a>
						</li>
					</ul>
					<div class="gw col-sm-4 col-xs-12">
						<p>关注我们：</p>
						<img src="/rpj/Public/images/wx.jpg"/>
						<p>客服热线：<?php echo ($companyInfo["comphone"]); ?></p>
					</div>
				</div>
				<div class="copyright text-center">
					<span>copyright © 2017 </span>
					<span><?php echo ($companyInfo["comname"]); ?> </span>
					<span><?php echo ($companyInfo["comcode"]); ?></a> </span>
				</div>
			</div>
		</footer>
		<script src="/rpj/Public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/rpj/Public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/rpj/Public/js/main.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>