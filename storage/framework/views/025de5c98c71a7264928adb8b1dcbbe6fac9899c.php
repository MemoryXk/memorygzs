
<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('body','vod-search'); ?>
<?php $__env->startSection('content'); ?>
<div class="container apptop">
    <div class="row">
        <div class="col-sm-12 hy-main-content">

            <div class="hy-layout clearfix topss">
                <div class="hy-video-head">
                    <span class="text-muted pull-right hidden-xs"></span>
                    <h4 class="margin-0"><span class="text-color"><?php echo e($searchkey); ?></span>尝鲜相关的结果</h4>
                </div>
                <?php if($cxs): ?>
                    <?php $__currentLoopData = $cxs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hy-video-details active clearfix">
                    <div class="item clearfix">
                        <dl class="content">
                            <dt><a class="videopic" href="/play/<?php echo e($s['dy_addr']); ?>}.html" style="background: url(<?php echo e($s['dy_img']); ?>) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span></a></dt>
                            <dd class="clearfix">
                                <div class="head">
                                    <h3> <a class="text-color" href="/play/<?php echo e($s['dy_addr']); ?>.html" ><?php echo e($s['dy_title']); ?></a></h3>
                                </div>
                                <ul>
                                    <li class="text-muted"><span class="text-muted">简介：</span><?php echo e($s['dy_desc']); ?></li>

                                </ul>
                                <div class="block">
                                    <a class="text-muted" href="/play/<?php echo e($s['dy_addr']); ?>}.html">查看详情 <i class="icon iconfont icon-right"></i></a>
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>
            </div>

            <div class="hy-layout clearfix">
                <div class="hy-video-head">
                    <span class="text-muted pull-right hidden-xs"></span>
                    <h4 class="margin-0"><span class="text-color"><?php echo e($searchkey); ?></span>全网搜索相关结果</h4>
                </div>
                <?php if($ss): ?>
                    <?php $__currentLoopData = $ss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="hy-video-details active clearfix">
                            <div class="item clearfix">
                                <dl class="content">
                                    <dt><a class="videopic" href="/play/<?php echo e($s['dy_addr']); ?>.html" style="background: url(<?php echo e($s['dy_img']); ?>) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span></a></dt>
                                    <dd class="clearfix">
                                        <div class="head">
                                            <h3><a class="text-color" href="/play/<?php echo e($s['dy_addr']); ?>.html" ><?php echo e($s['dy_title']); ?></a> <span class="sodypf"><?php echo e($s['dy_dypf']); ?></span>
                                            </h3>
                                        </div>
                                        <p><span class="text-muted">类 &nbsp;型 ：</span><span class="text-muted"><?php echo e($s['dy_type']); ?></span> <span class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="text-muted"><?php echo e($s['dy_dqdz']); ?></span><span class="split-line"></span>
                                            </p>
                                        <ul>
                                   		    <li class="text-muted"><?php echo e($s['dy_show']); ?></li>
                                            <li class="text-muted"><?php echo e($s['dy_desc']); ?></li> 

                                        </ul>
                                        <div class="block">
                                            <a class="text-muted" href="/play/<?php echo e($s['dy_addr']); ?>.html">查看详情 <i
                                                        class="icon iconfont icon-right"></i></a>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


    <script>
        $(function () {
            var key = $('.text-color:eq(0)').text();
            $('#ff-wd').val(key)
        })
    </script>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('template.fslicn.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>