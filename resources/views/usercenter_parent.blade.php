<!doctype html>
<html>
<head>
    <meta charset="gb2312">
    <title>@yield('title')</title>
    <meta name="keywords" content="个人中心" />
    <meta name="description" content="个人中心" />
    <link href="{{ asset('css/usercenter/base.css')}}" rel="stylesheet">
    <link href="{{ asset('css/usercenter/index.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
    <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('js/usercenter/modernizr.js')}}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('js/usercenter/jquery.js')}}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/res/layer/layer.js')}}"></script>
</head>
<body style=    'font: 12px "宋体", Arial, Helvetica, sans-serif;
color: #666666;
background: url(../../images/usercenter/bg.png) right top no-repeat'>
<div id="wrapper" style="background: url(../../images/usercenter/ftbg.png) bottom center no-repeat;
	overflow: hidden;">
    <header>
        <div class="headtop" style="background: url(../../images/usercenter/topbg.png) repeat-x;
	height: 28px;"></div>
        <div class="contenttop" style="	width: 1000px;
	margin: auto;">
            <div class="logo f_l" style="margin-left:300px">个人中心</div>
            <div class="logo f_r" style="margin-left:300px">
                <table class="table">
                    <tr>
                        <td><img src="{{ '/'.\Auth::user()->photo }}" alt="" style="width:100px;height:100px"></td>
                    </tr>
                </table>
            </div>
            <div class="blank"></div>
            <nav>
                <div  class="navigation" style='	height: 64px;
	background: url(../../images/usercenter/navbg.png) no-repeat;
	font-family: "微软雅黑";'>
                    <ul class="menu">
                        <li><a href="{{ url('/') }}">网站首页</a></li>
                            <li><a href="{{ asset('/user/question')  }}">我的提问</a></li>
                            <li><a href="{{ asset('/user/answer') }}/{{ Auth::user()->id }}">我的回答</a></li>
                            <li><a href="{{ url('/user/person') }}">个人资料</a></li>
                        <li><a href="{{ url('/user/changes') }}">修改信息</a> </li>
                    </ul>
                </div>
            </nav>
            <SCRIPT type=text/javascript>
                // Navigation Menu
                $(function() {
                    $(".menu ul").css({display: "none"}); // Opera Fix
                    $(".menu li").hover(function(){
                        $(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown("normal");
                    },function(){
                        $(this).find('ul:first').css({visibility: "hidden"});
                    });
                });
            </SCRIPT>
        </div>
    </header>

@section('content')
    @show

    <div class="r_box f_r">
        <div class="tit01">
            <h3 class="tit" style="	line-height: 44px;
	color: #fff;
	font-size: 18px;
	height: 44px;
	background: url(../../images/usercenter/rtitbg.png) no-repeat;
	padding-left: 40px;
	margin: 0 0 10px 0">联系客服</h3>
            <div class="gzwm">
                <ul>
                    <li><a class="prize" href="javascript:;" onclick="talk()" style="background: url(../../images/usercenter/gz04.png) no-repeat;">在线聊天</a></li>
                    <li><a class="email" href="javascript:;" target="_blank" style="background: url(../../images/usercenter/gz01.png) no-repeat;">客服电话</a></li>
                    <li><a class="qq" href="javascript:;" target="_blank" style="background: url(../../images/usercenter/gz02.png) no-repeat;">客服邮箱</a></li>
                    <li><a class="tel" href="javascript:;" target="_blank" style="background: url(../../images/usercenter/gz03.png) no-repeat;">客服QQ</a></li>
                </ul>
            </div>
        </div>
        <!--tit01 end-->
        <div class="ad">  <iframe name="weather_inc" src="http://i.tianqi.com/index.php?c=code&id=55" style="border:solid 1px #7ec8ea" width="350" height="294" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe> </div>
        <script type='text/javascript'>
            function talk()
            {
                (function(m, ei, q, i, a, j, s) {
                    m[i] = m[i] || function() {
                        (m[i].a = m[i].a || []).push(arguments)
                    };
                    j = ei.createElement(q),
                        s = ei.getElementsByTagName(q)[0];
                    j.async = true;
                    j.charset = 'UTF-8';
                    j.src = 'https://static.meiqia.com/dist/meiqia.js?_=t';
                    s.parentNode.insertBefore(j, s);
                })(window, document, 'script', '_MEIQIA');
                _MEIQIA('entId', 92850);
            }

        </script>
    </div>
    </div>
    <footer>
        <div class="footer" style="	background: url(../../images/usercenter/footerbg.png) repeat-x;
	padding: 20px 0;
	color: #ccc;
	margin: 20px 0 0 0;
	width: 1000px;
	margin: auto;
	overflow: hidden"
        >
            <div style="text-align:center">
                <p style="line-height: 24px"> 版权所有：个人中心 备案号：秦ICP备00000000号</p>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
