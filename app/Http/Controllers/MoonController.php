<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class MoonController extends Controller
{

    public function __construct()
    {
        $this->middleware('old');  //设置中间件

        $this->middleware('before', ['only' => ['showPage']]);

        $this->middleware('after', ['except' => ['showPage']]);
    }

    public function showPage($id = null)
    {
        echo "MoonController/showPage";
        echo "<hr>";

    }

    public function lian()
    {
        echo "MoooController/lian";
        echo "<hr>";
        $url = route('lian');
        var_dump($url);
        $action = Route::currentRouteAction();
        var_dump($action);
    }
}
