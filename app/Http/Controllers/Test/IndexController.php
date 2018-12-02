<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Qmang\Wechat\Qmang;

class IndexController extends Controller
{
    public function index()
    {
        return Qmang::get_msg();
    }
}
