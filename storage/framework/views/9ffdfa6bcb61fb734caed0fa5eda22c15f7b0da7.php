
<?php $__env->startSection('body','index'); ?>
<?php $__env->startSection('title','首页'); ?>
<?php $__env->startSection('content'); ?>



<div class="main">
<?php echo config('adconfig.index_ad'); ?>

</div>

<?php
header('Content-Type:text/html;charset=UTF-8');

$sylunbo=json_decode(file_get_contents('http://video.mw0.cc/360.php'),true);

?>

<div class="main channel-focus">
  <div class="channel-silder layout">
    <ul class="channel-silder-cnt">
	<?php if($sylunbo['data']): ?>
    <?php $__currentLoopData = $sylunbo['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="channel-silder-panel">
		<a class="channel-silder-img" href="/play/<?php echo base64_encode(e($v['url'])); ?>.html" onclick="jilu(this)">
		<img src="<?php echo ($v['img']); ?>"  title="<?php echo ($v['date']); ?>" /></a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php else: ?>
                            <?php endif; ?>
	        </li>
    </ul>
    <ul class="channel-silder-nav">
	<?php if($sylunbo['data']): ?>
    <?php $__currentLoopData = $sylunbo['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="/play/<?php echo base64_encode(e($v['url'])); ?>.html" onclick="jilu(this)"><?php echo ($v['date']); ?></a></li> 
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php else: ?>
       <?php endif; ?>
    </ul>
  </div>
</div>


<div class="main">
<!--获取会员视频-->
  	<!--div class="index-area clearfix">
    <h1 class="title index-color">
       <span class="hitkey kp">
	<?php if(isset($vipdata)&&!empty($vipdata)): ?>
<?php $__currentLoopData = $vipdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$dy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="/play/<?php echo e($dy['dy_id']); ?>.html" onclick="jilu(this)"><?php echo e($dy['dy_title']); ?></a></li>
       <?php if($loop->index==5) break; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <?php endif; ?>
      <a href="/viplist.html">更多»</a>
      </span>
      <a href="/viplist.html">推荐影视</a>
	  </h1>
    <ul>
	<?php if(isset($vipdata)&&!empty($vipdata)): ?>
<?php $__currentLoopData = $vipdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$dy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
    <li class="p1 m1">
		<a class="link-hover" href="/play/<?php echo e($dy['dy_id']); ?>.html" title="<?php echo e($dy['dy_title']); ?>" onclick="jilu(this)">
			<img class="lazy" data-original="<?php echo e($dy['dy_img']); ?>" src="/public/static/1938/images/loading.gif" alt="<?php echo e($dy['dy_title']); ?>">
			<span class="video-bg"></span>
			<span class="lzbz">
				<p class="name"><?php echo e($dy['dy_title']); ?></p>
              	<p class="actor">会员专属</p>
			</span>
			<p class="other"><i>推荐</i></p>
		</a>
    </li>
	<?php if($loop->index==5) break; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <?php endif; ?>	
    </ul>
    </div-->
  
<!--获取尝鲜视频-->
	<div class="index-area clearfix">
    <h1 class="title index-color">
       <span class="hitkey kp">
	 <?php $__currentLoopData = $videotype['cx']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="/autocxlist/<?php echo e($type); ?>/1.html"><?php echo e($key); ?>片</a></li>
       <?php if($loop->index==9) break; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <a href="/autocxlist/5/1.html">更多»</a>
      </span>
      <a href="/autocxlist/5/1.html">尝鲜视频</a>
	  </h1>
    <ul>
	<?php if(isset($dydata)&&!empty($dydata)): ?>
			<?php $__currentLoopData = $dydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$dy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
    <li class="p1 m1">
		<a class="link-hover" href="/play/<?php echo e($dy['dy_addr']); ?>.html" title="<?php echo e($dy['dy_title']); ?>" onclick="jilu(this)">
		<img class="lazy" data-original="<?php echo e($dy['dy_img']); ?>" src="/public/static/1938/images/loading.gif" alt="<?php echo e($dy['dy_title']); ?>">
		<span class="video-bg"></span>
		<span class="lzbz">
			<p class="name"><?php echo e($dy['dy_title']); ?></p>
          	<p class="actor">高清尝鲜</p>
		</span>
		<p class="other"><i>推荐</i></p>
		</a>
    </li>
	<?php if($loop->index==11) break; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <?php endif; ?>
    </ul>
    </div>

<!--获取电影-->
	<div class="index-area clearfix">
    <h1 class="title index-color">
       <span class="hitkey kp">
     <?php $__currentLoopData = $videotype['movie']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="/movielist/<?php echo e($type); ?>/1.html"><?php echo e($key); ?>片</a></li>
       <?php if($loop->index==10) break; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <a href="/movielist/all/1.html">更多»</a>
      </span>
      <a href="/movielist/all/1.html">电影</a>
	  </h1>
    <ul>
    <?php $__currentLoopData = $dys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="p1 m1">
		<a class="link-hover" href="/play/<?php echo e($dy['url']); ?>.html" title="<?php echo e($dy['title']); ?>" onclick="jilu(this)">
		<img class="lazy" data-original="<?php echo e($dy['img']); ?>" src="/public/static/1938/images/loading.gif" alt="<?php echo e($dy['title']); ?>">
		<span class="video-bg"></span>
		<span class="lzbz">
			<p class="name"><?php echo e($dy['title']); ?></p>
          	<p class="actor">高清电影</p>
		</span>
		<p class="other"><i><?php echo e(isset($dy['pf'])?$dy['pf']:''); ?>分</i></p>
		</a>
    </li>
	<?php if($loop->index==11) break; ?>                                
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
    
<!--获取电视剧-->
	<div class="index-area clearfix">
    <h1 class="title index-color">
       <span class="hitkey kp">
     <?php $__currentLoopData = $videotype['tv']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="/mtvlist/<?php echo e($type); ?>/1.html"><?php echo e($key); ?>片</a></li>
       <?php if($loop->index==10) break; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <a href="/tvlist/all/1.html">更多»</a>
      </span>
      <a href="/tvlist/all/1.html">连续剧</a>
	  </h1>
    <ul>
    <?php $__currentLoopData = $dsjs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dsj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="p1 m1">
		<a class="link-hover" href="/play/<?php echo e($dsj['url']); ?>.html" title="<?php echo e($dsj['title']); ?>" onclick="jilu(this)">
		<img class="lazy" data-original="<?php echo e($dsj['img']); ?>" src="/public/static/1938/images/loading.gif" alt="<?php echo e($dsj['title']); ?>">
		<span class="video-bg"></span>
		<span class="lzbz">
			<p class="name"><?php echo e($dsj['title']); ?></p>
			<p class="actor"><?php echo e($dsj['star']); ?></p>
		</span>
		<p class="other"><i><?php echo e($dsj['js']); ?></i></p>
		</a>
    </li>
	<?php if($loop->index==11) break; ?>                                
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
    
<!--获取综艺-->
	<div class="index-area clearfix">
    <h1 class="title index-color">
       <span class="hitkey kp">
     <?php $__currentLoopData = $videotype['zy']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="/zylist/<?php echo e($type); ?>/1.html"><?php echo e($key); ?>片</a></li>
       <?php if($loop->index==10) break; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <a href="/zylist/all/1.html">更多»</a>
      </span>
      <a href="/zylist/all/1.html">综艺</a>
	  </h1>
    <ul>
   <?php $__currentLoopData = $zys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="p1 m1">
		<a class="link-hover" href="/play/<?php echo e($zy['url']); ?>.html" title="<?php echo e($zy['title']); ?>" onclick="jilu(this)">
		<img class="lazy" data-original="<?php echo e($zy['img']); ?>" src="/public/static/1938/images/loading.gif" alt="<?php echo e($zy['title']); ?>">
		<span class="video-bg"></span>
		<span class="lzbz">
			<p class="name"><?php echo e($zy['title']); ?></p>
			<p class="actor"><?php echo e($zy['star']); ?></p>
		</span>
		<p class="other"><i><?php echo e($zy['js']); ?></i></p>
		</a>
    </li>
	<?php if($loop->index==11) break; ?>                                
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
    
<!--获取动漫-->
	<div class="index-area clearfix">
    <h1 class="title index-color">
       <span class="hitkey kp">
     <?php $__currentLoopData = $videotype['dm']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="/dmlist/<?php echo e($type); ?>/1.html"><?php echo e($key); ?>片</a></li>
       <?php if($loop->index==10) break; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <a href="/dmlist/all/1.html">更多»</a>
      </span>
      <a href="/dmlist/all/1.html">动漫</a>
	  </h1>
    <ul>
    <?php $__currentLoopData = $dms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="p1 m1">
		<a class="link-hover" href="/play/<?php echo e($dm['url']); ?>.html" title="<?php echo e($dm['title']); ?>" onclick="jilu(this)">
		<img class="lazy" data-original="<?php echo e($dm['img']); ?>" src="/public/static/1938/images/loading.gif" alt="<?php echo e($dm['title']); ?>">
		<span class="video-bg"></span>
		<span class="lzbz">
			<p class="name"><?php echo e($dm['title']); ?></p>
          	<p class="actor">高清动漫</p>
		</span>
		<p class="other"><i><?php echo e($dm['js']); ?></i></p>
		</a>
    </li>
	<?php if($loop->index==11) break; ?>                                
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
<!--结束-->
</div>
<script type="text/javascript">
	jQuery(".channel-silder").slide({ 
		titCell:".channel-silder-nav li",
		mainCell:".channel-silder-cnt",
		delayTime:800,
		triggerTime:0,
		interTime:5000,
		pnLoop:false,
		autoPage:false,
		autoPlay:true
	});
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.1938.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>