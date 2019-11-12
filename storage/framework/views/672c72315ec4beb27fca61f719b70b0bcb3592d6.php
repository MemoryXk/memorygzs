<?php
	require('./data.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="cache-control" content="no-siteapp">
    <title><?php echo e(config('webset.webname')); ?>-<?php echo e(config('webset.websubname')); ?>-<?php echo $__env->yieldContent('title'); ?></title>
    <meta name="keywords" content="<?php echo e(config('webset.webkeywords')?config('webset.webkeywords'):'全网vip免费看'); ?>">
    <meta name="description" content="<?php echo e(config('webset.webname')); ?>-<?php echo e(config('webset.websubname')); ?>-<?php echo $__env->yieldContent('title'); ?>-<?php echo e(config('webset.wedesc')?config('webset.wedesc'):'全网vip免费看'); ?>">
    <link href="http://www.bootcss.com/p/buttons/css/buttons.css" rel="stylesheet" type="text/css"/>
    <link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/static/fslicn/css/bootstrap.min.css"/>
    <link href="/public/static/fslicn/css/swiper.min.css" rel="stylesheet" type="text/css">
    <link href="/public/static/fslicn/css/iconfont.css" rel="stylesheet" type="text/css"/>
    <link href="/public/static/fslicn/css/iconfont2.css" rel="stylesheet" type="text/css"/>
    <link href="/public/static/fslicn/css/<?php echo e(config('webset.theme')); ?>color.css" rel="stylesheet" type="text/css"/>
    <link href="/public/static/fslicn/css/style.min.css" rel="stylesheet" type="text/css"/>
    <!-- iOSwebapp开始 -->
    <!-- 隐藏浏览器的工具栏以及地址栏 -->
    <meta name="apple-mobile-web-app-capable" content="yes">  
    <meta content="telephone=yes" name="format-detection"/>
    <!-- 设置顶端手机状态栏的背景颜色 -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="x5-fullscreen" content="true"/>
    <link href="/public/static/fslicn/images/icon.png" rel="shortcut icon"/>
    <!-- 设置主屏幕应用图标 --> 
    <link rel="apple-touch-icon-precomposed" href="/public/static/fslicn/images/icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/public/static/fslicn/images/FSLilogo_57_57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/static/fslicn/images/FSLilogo_72_72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/static/fslicn/images/FSLilogo_144_144.png">
    <meta name ="apple-mobile-web-app-title"content ="放射力影视">
    <!-- 设置启动画面 -->
    <link rel="apple-touch-startup-image"  href="/images/bj1.png" />
    <!-- 设置竖屏启动画面 -->
    <link rel="apple-touch-startup-image" media="screen and (orientation: portrait)" href="/public/static/fslicn/images/bj1.png" /> <!--竖-->
    <!-- 设置横屏启动画面 -->
    <link rel="apple-touch-startup-image" media="screen and (orientation: landscape)" href="/public/static/fslicn/images/bj1.png" /> <!--横-->
    <!-- iOSwebapp结束 -->
    <script type='text/javascript' src="/public/static/fslicn/js/swiper.min.js"></script>
    <script type='text/javascript' src="/public/static/fslicn/js/system.js"></script>
    <script src="/public/static/fslicn/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/static/fslicn/js/su.js"></script>
    <script type="text/javascript" src="/public/static/fslicn/js/lazyload.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/public/static/fslicn/js/html5.js"></script><![endif]-->
    <?php $__env->startSection('other'); ?>
     <?php echo $__env->yieldSection(); ?>
    <style>
        #ys {
            background: deepskyblue;
            color: black;
        }
        .jkbtn{
            background: deepskyblue;
            color: black;
        }
    </style>
</head>
<body class="<?php echo $__env->yieldContent('body'); ?>">

