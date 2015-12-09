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
Route::get('/world', function () {
    return "world";
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return "我是get请求";
});
Route::post('/', function () {
    return "我是post请求";
});
Route::get('index', "UserController@index");
//为多种请求注册路由
Route::match(['get', 'post'], '/match', function () {
    return 'Hello World';
});
//任意方式的路由
Route::any('foo', function () {
    return 'any request ';
});
Route::any('/user', function () {
    return 'Hello World';
});
//路由参数
/*Route::get('user/{id?}', function ($id) {
    return 'User ' . $id;
});*/
//参数为空 , 参数后用？
Route::get('user1/get/{id?}', "UserController@get");
Route::get('user1/{id}/info/{name?}', 'UserController@info')
    ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);;
//用正则表达式验证路由参数
Route::get('posts/{postId}/comments/{comment}', function ($postId, $commentId) {
    //
    var_dump($postId . ":" . $commentId);
})->where(['postId1' => '[0-9]+', 'comment' => '[0-9a-z]+']);
//命名路由
Route::get('user/nameRoute', ['as' => 'nameRoute', 'uses' => 'UserController@nameRoute']);
Route::get('user/xiaofang', ['as' => 'xiaofang', 'uses' => 'UserController@xiaofang']);
//分组路由
Route::group(['middleware' => 'old'], function () {
    Route::get('/old', function () {
        // Uses Auth Middleware

        return 'old';
    });

    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});
//命名空间路由
Route::group(['namespace' => 'Admin'], function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::group(['namespace' => 'User'], function () {
        // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
    });
});
//子域名路由
Route::group(['domain' => 'moon'], function () {
    Route::get('user/{id}', function ($id) {
        //
        echo "我是moon 域名下面的";
        var_dump($id);
    });
});

//路由前缀
Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function ()    {
        // Matches The "/admin/users" URL
        var_dump('路由前缀');
    });
});
