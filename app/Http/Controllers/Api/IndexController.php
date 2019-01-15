<?php
/**
 * Created by PhpStorm.
 * User: 20847
 * Date: 2019/1/15
 * Time: 22:08
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index(Request $request, $name = '')
    {
        $name = $name ? $name : 'Rose';
        return response()->json([
            'status' => true,
            'data' => $name
        ], Response::HTTP_OK);
    }
}