<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "UserController/index";
        //生成路由url
        $url = url('foo');
        var_dump($url);
    }

    public function get($id = null)
    {
        echo "UserController/get";
        echo "<hr>";
        echo $id;
    }

    public function info($id = '1', $name = "Moon")
    {
        echo "UserController/info";
        echo "<hr>";
        var_dump($id);
        var_dump($name);
    }

    public function nameRoute()
    {
        echo "命名路由";
        $url = route('nameRoute');
        var_dump($url);
        $redirect = redirect()->route('xiaofang');
        var_dump('$redirect');

    }

    public function xiaofang()
    {
        echo "UserController/xiaofang";
        echo "<hr>";
        //redirect('user/nameRoute');
    }

}
