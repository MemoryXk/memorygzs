
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta name="applicable-device" content="pc,mobile">
<title><?php echo e(config('webset.webname')); ?>-<?php echo e(config('webset.websubname')); ?>-<?php echo $__env->yieldContent('title'); ?></title>
<meta name="keywords" content="<?php echo e(config('webset.webkeywords')?config('webset.webkeywords'):'全网vip免费看'); ?>" />
<meta name="description" content="<?php echo e(config('webset.webname')); ?>-<?php echo e(config('webset.websubname')); ?>-<?php echo $__env->yieldContent('title'); ?>-<?php echo e(config('webset.wedesc')?config('webset.wedesc'):'全网vip免费看'); ?>" />
<link href="/public/static/1938/css/style.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="/public/static/1938/js/common.js"></script>
<script src="/public/static/1938/js/function.js"></script>
<script src="/public/static/1938/js/jquery.lazyload.js"></script>
<!--[if lt IE 9]>
<script src="/public/static/1938/js/html5shiv.min.js"></script>
<script src="/public/static/1938/js/respond.min.js"></script>
<![endif]-->
<script src="/public/static/1938/js/jquery.superslide.js" type="text/javascript"></script>
</head>
<body>
<!--头部-->
<div class="header-all">
  <div class="top clearfix">
    <ul class="logo">
		<a href="/"><img src="/public/static/1938/images/logo.png" title="logo"></a>
	</ul>
    <ul class="top-nav">
      <li><a class="now" href="/" class="on">首页</a></li>
      <!--导航-->
      <?php if($navlist): ?>
		<?php $__currentLoopData = $navlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li class="" _t_nav="topnav-<?php echo e($v['nav_title']); ?>">
			<a href="<?php echo e($v['nav_addr']); ?>" class="on"><?php echo e($v['nav_title']); ?></a>
		</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
      <?php endif; ?>
	  <li id="nav-down"><?php echo config('appconfig.isdh')?'<a href="/app.html" target="_blank">'.config('appconfig.appdh').'</a>':''; ?></li>
	</ul>
	  <ul class="search" id="ff-search" role="search">
        <input class="input" placeholder="输入影片关键词..." type="text" id="ff-wd" name="wd" required="">
		<a href="javascript:" class="imgbt" title="搜索" id="sousuo"></a>
      </ul>
    <ul class="nav-qt aa">
      <li class="bb">
	  <a href="/userlogin.html"><i class="jl"></i>注册登录</a>
      <div class="cc maw"><p>点击前往注册会员！</p></div></li>
      <li class="bb"><strong class="ma"><i class="mabg"></i>微信公众号</strong>
      <div class="cc maw"><i class="ewmbg"><img src="<?php echo e(config('wxconfig.wximg')); ?>" width="150px;"></i><p>微信扫描二维码，关注公众号</p></div></li>
	</ul>
<ul class="sj-search"><li class="sbtn2"><i class="sjbg-search"></i></li></ul>
<ul class="sj-nav"><li class="sbtn1"><i class="sjbg-nav"></i></li></ul>
<ul class="sj-navhome"><li><a href="/"><i class="sjbg-home"></i></a></li></ul>
</div>
<!--手机版导航-->
  <div id="sj-nav-1" class="nav-down-1 sy1 sj-noover" style="display:none;" _s_nav="sj-nav-1">
    <div class="nav-down-2 sj-nav-down-2 clearfix">
    <ul> 
      <li><a href="/" class="on">首页</a></li>
       <?php if($navlist): ?>
		<?php $__currentLoopData = $navlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="<?php echo e($v['nav_addr']); ?>" class="on"><?php echo e($v['nav_title']); ?></a></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
      <?php endif; ?>
	  <li id="nav-down"><?php echo config('appconfig.isdh')?'<a href="/app.html" target="_blank">'.config('appconfig.appdh').'</a>':''; ?></li>
    </ul>
    </div>
  </div>
  <div class="nav-down-1 sy2 sj-noover" style="display:none;" _t_nav1="sj-nav-search">
    <div class="nav-down-2 sj-nav-down-search clearfix">
	<form id="homeso" role="search">
      <input type="text" class="input" id="sos" name="key" placeholder="请输入关键字">
      <button class="imgbt" id="button" type="button">
         搜索
        </button>
	</form> 
	</div>
  </div>
</div>
<div class="topone clearfix"></div>
<div class="leaveNavInfo">
<h3>
	<span id="adminleaveword"></span>
	<marquee style="width: 100%;color: red;font-size: 20px"><?php echo e(config('webset.notice')); ?></marquee>
</h3>
</div>
<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>
<div class="ylink clearfix">
友情连接：
<?php if(isset($yqlist)): ?>
<?php $__currentLoopData = $yqlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e($yq['yq_link']); ?>" target="_blank"><?php echo e($yq['yq_name']); ?></a> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>	
</div>
<div class="footer clearfix">
<p>免责声明:本站所有视频均来自互联网收集而来，版权归原创者所有，如果侵犯了你的权益，请通知我们，我们会及时删除侵权内容，谢谢合作。</p>  
<center><?php echo config('webset.webtongji'); ?></center>
<p>Copyright:<a href="#" target="_blank"><?php echo e(config('webset.webicp')); ?>-<?php echo e(config('webset.copyright')); ?></a></p>
<p>版权投诉邮箱:<?php echo e(config('webset.webmail')); ?></p>
</div>
<div class="gotop"><a class="gotopbg" href="javascript:;" title="返回顶部"></a></div>
<script>
    $(function () {
        $('#sousuo').click(function () {
            var key = $('#ff-wd').val();
            if (key != '' && key != null) {
                window.location = '/search/' + key + '.html'
            }
        });

        $('input').keyup(function () {
            if (event.keyCode == 13) {
                $("#sousuo").trigger("click");
            }
        })
    })
</script>
<script>
            $(function () {
                $('#button').click(function () {
                    var key = $('#sos').val();
                    if (key != '' && key != null) {
                        window.location = '/search/' + key + '.html'
                    }
                });

                $('input').keyup(function () {
                    if (event.keyCode == 13) {
                        $("#button").trigger("click");
                    }
                })
            })
        </script>
<script>
    function jilu(obj) {
        var url = $(obj).attr('href');
        var img = $(obj).attr('src');
        var title = $(obj).attr('title');
        $.ajax({
            type: "get",
            url: "/history",
            dataType: "json",
            data: {"url": url, "img": img, "title": title},
            success: function () {

            }
        })
    }
</script>
</body>
</html>