@extends('template.fslicn.layout')
@section('title','')
@section('body','vod-search')
@section('other')
    <script src="http://tv.bbbbbb.me/ckplayer/ckplayer.js"></script>
    <script src="/public/static/fslicn/js/home.js"></script>
    <script data-cfasync="false" src="/public/static/fslicn/js/email-decode.min.js"></script>
@endsection()
@section('content')
    <div class="container">
        
            <div class="row">
            <div class="hy-layout clearfix topss">
            <div class="tab-content">
                <div class="hy-play-list tab-pane fade in active" id="list3">
                    <div class="item">
				<div class="col-sm-12 padding-0">
<iframe id="iframe-player" name="iframe-player" src="http://www.cietv.com/images/img/100" width="100%" height="600" scrolling="no" frameborder="0"></iframe>

            </div>

<div class="footer clearfix" id="xlu" style="display:inline-block; height:auto; background:none">
<span class="text-muted" id="xlus">

<a href="http://www.cietv.com/images/img/100" class="btn btn-sm btn-default" target="iframe-player">直播源1</a>
<a href="http://tv.bingdou.net/live.html" class="btn btn-sm btn-default" target="iframe-player">直播源2</a>
						</span></div>
                </div>
            </div>
        </div>
  </div>


@endsection