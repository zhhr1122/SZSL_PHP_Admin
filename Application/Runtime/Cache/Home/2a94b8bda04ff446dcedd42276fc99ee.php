<?php if (!defined('THINK_PATH')) exit(); $config = D("Basic")->select(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo ($config["title"]); ?></title>
  <meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
  <meta name="description" content="<?php echo ($config["description"]); ?>"/>

  <link href="../Public/css/index.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../Public/css/nivo-slider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../Public/css/styles.css" type="text/css" media="screen" />
  <script src="../Public/js/jquery-1.4.2.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="../Public/css/Vizo-style.css"/>
  <script type="text/javascript" src="../Public/js/jquery-1.6.2.min.js"></script>


  <script type="text/javascript">
      var currentindexa=1;
      $(".flashBg").css("background-color",$("#flasha1").attr("name"));
      function changeflasha(i) {
          currentindexa=i;
          for (j=1;j<=1;j++){
              if (j==i)
              {$("#flasha"+j).fadeIn("normal");
                  $("#flasha"+j).css("display","block");
                  $("#a"+j).removeClass();
                  $("#a"+j).addClass("dq");
                  $(".flashBg").css("background-color",$("#flasha"+j).attr("name"));
              }
              else
              {$("#flasha"+j).css("display","none");
                  $("#a"+j).removeClass();
                  $("#a"+j).addClass("no");}
          }}
      function startAma(){
          timerIDa = setInterval("timer_ticka()",8000);//8000代表间隔时间设置
      }
      function stopAma(){
          clearInterval(timerIDa);
      }
      function timer_ticka() {
          currentindexa=currentindexa>=1?1:currentindexa+1;//此处的5代表幻灯片循环遍历的次数
          changeflasha(currentindexa);}
      $(document).ready(function(){
          $(".flash_bar div").mouseover(function(){stopAma();}).mouseout(function(){startAma();});
          startAma();
      });

      var currentindexb=1;
      $(".flashBg").css("background-color",$("#flashb1").attr("name"));
      function changeflashb(i) {
          currentindexb=i;
          for (j=1;j<=1;j++){
              if (j==i)
              {$("#flashb"+j).fadeIn("normal");
                  $("#flashb"+j).css("display","block");
                  $("#b"+j).removeClass();
                  $("#b"+j).addClass("dq");
                  $(".flashBg").css("background-color",$("#flashb"+j).attr("name"));
              }
              else
              {$("#flashb"+j).css("display","none");
                  $("#b"+j).removeClass();
                  $("#b"+j).addClass("no");}
          }}
      function startAmb(){
          timerIDb = setInterval("timer_tickb()",8000);//8000代表间隔时间设置
      }
      function stopAmb(){
          clearInterval(timerIDb);
      }
      function timer_tickb() {
          currentindexb=currentindexb>=1?1:currentindexb+1;
          changeflashb(currentindexb);}
      $(document).ready(function(){
          $(".flash_bar div").mouseover(function(){stopAmb();}).mouseout(function(){startAmb();});
          startAmb();
      });

      var currentindexc=1;
      $(".flashBg").css("background-color",$("#flashc1").attr("name"));
      function changeflashc(i) {
          currentindexc=i;
          for (j=1;j<=1;j++){
              if (j==i)
              {$("#flashc"+j).fadeIn("normal");
                  $("#flashc"+j).css("display","block");
                  $("#c"+j).removeClass();
                  $("#c"+j).addClass("dq");
                  $(".flashBg").css("background-color",$("#flashc"+j).attr("name"));
              }
              else
              {$("#flashc"+j).css("display","none");
                  $("#c"+j).removeClass();
                  $("#c"+j).addClass("no");}
          }}
      function startAmc(){
          timerIDc = setInterval("timer_tickc()",8000);
      }
      function stopAmc(){
          clearInterval(timerIDc);
      }
      function timer_tickc() {
          currentindexc=currentindexc>=1?1:currentindexc+1;
          changeflashc(currentindexc);}
      $(document).ready(function(){
          $(".flash_bar div").mouseover(function(){stopAmc();}).mouseout(function(){startAmc();});
          startAmc();
      });

      var currentindex=1;
      $("#flashBg").css("background-color",$("#flash1").attr("name"));
      function changeflash(i) {
          currentindex=i;
          for (j=1;j<=3;j++){
              if (j==i)
              {$("#flash"+j).fadeIn("normal");
                  $("#flash"+j).css("display","block");
                  $("#f"+j).removeClass();
                  $("#f"+j).addClass("dq");
                  $("#flashBg").css("background-color",$("#flash"+j).attr("name"));
              }
              else
              {$("#flash"+j).css("display","none");
                  $("#f"+j).removeClass();
                  $("#f"+j).addClass("no");}
          }}
      function startAm(){
          timerID = setInterval("timer_tick()",8000);
      }
      function stopAm(){
          clearInterval(timerID);
      }
      function timer_tick() {
          currentindex=currentindex>=3?1:currentindex+1;
          changeflash(currentindex);}
      $(document).ready(function(){
          $(".flash_bar div").mouseover(function(){stopAm();}).mouseout(function(){startAm();});
          startAm();
      });
      //]]>
  </script>



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
<div style="z-index:1000; width:955px;position:relative; margin:0 auto; padding:0px;">
  <div style="position:absolute;z-index:1000;top:522px;">
    <?php if(is_array($result['topSmallNews'])): foreach($result['topSmallNews'] as $key=>$vo): ?><div class="left" style="margin:0 10px;">
        <table width="229" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
          <a href="/index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>" id="flashb1" style="display:block;"><img src="<?php echo ($vo["thumb"]); ?>" width="229" height="160"></a>
        </table>
      </div><?php endforeach; endif; ?>


  </div></div><!--产业 -->

<!--Slide & Banner  Start-->
<div id="Slidebox">
  <!--flash begin-->
  <div id="flashBg">
    <div id="flashLine">
      <div id="flash">
        <?php if(is_array($result['topPicNews'])): $i = 0; $__LIST__ = $result['topPicNews'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>" id="flash<?php echo ($i); ?>" <?php if($i == 1): ?>style="display:block;"<?php endif; ?>><img src="<?php echo ($vo["thumb"]); ?>" width="100%" height="734"></a><?php endforeach; endif; else: echo "" ;endif; ?>

        <div class="flash_bar">

          <div class="dq" id="f1" onclick="changeflash(1)"></div>

          <div class="no" id="f2" onclick="changeflash(2)"></div>

          <div class="no" id="f3" onclick="changeflash(3)"></div>

        </div>
      </div>
    </div>
  </div>
  <!--flash end-->
</div>
<!--Slide & Banner  End-->
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
<script src="/Public/js/jquery.js"></script>
<script src="/Public/js/conut.js">
</script>
</html>