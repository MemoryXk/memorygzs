<?php $__env->startSection('body','vod-type apptop'); ?>
<?php $__env->startSection('title','唯美动漫'); ?>
<?php $__env->startSection('content'); ?>
<div class="main">
<?php echo config('adconfig.list_top'); ?>

</div>
<div class="main">
	<h1 class="title"><a href="/">首页</a>&nbsp;&nbsp;»&nbsp;&nbsp;<a href="/dmlist/all/1.html">动漫</a> </h1>
  <div class="sy-all mb clearfix">
    <div class="sy-title clearfix">
     <p class="type">
      <span class="type">动漫</span>
     </p>
      <p class="chg sbtn" _s_nav="sj-gjsy">筛选<i class="sjbgs"></i><i class="sjbgx"></i></p>
    </div>
  <div class="sy-nav-down clearfix">
  <div id="sj-gjsy" class="sy clearfix" _s_nav="sj-gjsy" style="display:none;">
          <dl class="clearfix"><dt><span>按分类</span></dt>
          
         <?php $__currentLoopData = $dmtype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <dd><a href="/dmlist/<?php echo e($v); ?>/1.html" class="on"><?php echo e($key); ?></a></dd>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </dl>
  </div>
  </div>
  </div>
  <div class="sy-jg mb">
     <p class="jg">
      &nbsp;共<span class="count">24</span>页
     </p>
     <p class="px">
     如果您喜欢本站请动动小手分享给您的朋友！
     </p>
  </div>
	<div class="index-area clearfix">
	<ul>
   <?php $__currentLoopData = $dms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="p1 m1">
		<a class="link-hover" href="/play/<?php echo e($dm['url']); ?>.html" title="<?php echo e($dm['title']); ?>" onclick="jilu(this)">
		<img class="lazy" data-original="<?php echo e($dm['img']); ?>" src="/public/static/1938/images/loading.gif" alt="<?php echo e($dm['title']); ?>">
		<span class="video-bg"></span>
		<span class="lzbz">
			<p class="name"><?php echo e($dm['title']); ?></p>
			<p class="actor">高清</p>
		</span>
		<p class="other"><i><?php echo e($dm['js']); ?></i></p>
		</a>
    </li>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    </ul>
	</div>
<div class="page mb clearfix">
  <ul> <?php echo $pagehtml; ?></ul>
</div>   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.1938.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>