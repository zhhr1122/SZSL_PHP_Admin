<?php if (!defined('THINK_PATH')) exit(); $config = D("Basic")->select(); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo ($config["title"]); ?></title>
<meta name="keywords" content="<?php echo ($config["keywords"]); ?>" />
<meta name="description" content="<?php echo ($config["description"]); ?>" />
<link rel="stylesheet" href="/Public/css/bootstrap.min.css"
	type="text/css" />
<link rel="stylesheet" href="/Public/css/home/main.css" type="text/css" />
</head>
<body>
	<?php
 $navs = D("Menu")->getBarMenus(); $data['catid'] = 12; $products = D("News")->selectNews($data,8); $data['catid'] = 15; $about = D("News")->selectNews($data,8); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<link href="../Public/css/index.css" rel="stylesheet" type="text/css" />
	<script src="../Public/js/jquery-1.4.2.min.js" type="text/javascript"></script><!--nav -->
	<link rel="stylesheet" href="../Public/css/nivo-slider.css" type="text/css" media="screen" />
	<!--datu -->
	<link rel="stylesheet" href="../Public/css/styles.css" type="text/css" media="screen" />
</head>
<body>
		<div id="header">
			<div id="logo_nav">
				<div class="left"><a href="/"><img src="../Public/images/logo.png" alt="" /></a></div>
				<div id="nav">
					<div>
						<UL id="menu">
							<li class="nav1"><A href="/">首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页</A></li>
							<li class="line"><img src="../Public/images/line.jpg" /></li>

							<li class="nav1"><A href="/index.php?c=cat&id=3">新闻中心</A></li>
							<li class="line"><img src="../Public/images/line.jpg" /></li>

							<li class="nav2"><a href="/index.php?c=cat&id=12">产品介绍</a>
								<ul>
									<?php if(is_array($products)): foreach($products as $key=>$vo): ?><li><a href="/index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
								</ul>
							</li>
							<li class="line"><img src="../Public/images/line.jpg" /></li>

							<li class="nav2"><a href="/index.php?c=cat&id=15">关于我们</a>
								<ul>
									<?php if(is_array($about)): foreach($about as $key=>$vo): ?><li><a href="/index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
								</ul>
							</li>
							<li class="line"><img src="../Public/images/line.jpg" /></li>

							<li class="nav1"><A href="/index.php?c=company&id=17">联系我们</A></li>
							<li class="line"><img src="../Public/images/line.jpg" /></li>
						</UL>
					</div>
				</div>
				<script type="text/javascript">
                    jQuery(document).ready(function()
                    {
                        $("#menu li").hover(
                            function()
                            {
                                $(this).addClass("show");
                            },
                            function()
                            {
                                $(this).removeClass("show");
                            }
                        );
                    });
				</script>
				<!--nav -->
			</div>
			<!--logo_nav -->
		</div>
		<!--header-->

</body>
</html>
	<div id="newsbanner">
		<div class="banner982">
			<div class="new_bj">
				<div class="newtit">联系我们</div>
				<div id="pr-le">

				</div>
				<!--pr-le-->
			</div>
		</div>
	</div>
	<div id="main">
		<div class="loction">当前位置: <a href="/">首页</a> > 公司简介</div>
		<div id="main_cont">
			<div class="news_xtitzi">公司简介</div>
			<div style="text-align:center">日期：<?php echo (date("Y-m-d
				H:i:s",$news["update_time"])); ?></div>
			<?php echo ($news["content"]); ?>
		</div><!--main_cont -->
	</div><!--main -->
	<?php
 $result = D("Basic")->select(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<div id="bottom">
    <div class="bottom982"> <span class="left">深圳市世隆投资 2017 &#169; 版权所有&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($result["icpnumber"]); ?></span> </div>
</div>
</body>
</html>
</body>
</html>