<div class="tophandkj">
  <div class="hy-head-menu">
  <div class="head_line"><div class="inner"></div></div>  
                <div class="item hy-head-menua">
                    <div class="logo">
                        <a href="/"><img class="hidden-xs" src="/public/static/fslicn/images/logo.png" height="50px" width="150px"/><i class="icon iconfont icon-home hidden-sm hidden-md hidden-lg"></i></a>
                    </div>
                    
                         <ul class="menulist hidden-xs">
                        <?php if($navlist): ?>
                         <?php $__currentLoopData = $navlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li id="nav-index"><a href="<?php echo e($v['nav_addr']); ?>"><?php echo e($v['nav_title']); ?></a></li>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <?php endif; ?>
                        <li id="nav-down"><?php echo config('appconfig.isdh')?'<a href="/app.html" target="_blank">'.config('appconfig.appdh').'</a>':''; ?></li>
   	                    </ul>
                    
                    <div class="search">
                        <div id="ff-search" role="search">
                            <input class="form-control" placeholder="输入影片关键词..." type="text" id="ff-wd" name="wd" required="">
                            <input type="submit" class="hide"><a href="javascript:" class="btns" title="搜索" id="sousuo"><i class="icon iconfont icon-search"></i> <span>全网搜</span></a>
                        </div>
                    </div>
                    <div class="users">
                        <a href="/ucenter.html" target="_self">
                        <button class="button button-large button-plain button-borderless">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        </button>
                        </a>
                </div>
          </div>
    </div>
 </div>
<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>
<!--<div class="hy-gototop hidden-sm hidden-xs">
    <ul class="item clearfix">
        <li><a data-toggle="tooltip" data-placement="top" class="" href="javascript:scroll(0,0)" title="返回顶部"><i class="icon iconfont icon-uparrow"></i></a></li>
    </ul>
</div>
-->
<div class="toolbar hidden-xs">
   <a href="###" class="toolbar-item toolbar-item-weixin">
   <span class="toolbar-layer"></span>
   </a>
   <a href="###" class="toolbar-item toolbar-item-feedback"></a>
   <a href="###" class="toolbar-item toolbar-item-app">
    <span class="toolbar-layer"></span>
   </a>
   <a href="javascript:scroll(0,0)" id="top" class="toolbar-item toolbar-item-top"></a>
</div>


<div class="tabbar visible-xs">
    <a href="/" class="item ">
        <i class="icon iconfont icon-home"></i>
        <p class="text">首页</p>
    </a>
    <a href="/movielist/all/1.html" class="item ">
        <i class="icon iconfont icon-film"></i>
        <p class="text">电影</p>
    </a><a href="/tvlist/all/1.html" class="item ">
        <i class="icon iconfont icon-show"></i>
        <p class="text">电视剧</p>
    </a><a href="/dmlist/all/1.html" class="item ">
        <i class="icon iconfont icon-mallanimation"></i>
        <p class="text">动漫</p>
    </a><a href="/zylist/all/1.html" class="item ">
        <i class="icon iconfont icon-flag"></i>
        <p class="text">综艺</p>
    </a>
</div>


    <div class="container">
    <div class="row">
    
        <div class="hy-layout clearfix">
         <div class="hy-layout clearfix">
                <div class="hy-video-head">
                    <h3 class="margin-0">友情链接</h3>             
                </div>
                   
                <div class="hy-footer-link">
                    <div class="item clearfix">
                        <ul class="clearfix">
                            <?php if(isset($yqlist)): ?>
                                <?php $__currentLoopData = $yqlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e($yq['yq_link']); ?>" target="_blank"><?php echo e($yq['yq_name']); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

 <center><br><a href="#" target="_blank"><?php echo e(config('webset.webicp')); ?>-<?php echo e(config('webset.copyright')); ?></a></center><br><?php echo config('webset.webtongji'); ?></p>
                
        </div>
    </div>
</div>


</body>

<script>
        function flushcache(obj) {
            var action = $(obj).attr('action');
            layer.msg('请稍等…', {
              time: 10*1000
            });
            $.ajax({
                type:"get",
                url:"/action/flushcache/"+action,
                dataType:"json",
                success: function (resp){
                    if(resp.status==200){
                        layer.msg(resp.msg);
                        window.location.href='./';
                    }
                    else {
                        layer.msg(resp.msg)
                    }
                }
            })
        }
    </script>
                
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
        });

        $('.lazy').lazyload({
            placeholder:"/public/static/fslicn/images/loading.gif",
            effect : "fadeIn", //渐现，show(直接显示),fadeIn(淡入),slideDown(下拉)
            threshold : 120, //预加载，在图片距离屏幕180px时提前载入
        });
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
</html>