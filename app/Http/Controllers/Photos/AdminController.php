<?php

namespace App\Http\Controllers\Photos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        echo "AdminController/index";
        echo "<hr>";
    }

    public function xiaofang(){
        echo "AdminController/xiaofang";
        echo "<hr>";
    }
}
