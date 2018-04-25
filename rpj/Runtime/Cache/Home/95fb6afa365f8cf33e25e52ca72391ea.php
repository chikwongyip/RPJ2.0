<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-cn">

	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/rpj/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/rpj/Public/css/main.css" />
	</head>

	<body>
		<div class="top-intr">
			<div class="container">
				<p class="pull-left">
					蓝海化工有限公司
				</p>
				<p class="pull-right">
					<a><i class="glyphicon glyphicon-earphone"></i>联系电话：0512-57995109</a>
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
						<h1>蓝海化工</h1>
						<p>LAN HAI CO.,LTD.</p>
					</a>
				</div>
				<div class="pull-left search">
					<input type="text" placeholder="输入搜索的内容"/>
						<a><i class="glyphicon glyphicon-search"></i>搜索</a>
					</div>
				<div class="nav-list"><!--class="collapse navbar-collapse" id="bs-example-navbar-collapse"-->
					<ul class="nav navbar-nav">
						<li class=" hidden-xs">
							<a href="index.html">网站首页</a>
						</li>
						<li>
							<a href="about.html">关于蓝海</a>
						</li>
						<li class="active">
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
					<a href="tel:0512-57995109" >
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

		<div class="abpg container">
			<div class="">
				<!--<div class="col-md-3">
					<div class="model-title theme">
						产品介绍
					</div>
					<div class="model-list">
						<ul class="list-group">
							<li class="list-group-item ">
								<a href="about.html">产品介绍</a>
							</li>
						</ul>
					</div>
				</div>-->
				<div class="serli ">
					<ol class="breadcrumb">
						<li><i class="glyphicon glyphicon-home"></i>
							<a href="index.html">主页</a>
						</li>
						<li class="active"><a href="products.html">产品介绍</a></li>
					</ol>
					<div class="caseMenu clearfix">
						<ul class=" caseList">
							<li class=" col-sm-2 col-xs-6 active">
								<div>
									<a href="products.html">全部</a>
								</div>
							</li>

							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">净洗剂(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">酸度调节剂(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">防腐剂(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">磷酸盐(2)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">其他醚(3)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">环氧树脂(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">氯化物(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">亚硫酸盐(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">其他羧酸(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">碳酸盐(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">三元醇(2)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">一元醇(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">壬二酸(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">油酸(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">硬脂酸(1)</a>
								</div>
							</li>

							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">二元醇(7)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">羧酸盐(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">硫代硫酸盐(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">其他醇类(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">己酸(1)</a>
								</div>
							</li>
							<li class=" col-sm-2 col-xs-6">
								<div>
									<a href="products.html">丁醚(1)</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="pro-det clearfix">
						<ul>
							<li class="col-sm-3 col-xs-6">
								<div>
									<a href="products-detail.html">
										<img src="/rpj/Public/images/products/pro1.jpg"/>
										<p>6501</p>
									</a>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6">
								<div>
									<a href="products-detail1.html">
										<img src="/rpj/Public/images/products/pro2.jpg"/>
										<p>一水柠檬酸/无水柠檬酸</p>
									</a>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6">
								<div>
									<a href="products-detail2.html">
										<img src="/rpj/Public/images/products/pro3.jpg"/>
										<p>苯甲酸钠</p>
									</a>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6">
								<div>
									<a href="products-detail3.html">
										<img src="/rpj/Public/images/products/pro4.jpg"/>
										<p>96%/98%磷酸三钠</p>
									</a>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6">
								<div>
									<a href="products-detail4.html">
										<img src="/rpj/Public/images/products/pro5.jpg"/>
										<p>三聚磷酸钠</p>
									</a>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6">
								<div>
									<a href="products-detail5.html">
										<img src="/rpj/Public/images/products/pro6.jpg"/>
										<p>二丙二醇丙醚</p>
									</a>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6">
								<div>
									<a href="products-detail6.html">
										<img src="/rpj/Public/images/products/pro7.jpg"/>
										<p>三丙二醇甲醚</p>
									</a>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6">
								<div>
									<a href="products-detail7.html">
										<img src="/rpj/Public/images/products/pro8.jpg"/>
										<p>二丙二醇丙醚</p>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<nav aria-label="Page navigation" class=" text-center">
						<ul class="pagination ">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<li>
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
					</nav>
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
						<h4>蓝海化工有限公司</h4>
						<ul>
							<li><i class="glyphicon glyphicon-home"></i>公司地址：江苏省苏州市联邦国际花园</li>
							<li><i class="glyphicon glyphicon-phone-alt"></i>固定电话：0512-57995109 </li>
							<li><i class="glyphicon glyphicon-phone"></i>移动电话：18112651385</li>
							<li><i class="glyphicon glyphicon-envelope"></i>联系邮箱：Cindy@kindjob.com</li>
						</ul>
					</div>
					<ul class="footerlink col-sm-4 hidden-xs">
						<li>
							<a href="about.html">关于我们</a>
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
					<div class="gw col-sm-4 col-xs-12">
						<p>关注我们：</p>
						<img src="/rpj/Public/images/wx.jpg"/>
						<p>客服热线：0512-57995109</p>
					</div>
				</div>
				<div class="copyright text-center">
					<span>copyright © 2017 </span>
					<span>蓝海化工有限公司 </span>
					<span>更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a> </span>
				</div>
			</div>
		</footer>
		<script src="/rpj/Public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/rpj/Public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/rpj/Public/js/main.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>