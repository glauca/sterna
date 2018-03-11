<?php

namespace App\Http\Controllers\Api\H5;

use App\Http\Controllers\Controller;
use App\Library\Helper;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Item::latest('id')->get(Item::basicColumn());

        $data = [
            'items' => $items,
            'total' => Item::count(),
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
        $item = Item::findOrFail($id, Item::basicColumn());

        return Helper::response($item);
    }
}
