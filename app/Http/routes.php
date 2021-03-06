<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//前台首页
Route::get('/', 'Home\HomeController@index');
//前台问题列表
Route::resource('question', 'Home\QuestionListController');
//前台回答列表
Route::resource('answer', 'Home\AnswerController');
//前台用户注册页面
Route::get('/user/register', 'Home\UsersController@register');
//前台用户注册提交
Route::post('/user/register', 'Home\UsersController@store');
//前台用户登录
Route::get('/user/login', 'Home\UsersController@login');
Route::post('/user/login', 'Home\UsersController@signin');
//前台用户退出
Route::get('/logout', 'Home\UsersController@logout');
//忘记密码
Route::resource('/user/forget', 'User\ForgetController');
//前台邮箱激活
Route::get('/verify/{confirm_code}', 'Home\UsersController@checkEmail');
//前台用户头像修改
Route::resource('/user/photo', 'User\UsersAvatarController');
//前台用户个人设置
Route::resource('/user/set', 'User\UsersSetController');
//前台站内信
Route::resource('/user/message', 'User\UsersMessageController');
//前台点赞功能
Route::get('/question/like/{id}', 'Home\LikeController@like');
//图片上传
Route::post('/question/upload', 'Home\UploadController@upload');
//前台登陆验证码
Route::get('/vcode/{tmp}', 'Home\UsersController@vcode');


//个人中心=================================================
//路由群组，设置中间件进行验证请求
Route::group(['middleware'=>'auth','prefix'=>'/user'],function(){
    //用户提问
    Route::resource('/question', 'User\UserQuestionController');
    //用户回答路由
    Route::resource('/answer', 'User\UserAnswerController');
    //用户信息中心路由
    Route::resource('/person', 'User\UserPersonController');
    //用户修改信息路由
    Route::resource('/changes', 'User\UserChangeController');
    //用户修改信息时候    头像路由
    Route::post('/pic', 'User\UserPicController@pic');
    //用户修改信息时候    验证码路由
    Route::get('/code', 'User\UserCodeController@code');
});

Route::get('/person/question/{id}', 'User\PersonShowController@index');
Route::get('/person/questioninfo/{id}', 'User\PersonShowController@questioninfo');
Route::get('/person/answer/{id}', 'User\PersonShowController@answer');





//后台路由

//后台登录页面路由
Route::get('admin/login','admin\LoginController@login');
//后台登录验证码路由
Route::get('/code/captcha/{tmp}', 'admin\LoginController@captcha');
//后台登录提交
Route::post('admin/dologin', 'admin\LoginController@doLogin');
//忘记密码
Route::get('forget','admin\RegisterController@forget');
//后台发送邮箱找回密码
Route::post('doforget','admin\RegisterController@doForget');
//重置密码路由
Route::get('reset', 'admin\RegisterController@reset');
//修改密码操作
Route::post('doreset','admin\RegisterController@doReset');

//后台权限
Route::get('admin/auth','admin\IndexController@auth');
//加密验证
Route::get('crypt','admin\LoginController@crypt');
//路由前缀admin， 命名空间admin\, 中间件islogin和...
Route::group(['prefix' => 'admin','namespace' => 'admin', 'middleware' => 'islogin'], function(){
    //后台首页路由
    Route::get('index', 'IndexController@index');
    //退出登录
    Route::get('logout', 'IndexController@logout');
	
    //用户模块
    Route::resource('user', 'UserController');
	//角色授权
	Route::get('user/auth/{id}', 'UserController@auth');
	Route::post('user/doauth', 'UserController@doAuth');
    //话题模块
    Route::resource('topic', 'TopicController');

    //提问模块
    Route::resource('question', 'QuestionController');
	//上传图片的路由
    Route::post('upload', 'QuestionController@upload');
	
	//回复模块
    Route::get('answer', 'AnswerController@index');
    Route::get('answer/{id}', 'AnswerController@show');
	Route::post('answer/destroy/{id}','AnswerController@destroy');
	Route::post('answer/del/{id}','AnswerController@del');
	
	//角色路由
	Route::resource('role', 'RoleController');
	//角色授权
	Route::get('role/auth/{id}', 'RoleController@auth');
	Route::post('role/doauth','RoleController@doAuth');
	
	//权限路由
    Route::resource('permission', 'PermissionController');
    
    //网站配置路由
    Route::get('config/putfile','ConfigController@putFile');
    Route::resource('config','ConfigController');
    Route::post('config/changecontent','ConfigController@changeContent');
});








