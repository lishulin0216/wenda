<!doctype html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    
    <meta name="keyword" content="{{ Config::get('webconfig.keyword') }}">
    <meta name="description" content="{{ Config::get('webconfig.des') }}">


    <!-- Style Sheet-->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/style.css")}}"/>
    <link rel='stylesheet' id='main-css-css'  href='{{asset("css/main5152.css?ver=1.0")}}' type='text/css' media='all' />

    <script type='text/javascript' src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <!-- include summernote css/js-->
    <link href="{{ asset('summernote/summernote.css') }}" rel="stylesheet">
    <script src="{{ asset('summernote/summernote.js') }}"></script>
    <!-- include summernote-ko-KR -->
<script src="{{ asset('summernote/lang/summernote-zh-CN.js') }}"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

</head>

<body>

<!-- Start of Header -->
    <header>
        <div class="container">


            

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">问问答</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('question') }}">问题列表</a></li>
            <li><a href="{{ url('question/create') }}">发表问题</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
              @if(Auth::check())
              <li><img src="{{ asset(Auth::user()->photo) }}" class="img-circle user_photo" width="50" height="50"></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                @if(empty(Auth::user()->nickname))
                {{Auth::user()->email}}
                @else
                {{Auth::user()->nickname}}
                @endif
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                
                <li><a href="{{ url('user/person') }}">个人首页</a></li>
                <li><a href="{{ url('user/photo') }}">头像设置</a></li>
                <li><a href="{{ url('user/set') }}">个人设置</a></li>
                <li><a href="{{ url('user/message') }}">站内信</a></li>
            </ul>
            </li>
              <li><a href="{{ url('/logout') }}">退出登录</a></li>
              @else
              <li><a href="{{ url('/user/register') }}">注 册</a></li>
              <li><a href="{{ url('/user/login') }}">登 陆</a></li>
              @endif
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        </div>
    </header>
<!-- End of Header -->

@yield('content')

<!-- Start of Footer -->
<footer id="footer-wrapper">
    <div id="footer" class="container">
        <div class="row">

            <div class="col-md-3">
                <section class="widget">
                    <h3 class="title">网站介绍</h3>
                    <div class="textwidget">
                        <p>本互动问答平台是集成了自动切分词、智能搜索、自动分类等一整套的自然语言处理和信息检索技术，为用户提供的一个交流平台，大家可以在这里接受专家和其他网民的帮助，同时也尽力给别的网民提供有效的帮助。</p>

                    </div>
                </section>
            </div>

            <div class="col-md-3">
                <section class="widget">
                    <h3 class="title">平台分类</h3>
                    <ul>
                        <li><a href="#" title="Lorem ipsum dolor sitamet,">分享平台</a> </li>
                        <li><a href="#" title="Lorem ipsum dolor sit amet,">知识问答</a></li>
                        <li><a href="#" title="Lorem ipsum dolor sit amet,">排疑解难</a></li>
                    </ul>
                </section>
            </div>

            <div class="col-md-3">
                <section class="widget">
                    <h3 class="title">友情链接</h3>

                        <ul>
                            <li><a href="http://www.howzhi.com/">好知网</a></li>
                            <li><a href="http://www.yjlan.com/">知识网</a></li>
                            <li><a href="http://www.cnki.net/">中国知网</a></li>

                        </ul>
                </section>
            </div>

            <div class="col-md-3">
                <section class="widget">
                    <h3 class="title">网站图片</h3>
                    <img src="{{ asset('images/footer1.jpg') }}">
                    <img src="{{ asset('images/footer2.jpg') }}">
                    <img src="{{ asset('images/footer3.jpg') }}">

                </section>
            </div>

        </div>
        
    </div>
    <!-- end of #footer -->

    <!-- Footer Bottom -->
    <div id="footer-bottom-wrapper">
        <div id="footer-bottom" class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-3">
                    <p class="copyright">
                        Copyright © 2018. All Rights Reserved by php197 from&nbsp;
                        <a href="#" title="{{ Config::get('webconfig.title') }}" target="_blank">{{ Config::get('webconfig.title') }}</a>
                    </p>
                </div>
                <style>
                    .copyright{
                        color:#0d90d1;
                    }
                </style>
            </div>
        </div>
    </div>
    <!-- End of Footer Bottom -->

</footer>
<!-- End of Footer -->

<a href="#top" id="scroll-top"></a>

<!-- script -->
<script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.easing.1.34e44.js?ver=1.3') }}"></script>
<script type='text/javascript' src="{{ asset('js/prettyphoto/jquery.prettyPhotoaeb9.js?ver=3.1.4') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.liveSearchd5f7.js?ver=2.0') }}"></script>
<script type='text/javascript' src="{{ asset('js/jflickrfeed.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.formd471.js?ver=3.18') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.validate.minfc6b.js?ver=1.10.0') }}"></script>

</body>
</html>