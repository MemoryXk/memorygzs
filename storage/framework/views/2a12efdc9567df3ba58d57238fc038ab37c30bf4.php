<?php $__env->startSection('title','播放页'); ?>
<?php $__env->startSection('content'); ?>
<div class="main">
<?php echo config('adconfig.play_top'); ?>

</div>
<div class="mb">
	 <div class="main">
		
		<iframe id="video" src="/jzad" allowfullscreen="true" allowtransparency="true"></iframe>
		
  </div>
</div>
    <div class="main">
			<div class="tab-title mb clearfix">
    <ul>
    	<li class="on" id="xuji">正在为您播放-<?php echo e($pm); ?></li>
    </ul>
  </div>
      <div class="tab-down clearfix">
	<div class="playfrom clearfix">
    <ul>
    <li class="on" ><i class="playerico ico-Azhan"></i>简介：</li>
    </ul>
  </div>
  <div class="playlist clearfix"  >
	<div class="jianjie clearfix">
      <a><?php echo e($desc); ?></a>
	</div>
  </div>
  </div>
  <div class="tab-down clearfix">
	<div class="playfrom clearfix">
    <ul>
    <li class="on" ><i class="playerico ico-Azhan"></i>解析接口&播放失败请刷新或切换播放地址</li>
    </ul>
  </div>
  <div class="playlist clearfix"  >
	<div class="jiekouurl clearfix">
	  <ul  id="xlu">
	 <?php $__currentLoopData = $jk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  <li id="xlus">
		<a onclick="xldata(this)" data-jk="<?php echo e($v); ?>"><?php echo e($key); ?></a>
	  </li>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  </ul>
	</div>
  </div>
  </div>
  <!--/播放地址-->
<?php $__currentLoopData = $js; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="tab-down clearfix">
	<div class="playfrom clearfix">
    <ul>
    <li class="on" ><i class="playerico ico-Azhan"></i><?php echo e($v['name']); ?></li>
    </ul>
  </div>
  <div class="playlist clearfix"  >
	
	  <ul class="playlist videourl clearfix">
		<?php echo isset($v['data'])?$v['data']:'暂无可用播放源'; ?>

	  </ul>
	
  </div>
  </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--/播放地址结束-->
<div class="cont-banner"> 
<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=<?php echo e(config('webset.webmail')); ?>" target="_blank">点击这里给点宝贵的意见</a> 
</div>
<div class="index-area clearfix">
    <h1 class="jilu index-color">播放记录</h1>
    <div class="playlist clearfix"  >
		<div class="videourl clearfix">
			<ul>
				<?php if($history): ?>
				<?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><a href="<?php echo e($v['url']); ?>" title="<?php echo e($v['title']); ?>"><?php echo e($v['title']); ?></a></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
				<h3>暂无播放记录</h3>
				<?php endif; ?>
			</ul>
		</div>
	</div>
<!--评论-->
    <h1 class="jilu index-color">观看评论</h1>
	<div class="playlist">
		<?php echo config('webset.cy'); ?>

	</div>
</div>
<script>
	$(function () {
			$('.title.g-clear').remove();
			$('.all.js-show-init').remove();
			$('.js-tab-wrapper').remove();
			
			$.each($('.num-tab.js-tabs'),function () {
					if($(this).children('.num-tab-main').length>1){
							$(this).children('.num-tab-main:eq(0)').remove();
					}
					$(this).children('.num-tab-main').children('a').wrap("<li></li>");
					$(this).children('.num-tab-main').children('li').children('a').addClass('am-btn am-btn-default lipbtn');

			});
			
			$('.ji-tab-content.js-tab-content').css('opacity',1);
			$('.num-tab-main.g-clear.js-tab').removeAttr("style");
			$.each($('.lipbtn'),function () {
					var url = $(this).attr('href');
              		$(this).attr('onclick','bofang(this)');
					$(this).attr('data-href',url);
					$(this).attr('href','javascript:;');
					
			});
			var biaoti = $('#xuji').text();
			$('title').text(biaoti);
			$('#xlus').children('a:eq(0)').addClass('jkbtn');
			var autourl = $('.lipbtn:eq(0)').attr('data-href');
			$('.lipbtn:eq(0)').attr('id','ys');
			var text = $('.lipbtn:eq(0)').text();
			$('.js').text('-第'+text+'集');
			var jiekou = $('#xlus').children('a:eq(0)').attr('data-jk');
			if(autourl!=''||autourl!=null){
					setTimeout(function () {
							$('#video').attr('src', jiekou + autourl);
					},3000)
			}
	})
	function bofang(obj) {
			var href = $(obj).attr('data-href');
			var text = $(obj).text();
			$('.js').text('-第' + text+'集');
			$.each($('.lipbtn'), function () {
					$(this).attr('id','');
			});
			$(obj).attr('id','ys');
			var jiekou = $('.jkbtn').attr('data-jk');
			if (href != '' || href != null) {
					$('#video').attr('src', '/jzad');
					setTimeout(function () {
							$('#video').attr('src', jiekou + href);
			},3000)
	}
	}
	function xldata(obj) {
			var url = $(obj).attr('data-jk');
			$.each($('.jkbtn'), function () {
					$(this).removeClass('jkbtn');
			});
			$(obj).addClass('jkbtn');
			var src = $('#ys').attr('data-href');
			$('#video').attr('src', url + src);
	}
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.1938.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>