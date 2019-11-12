@extends('template.fslicn.indexlayout')
@section('body','index')
@section('title','首页')
@section('content')

<div class="headindextop">
	<div class="tophandkj1">
    <div class="hy-head-menu">
                <div class="item hy-head-menua">
                    <div class="logo">
                        <a href="/"><img class="hidden-xs" src="/public/static/fslicn/images/logo.png" height="50px" width="150px"/><i class="icon iconfont icon-home hidden-sm hidden-md hidden-lg"></i></a>
                    </div>
                    <div class="indexsearch search">
                        <div id="ff-search" role="search">
                            <input class="form-control" placeholder="输入影片关键词..." type="text" id="ff-wd" name="wd" required="">
                            <input type="submit" class="hide"><a href="javascript:" class="btns" title="搜索" id="sousuo"><i class="icon iconfont icon-search"></i> <span>全网搜</span></a>
                        </div>
                    </div>
                    <div class="indexusers users">
                        <a href="/ucenter.html" target="_self">
                        <button class="button button-large button-plain button-borderless">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        </button>
                        </a>
                </div>
           </div>
    </div>
    </div>
	<div class="hdpkj">
              <div class="swiper-container hy-slide">
                        <div class="swiper-wrapper">
                           @if($bannerlist)
                               @foreach($bannerlist as $v)
                            <div class="swiper-slide">
                                <div class="hy-video-slide">
                                    <a class="videopic" id="hdpzz"
                                       href="{{$v['banner_link']}}"
                                       title="{{$v['banner_title']}}"
                                       style="background: url({{$v['banner_img']}})  no-repeat;">
                                        <span class="title">{{$v['banner_title']}}</span>
                                    </a>
                                </div>
                            </div>
                              @endforeach
                             @else
                            @endif

                        </div>
                        <div class="swiper-pagination">
                </div>
        </div>
	</div>
</div>
<div class="container">
        <div class="row">
            <div class="hy-layout clearfix">
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="hy-index-menu clearfix">
                        <div class="item">
                            <ul class="clearfix">
                                <li><a href="/movielist/all/1.html"><i class="icon fa fa-film text-color"></i><span>最新电影</span></a></li>
                               
                    <div class="hy-index-tags clearfix">
                        <div class="item">
                            <ul class="clearfix">
                                @foreach($videotype['movie'] as $key=>$type)
                                <li><a href="/movielist/{{$type}}/1.html">{{$key}}</a></li>
                                  @break($loop->index==3) 
                                 @endforeach
                            </ul>
                        </div>
                    </div>

                            </ul>
                        </div>
                    </div>
                    </div>
                    
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="hy-index-menu clearfix">
                        <div class="item">
                            <ul class="clearfix">
                                <li class="leftsolid"><a href="/tvlist/all/1.html"><i class="icon fa fa-tv text-color"></i><span>热追剧</span></a></li>
                               
                    <div class="hy-index-tags clearfix">
                        <div class="item">
                            <ul class="clearfix">
                                @foreach($videotype['tv'] as $key=>$type)
                                <li><a href="/tvlist/{{$type}}/1.html">{{$key}}</a></li>
                                  @break($loop->index==3)
                                 @endforeach
                            </ul>
                        </div>
                    </div>

                            </ul>
                        </div>
                    </div>
                    </div>

                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="hy-index-menu clearfix">
                        <div class="item">
                            <ul class="clearfix">
                                <li class="leftsolidb"><a href="/zylist/all/1.html"><i class="icon fa fa-signing text-color"></i><span>综艺</span></a></li>
                               
                    <div class="hy-index-tags clearfix">
                        <div class="item">
                            <ul class="clearfix">
                                @foreach($videotype['zy'] as $key=>$type)
                                <li><a href="/zylist/{{$type}}/1.html">{{$key}}</a></li>
                                  @break($loop->index==3)
                                 @endforeach
                            </ul>
                        </div>
                    </div>

                            </ul>
                        </div>
                    </div>
                    </div>

                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="hy-index-menu clearfix">
                        <div class="item">
                            <ul class="clearfix">
                                <li class="leftsolid"><a href="/dmlist/all/1.html"><i class="icon fa fa-drupal text-color"></i><span>动漫</span></a></li>
                               
                    <div class="hy-index-tags clearfix">
                        <div class="item">
                                @foreach($videotype['dm'] as $key=>$type)
                                <li><a href="/dmlist/{{$type}}/1.html">{{$key}}</a></li>
                                  @break($loop->index==3)
                                 @endforeach
                            </ul>
                        </div>
                    </div>
                            </ul>
                        </div>
                    </div>
