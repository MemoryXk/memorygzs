<?php
	require('./data.php');
function qqwx(){ 
    if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
echo '<!DOCTYPE html>
<html>
  <head>
      <meta http-equiv="Content-Language" content="zh-CN">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0" />
    <meta content="telephone=no" name="format-detection" />

    <title>提示</title>
    
    <style>
        html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{line-height:1.6;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px}body,h1,h2,h3,h4,h5,p,ul,ol,dl,dd,fieldset,textarea{margin:0}fieldset,legend,textarea,input,button{padding:0}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0;*font-family:"Helvetica Neue",Helvetica,Arial,sans-serif}ul,ol{padding-left:0;list-style-type:none;list-style-position:inside}a img,fieldset{border:0}a{text-decoration:none}

        body{
            color:#222;
            font-size: 12px;
            padding: 120px 15px 20px;
            text-align:center;
        }
        h3{ 
            font-size: 18px; 
            font-weight: normal;
            margin-bottom: 13px;
        }
        .url{
            padding: 5px 0;
            word-break:break-all;
        }
    </style>
  </head>
  <body url="http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">
    <div class="">
        <h3>请长按网址复制后使用浏览器访问</h3>
        <div id="url" class="url"></div>
    </div>
    <script>
        var text = document.createTextNode(document.body.getAttribute("url").replace(/&/g, "&"));
        document.getElementById("url").appendChild(text);
    </script>
  </body>
</html>';
exit();     }    
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !== false ) {
echo '<!DOCTYPE html>
<html>
  <head>
  
    <script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
  <script type="text/javascript"> mqq.ui.openUrl({ target: 2,url: "http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"}); </script>
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0" />
    <meta content="telephone=no" name="format-detection" />

    <title>提示</title>
    
    <style>
        html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{line-height:1.6;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px}body,h1,h2,h3,h4,h5,p,ul,ol,dl,dd,fieldset,textarea{margin:0}fieldset,legend,textarea,input,button{padding:0}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0;*font-family:"Helvetica Neue",Helvetica,Arial,sans-serif}ul,ol{padding-left:0;list-style-type:none;list-style-position:inside}a img,fieldset{border:0}a{text-decoration:none}

        body{
            color:#222;
            font-size: 12px;
            padding: 120px 15px 20px;
            text-align:center;
        }
        h3{ 
            font-size: 18px; 
            font-weight: normal;
            margin-bottom: 13px;
        }
        .url{
            padding: 5px 0;
            word-break:break-all;
        }
    </style>
  </head>
  <body url="http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">
    <div class="">
        <h3>如需浏览，请长按网址复制后使用浏览器访问</h3>
        <div id="url" class="url"></div>
    </div>
    <script>
        var text = document.createTextNode(document.body.getAttribute("url").replace(/&/g, "&"));
        document.getElementById("url").appendChild(text);
    </script>
  </body>
</html>';
exit();
    }  
}
qqwx();
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
    <link rel="stylesheet" href="/public/static/fslicn/css/bootstrap.min.css"/>
    <link href="/public/static/fslicn/css/swiper.min.css" rel="stylesheet" type="text/css">
    <link href="/public/static/fslicn/css/iconfont.css" rel="stylesheet" type="text/css"/>
    <link href="/public/static/fslicn/css/style.min.css" rel="stylesheet" type="text/css"/>
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!--    <link href="/public/static/fslicn/css/<?php echo e(config('webset.theme')); ?>color.css" rel="stylesheet" type="text/css"/>
-->    <link href="/public/static/fslicn/css/<?php echo e(config('webset.theme')); ?>color.css" rel="stylesheet" type="text/css"/>

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
<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>

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