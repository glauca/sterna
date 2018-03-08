<?php

namespace App\Http\Controllers\Api\H5;

use App\Library\Helper;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shops = Shop::latest('id')->get(Shop::basicColunm());

        $data = [
            'items' => $shops,
            'total' => Shop::count(),
        ];

        return Helper::response($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::findOrFail($id, Shop::basicColunm());

        return Helper::response($shop);
    }
}
