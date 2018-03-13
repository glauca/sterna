<?php

namespace App\Http\Controllers\H5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('h5.shop.index');
    }

    /**
     * 店铺商品搜索
     *
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function search(Request $request)
    {
        return view('h5.shop.search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('h5.shop.show');
    }
}