<div><marquee scrollamount="5" style="color: #3ACEED; font-size: 20px; line-height: 1em;  margin-top: 10px;">{!! config('webset.notice') !!}</marquee>
</div>
             <div class="hy-layout clearfix">
                {!! config('adconfig.index_ad') !!}
             </div>
      </div>

            <!--会员视频-->
            @if(config('userconfig.uservideo'))
            <div class="row" style="margin-top:10px">
            <div class="hy-layout clearfix">
                <div class="hy-video-head">
                    <h3 class="margin-0"><i class="icon fa fa-tachometer text-color"></i>会员视频</h3>
                    <ul class="pull-right">
                        <li class="active"><a href="/viplist.html" class="text-muted">更多 <i class="icon iconfont icon-right"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix">
                    <div class="hy-video-list cleafix">
                        <div class="item">
                            @if(isset($vipdata)&&!empty($vipdata))
                                @foreach($vipdata as $key=>$dy)
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a class="videopic lazy" href="/play/{{$dy['dy_id']}}.html" onclick="jilu(this)" title="{{$dy['dy_title']}}" data-src="{{$dy['dy_img']}}">
                                            <span class="play hidden-xs"></span><span class="score">会员专享</span></a>
                                        <div class="title">
                                            <h5 class="text-overflow"><a href="/play/{{$dy['dy_id']}}.html" onclick="jilu(this)" src="{{$dy['dy_img']}}" title="{{$dy['dy_title']}}">{{$dy['dy_title']}}</a>
                                            </h5>
                                        </div>
                                    </div>
                                    @break($loop->index==11)
                                @endforeach
                            @else
                            @endif
                        </div>
                    </div>
                </div>
                <div class="hy-video-footer visible-xs clearfix">
                    <a href="/viplist.html" class="text-muted">查看更多 <i
                                class="icon iconfont icon-right pull-right"></i></a>
                </div>
            </div>
            @else
            @endif
            <!--会员视频-->
            <!--抢先看-->
            <div class="row" style="margin-top:10px"></div>
            <div class="hy-layout clearfix">
                <div class="hy-video-head">
                    <h3 class="margin-0"><i class="icon fa fa-thumbs-up text-color"></i> 网友推荐</h3>
                    <ul class="pull-right">
                            <li class="active"><a href="/autocxlist/5/1.html" class="text-muted">更多 <i class="icon iconfont icon-right"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix">
                    <div class="hy-video-list cleafix">
                        <div class="item">
                            @if(isset($dydata)&&!empty($dydata))
                                @foreach($dydata as $key=>$dy)
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a class="videopic lazy" href="/play/{{$dy['dy_addr']}}.html" onclick="jilu(this)"  title="{{$dy['dy_title']}}" data-src="{{$dy['dy_img']}}">
                                             <span class="play hidden-xs"></span>
                                            <span class="score">抢先看</span>
                                        </a>
                                        <div class="title">
                                            <h5 class="text-overflow"><a href="/play/{{$dy['dy_addr']}}.html" onclick="jilu(this)" data-src="{{$dy['dy_img']}}" title="{{$dy['dy_title']}}">{{$dy['dy_title']}}</a>
                                            </h5>
                                        </div>
                                    </div>
                                    @break($loop->index==11)
                                @endforeach
                            @else
                            @endif
                        </div>
                    </div>
                </div>
                <div class="hy-video-footer visible-xs clearfix">
                    <a href="/autocxlist/5/1.html" class="text-muted">查看更多 <i
                                class="icon iconfont icon-right pull-right"></i></a>
                </div>
            </div>
            <!--抢先看-->
            <!--电影-->
            <div class="row" style="margin-top:10px"></div>
            <div class="hy-layout clearfix">
                <div class="hy-video-head">
                    <ul class="pull-right">
                        @foreach($videotype['movie'] as $key=>$type)
                            <li class="text-muted hidden-sm hidden-xs"><a href="/movielist/{{$type}}/1.html" class="text-muted border-right">{{$key}}</a> /</li>
                            @break($loop->index==7)
                        @endforeach
                        <li class="active"><a href="/movielist/all/1.html" class="text-muted">更多<i class="icon iconfont icon-right"></i></a></li>
                    </ul>
                    <h3 class="margin-0"><i class="icon fa fa-film text-color"></i>电影</h3>
                </div>
                <div class="clearfix">
                    @foreach($dys as $dy)
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <a class="videopic lazy" href="/play/{{$dy['url']}}.html" onclick="jilu(this)" title="{{$dy['title']}}" data-src="{{$dy['img']}}">
                                <span class="play hidden-xs"></span>
                                <span class="score">{{$dy['pf']}} {{$dy['year']}}</span>
                            </a>
                            <div class="title">
                                <h5 class="text-overflow"><a href="/play/{{$dy['url']}}.html" onclick="jilu(this)"
                                                             title="{{$dy['title']}}"
                                                             src="{{$dy['img']}}">{{$dy['title']}}</a></h5>
                            </div>
                            <div class="subtitle text-muted text-muted text-overflow hidden-xs">{{$dy['star']}}</div>
                        </div>
                        @break($loop->index==11)
                    @endforeach
                    <div class="hy-video-footer visible-xs clearfix">
                        <a href="/movielist/all/1.html" class="text-muted">查看更多 <i
                                    class="icon iconfont icon-right pull-right"></i></a>
                    </div>
                </div>
            </div>
            <!--电影-->
            <!--电视剧-->
            <div class="row" style="margin-top:10px"></div>
            <div class="hy-layout clearfix">
                <div class="hy-video-head">
                    <ul class="pull-right">
                        @foreach($videotype['tv'] as $key=>$type)
                            <li class="text-muted hidden-sm hidden-xs"><a href="/tvlist/{{$type}}/1.html" class="text-muted border-right">{{$key}}</a> /</li>
                            @break($loop->index==7)
                        @endforeach
                        <li class="active"><a href="/tvlist/all/1.html" class="text-muted">更多 <i class="icon iconfont icon-right"></i></a></li>
                    </ul>
                    <h3 class="margin-0"><i class="icon fa fa-tv text-color"></i>电视剧</h3>
                </div>
                <div class="clearfix">
                    @foreach($dsjs as $dsj)
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <a class="videopic lazy" href="/play/{{$dsj['url']}}.html" onclick="jilu(this)"
                               title="{{$dsj['title']}}"
                               data-src="{{$dsj['img']}}"><span
                                        class="play hidden-xs"></span><span class="score">{{$dsj['js']}}</span></a>
                            <div class="title">
                                <h5 class="text-overflow"><a href="/play/{{$dsj['url']}}.html" data-src="{{$dsj['img']}}"
                                                             onclick="jilu(this)">{{$dsj['title']}}</a></h5>
                            </div>
                            <div class="subtitle text-muted text-muted text-overflow hidden-xs">{{$dsj['star']}}</div>
                        </div>
                        @break($loop->index==11)
                    @endforeach
                    <div class="hy-video-footer visible-xs clearfix">
                        <a href="/tvlist/all/1.html" class="text-muted">查看更多 <i
                                    class="icon iconfont icon-right pull-right"></i></a>
                    </div>
                </div>
            </div>
            <!--电视剧-->
            <!--综艺-->
            <div class="row" style="margin-top:10px"></div>
            <div class="hy-layout clearfix">
                <div class="hy-video-head">
                    <ul class="pull-right">
                        @foreach($videotype['zy'] as $key=>$type)
                            <li class="text-muted hidden-sm hidden-xs"><a href="/zylist/{{$type}}/1.html" class="text-muted border-right">{{$key}}</a> /</li>
                            @break($loop->index==7)
                        @endforeach
                        <li class="active"><a href="/zylist/all/1.html" class="text-muted">更多<i class="icon iconfont icon-right"></i></a></li>
                    </ul>
                    <h3 class="margin-0"><i class="icon fa fa-signing text-color"></i>综艺</h3>
                </div>
                <div class="clearfix">
                    @foreach($zys as $zy)
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <a class="videopic lazy" onclick="jilu(this)" href="/play/{{$zy['url']}}.html"
                               title="{{$zy['title']}}" data-src="{{$zy['img']}}"><span
                                        class="play hidden-xs"></span><span class="score">{{$zy['js']}}</span></a>
                            <div class="title">
                                <h5 class="text-overflow"><a href="/play/{{$zy['url']}}.html" onclick="jilu(this)"
                                                             data-src="{{$zy['img']}}">{{$zy['title']}}</a></h5>
                            </div>
                            <div class="subtitle text-muted text-muted text-overflow hidden-xs">{{$zy['star']}}</div>
                        </div>
                        @break($loop->index==11)
                    @endforeach
                    <div class="hy-video-footer visible-xs clearfix">
                        <a href="/zylist/all/1.html" class="text-muted">查看更多 <i
                                    class="icon iconfont icon-right pull-right"></i></a>
                    </div>
                </div>
            </div>
            <!--综艺-->
            <!--动漫-->
            <div class="row" style="margin-top:10px"></div>
            <div class="hy-layout clearfix">
                <div class="hy-video-head">
                    <ul class="pull-right">
                        @foreach($videotype['dm'] as $key=>$type)
                            <li class="text-muted hidden-sm hidden-xs"><a href="/dmlist/{{$type}}/1.html" class="text-muted border-right">{{$key}}</a> /</li>
                            @break($loop->index==7)
                        @endforeach
                        <li class="active"><a href="/dmlist/all/1.html" class="text-muted">更多<i class="icon iconfont icon-right"></i></a></li>
                    </ul>
                    <h3 class="margin-0"><i class="icon fa fa-drupal text-color"></i>动漫</h3>
                </div>
                <div class="clearfix">
                    @foreach($dms as $dm)
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <a class="videopic lazy" href="/play/{{$dm['url']}}.html" title="{{$dm['title']}}" data-src="{{$dm['img']}}" onclick="jilu(this)"><span class="play hidden-xs"></span><span class="score">{{$dm['js']}}</span></a>
                            <div class="title">
                                <h5 class="text-overflow"><a href="/play/{{$dm['url']}}.html" src="{{$dm['img']}}"
                                                             onclick="jilu(this)">{{$dm['title']}}</a></h5>
                            </div>
                            <div class="subtitle text-muted text-muted text-overflow hidden-xs"></div>
                        </div>
                        @break($loop->index==11)
                    @endforeach
                    <div class="hy-video-footer visible-xs clearfix">
                        <a href="/zylist/all/1.html" class="text-muted">查看更多 <i
                                    class="icon iconfont icon-right pull-right"></i></a>
                    </div>
                </div>
            </div>
            
            <!--动漫-->
            <div class="row" style="margin-top:10px"></div>
                   
        </div>
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

    
    <script>
        var swiper = new Swiper('.hy-slide', {
            autoplay:true,
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection()
